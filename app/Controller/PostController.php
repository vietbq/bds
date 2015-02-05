<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');

class PostController extends AppController {

    public $name = 'Post';
    public $components = array('Upload', 'Paginator', 'Session');
    public $uses = array('Post', 'Image', 'Type', 'TypeItem');

    public function index() {
        $this->layout = 'admin';
        $this->paginate = array(
            'fields' => array('Post.*', 'Image.url','Type.type_name'),
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
                        'Post.type_id = Type.type_id', 'Image.is_cover' => 1
                    )
                )
            ),
        );
        $data = $this->paginate('Post');
        $this->set('Posts', $data);
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

    function createPost() {
        $this->layout = 'admin';
        $this->set('title_for_layout', 'Create new post ');
        $this->set('TypePost', $this->Type->find('all'));
        if ($this->request->isPost()) {
            $data = $this->request->data('post');
            $image = $this->request->data('image_post');
            //Validate input value
            if ($data['Post']['title'] == NULL || $data['Post']['address'] == NULL || $data['Post']['description'] == NULL ||
                    $data['Post']['city'] == NULL || $data['Post']['state'] == NULL) {
                $this->Session->setFlash(GlobalVar::get_html_error('Hãy điền đầy đủ các thông tin bắt buộc !'));
                $this->render('create_post');
            }
            $data['Post']['created_datetime'] = strtotime(date("Y-m-d H:i:s"));
            $data['Post']['updated_datetime'] = strtotime(date("Y-m-d H:i:s"));
            if ($this->Post->save($data)) {
                //Get lastest insertID
                $id = $this->Post->getLastInsertID();
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
        $this->render('create_post');
    }

    public function load_type_item() {
        $this->autoRender = FALSE;
        $data = $this->request->data('type');
        $type_item = $this->TypeItem->find('all', array(
            'conditions' => array(
                'TypeItem.type_id' => $data
            ),
            'fields' => array('TypeItem.type_item_id', 'TypeItem.type_item_name'),
            'order' => array('TypeItem.display_order' => 'asc')
        ));
        if ($type_item) {
            echo json_encode($type_item);
        } else {
            return FALSE;
        }
    }

    public function test() {
        $this->layout = 'default';
    }

}
