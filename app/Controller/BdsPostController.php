<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');

class BdsPostController extends AppController {

    public $name = 'BdsPost';
    public $uses = array('Post', 'Image', 'Type', 'TypeItem', 'User', 'UserPost', 'News');
    public $components = array('Upload', 'Paginator', 'Session');

    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function index() {
        $this->set('title_for_layout', 'BDS');
        $news = $this->News->find('all', array('limit' => 7, 'order' => array('view_num' => 'desc')));
        $this->set('News', $news);
        $this->paginate = array(
            'fields' => array('Post.*', 'Image.url', 'Type.type_name'),
            'limit' => 10,
            'page' => 1,
            'order' => array('Post.created' => 'desc'),
            'joins' => array(
                array(
                    'table' => 'image',
                    'alias' => 'Image',
                    'fields' => '*',
                    'type' => 'LEFT',
                    'conditions' => array(
                        'Post.id = Image.post_id', 'Image.is_cover' => 1
                    )
                ),
                array(
                    'table' => 'type',
                    'alias' => 'Type',
                    'fields' => '*',
                    'type' => 'LEFT',
                    'conditions' => array(
                        'Post.type_id = Type.type_id'
                    )
                )
            ),
        );
        $data = $this->paginate('Post');
        $this->set('Posts', $data);
    }

    public function list_post() {
        $query_type_id = $query_type_item_id = $query_address = $query_city = $query_state = $query_area = $query_money = $search_field = '';
        $search = array(
            'type_item' => '',
            'address' => '',
            'city' => '',
            'state' => '',
        );
        $type_id = 1;
        if (isset($this->params['url']['location'])) {
            $query_city = array('Post.city' => $this->params['url']['location']);
        }
        if (isset($this->params['url']['bds-type-name'])) {
            $query_type_id = array('Post.type_id' => $this->params['url']['bds-type-name']);
            $type_id = $this->params['url']['bds-type-name'];
            if ($type_id == 1) {

                $house_money = Configure::read('house_money_sell');
            } else {
                $house_money = Configure::read('house_money_lease');
            }
        }
        if (isset($this->params['url']['filter']['type_item_id'])) {
            if ($this->params['url']['filter']['type_item_id'] != -1) {
                $query_type_item_id = array('Post.type_item_id' => $this->params['url']['filter']['type_item_id']);
                $type_item = $this->TypeItem->find('first', array(
                    'conditions' => array(
                        'TypeItem.type_id' => $type_id,
                        'TypeItem.type_item_id' => $this->params['url']['filter']['type_item_id']
                    ),
                    'fields' => array('TypeItem.type_item_id', 'TypeItem.type_item_name'),
                ));

                if ($type_item) {
                    $search['type_item'] = $type_item['TypeItem']['type_item_name'];
                }
            }
        }

        if (isset($this->params['url']['filter']['search'])) {
            $data = $this->params['url']['filter'];
            if (isset($data['address'])) {
                $query_address = array('Post.address LIKE' => '%' . $data['address'] . '%');
                $search['address'] = isset($data['address']) ? $data['address'] : '';
            }
            $city_info = Configure::read('address_info');
            if (isset($data['city']) && $data['city'] != -1) {
                $query_city = array('Post.city' => $data['city']);

                $search['city'] = isset($data['city']) ? $city_info[$data['city'] - 1]['name'] : '';
            }
            if (isset($data['state']) && $data['state'] != -1) {
                $query_state = array('Post.state' => $data['state']);
                $search['state'] = isset($data['state']) ? $city_info[$data['city'] - 1]['state'][$data['state'] - 1]['name'] : '';
            }
            if (isset($data['money']) && $data['money'] != -1) {
                $query_money = array();
                if ($house_money[$data['money']]['from'] != '') {
                    $query_money = array('Post.money_million >=' => $house_money[$data['money']]['from']);
                }
                if ($house_money[$data['money']]['to'] != '') {
                    array_push($query_money, 'Post.money_million <= ' . $house_money[$data['money']]['to']);
                }
            }
            if (isset($data['area']) && $data['area'] != -1) {
                $query_area = array();
                $house_area = Configure::read('house_area');
                if ($house_area[$data['area']]['from'] != '') {
                    $query_area = array('Post.area >=' => $house_area[$data['area']]['from']);
                }
                if ($house_area[$data['area']]['to'] != '') {
                    array_push($query_area, 'Post.area <= ' . $house_area[$data['area']]['to']);
                }
                if ($house_area[$data['area']]['from'] == '' && $house_area[$data['area']]['to'] == '') {
                    array_push($query_area, 'Post.area = null ');
                }
            }
        }
        $this->paginate = array(
            'fields' => array('Post.*', 'Image.url', 'Type.type_name'),
            'conditions' => array(
                $query_address,
                $query_area,
                $query_city,
                $query_money,
                $query_state,
                $query_type_id,
                $query_type_item_id,
            ),
            'limit' => 20,
            'page' => 1,
            'order' => array('Post.created' => 'desc'),
            'joins' => array(
                array(
                    'table' => 'image',
                    'alias' => 'Image',
                    'fields' => '*',
                    'type' => 'LEFT',
                    'conditions' => array(
                        'Post.id = Image.post_id', 'Image.is_cover' => 1
                    )
                ),
                array(
                    'table' => 'type',
                    'alias' => 'Type',
                    'fields' => '*',
                    'type' => 'LEFT',
                    'conditions' => array(
                        'Post.type_id = Type.type_id'
                    )
                )
            ),
        );
        $data = $this->paginate('Post');
        $this->set('Posts', $data);
        $this->set('Search', $search);
    }

    public function create_post() {
        $this->set('title_for_layout', 'Đăng tin');
        $session_user_id = $this->Session->read(SESSION_USER_ID_LOGIN);
        if ($session_user_id != '') {
            if ($this->request->isPost()) {
                $data = $this->request->data('post');
                $data['Post']['type_id'] = $this->request->data('bds-type-name');
                $userPost = $this->request->data('userPost');
                $image = $this->request->data('image_post');
                //Validate input value
                if ($data['Post']['title'] == NULL || $data['Post']['address'] == NULL || $data['Post']['description'] == NULL ||
                        $data['Post']['city'] == NULL || $data['Post']['state'] == NULL) {
                    $this->Session->setFlash(GlobalVar::get_html_error('Hãy điền đầy đủ các thông tin bắt buộc !'));
                }
                $data['Post']['created_datetime'] = strtotime(date("Y-m-d H:i:s"));
                $data['Post']['updated_datetime'] = strtotime(date("Y-m-d H:i:s"));
                if ($data['Post']['money'] != NULL) {
                    if ($data['Post']['type_id'] == 1) {
                        $money_unit = Configure::read('money_unit_sell');
                    } else {
                        $money_unit = Configure::read('money_unit_lease');
                    }
                    $area = $money_unit[$data['Post']['money_unit']]['area'] == 1 ? $data['Post']['area'] * $money_unit[$data['Post']['money_unit']]['area'] : 1;

                    $data['Post']['money_million'] = $data['Post']['money'] * $money_unit[$data['Post']['money_unit']]['rate'] * $area;
                }
                if ($this->Post->save($data)) {
                    //Get lastest insertID
                    $id = $this->Post->getLastInsertID();
                    $userPost['UserPost']['user_id'] = $session_user_id;
                    $userPost['UserPost']['post_id'] = $id;
                    $userPost['UserPost']['datetime_from'] = strtotime($userPost['UserPost']['datetime_from']);
                    $userPost['UserPost']['datetime_to'] = strtotime($userPost['UserPost']['datetime_to']);
                    $this->UserPost->save($userPost);
                }
                if ($id != NULL) {
                    foreach ($image as $k => $img) {
                        if ($img != '') {
                            if ($k == 0) {
                                $is_cover = 1;
                            } else {
                                $is_cover = 0;
                            }
                            $this->Image->create();
                            $this->Image->save(array(
                                'post_id' => $id,
                                'url' => $img,
                                'is_cover' => $is_cover,
                                'created_datetime' => strtotime(date("Y-m-d H:i:s")),
                                'updated_datetime' => strtotime(date("Y-m-d H:i:s"))
                            ));
                        }
                    }
                    $this->Session->setFlash(GlobalVar::get_html_success('Thêm bài đăng thành công !'));
                    $this->redirect('index');
                } else {
                    $this->Session->setFlash(GlobalVar::get_html_error('Thêm bài đăng thất bại !'));
                }
            }
        } else {
            $urlreturn = BASE_URL . 'bdspost/create_post';
            $this->Session->write('url_return', $urlreturn);
            $this->redirect(BASE_URL . 'user/login');
        }
    }

    public function detail($post_id = null) {
        $data = $this->Post->find('first', array(
            'conditions' => array(
                'Post.id' => $post_id
            ),
                )
        );
        $this->set('Post', $data);
//        echo "<pre>";
//        var_dump($data);
//        die;
    }

    public function image_upload() {
        $image = $this->request->data('image');
//print_r($image);
        $upload_config = array(
            'file' => $image,
            'path' => Configure::read('image_dir'),
            'name' => null
        );
        $file_name = $this->Upload->copy($upload_config);
        if (!$this->Upload->getErrors()) {
            $this->responseApi('OK', 'Upload successful。', array(
                'file_name' => $file_name,
                'full_path' => (Configure::read('image_url') . $file_name)
                    ), 'html'
            );
        } else {
            $this->responseApi('ERROR', $this->Upload->getErrors(), null, 'html');
        }
    }

    public function test() {
        $this->layout = 'admin';
    }

}
