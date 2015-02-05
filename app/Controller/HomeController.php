<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HomeController
 *
 * @author systena
 */
class HomeController extends AppController {

    //put your code here

    const LIMIT_RECOMMENDED_POST = 3;
    const LIMIT_POST = 10;
    const PRIORITY = 1;

    var $helpers = array('Html','Paginator');
    var $uses = array('Post', 'Question');

    function beforeFilter() {
        parent::beforeFilter();
        header('Content-Type: text/html; charset=utf-8');
        $this->autoLayout = FALSE;
    }

    function index() {
        
        //Declare variables
        $recommendedPosts = array();
        $newBuyPosts = array();
        $newRentPosts = array();

        //Get recommended posts
        $recommendedPostsDB = $this->Post->find('all', array('conditions' => array(
                'priority' => self::PRIORITY),
            'limit' => self::LIMIT_RECOMMENDED_POST,
            'order' => 'Post.created DESC'));
        //print_r($recommendedPosts);
        if (is_array($recommendedPostsDB)) {
            $temp = array();
            foreach ($recommendedPostsDB as $post) {
                $temp['id'] = $post['Post']['id'];
                $temp['created'] = $post['Post']['created'];
                $temp['title'] = $post['Post']['title'];
                $temp['price'] = $post['Post']['money'];
                $temp['price_unit'] = BDSConst::$_money_unit[$post['Post']['money_unit']];
                $recommendedPosts[] = $temp;
            }
        }
        $this->set('recommendedPosts', $recommendedPosts);


        //Get new nha dat ban
        $newBuyPostsDB = $this->Post->find('all', array('conditions' => array(
                'priority' => self::PRIORITY, 'type' => BDSConst::NHA_DAT_BAN),
            'limit' => self::LIMIT_RECOMMENDED_POST,
            'order' => 'Post.created DESC'));
        if (is_array($newBuyPostsDB)) {
            $temp = array();
            foreach ($newBuyPostsDB as $post) {
                $temp['id'] = $post['Post']['id'];
                $temp['created'] = $post['Post']['created'];
                $temp['title'] = $post['Post']['title'];
                $temp['price'] = $post['Post']['money'];
                $temp['price_unit'] = BDSConst::$_money_unit[$post['Post']['money_unit']];
                $newBuyPosts[] = $temp;
            }
        }
        $this->set('newBuyPosts', $newBuyPosts);

        //Get new nha dat cho thue
        //Get new nha dat ban
        $newRentPostsDB = $this->Post->find('all', array('conditions' => array(
                'priority' => self::PRIORITY, 'type' => BDSConst::NHA_DAT_CHO_THUE),
            'limit' => self::LIMIT_RECOMMENDED_POST,
            'order' => 'Post.created DESC'));
        if (is_array($newRentPostsDB)) {
            $temp = array();
            foreach ($newRentPostsDB as $post) {
                $temp['id'] = $post['Post']['id'];
                $temp['created'] = $post['Post']['created'];
                $temp['title'] = $post['Post']['title'];
                $temp['price'] = $post['Post']['money'];
                $temp['price_unit'] = BDSConst::$_money_unit[$post['Post']['money_unit']];
                $newRentPosts[] = $temp;
            }
        }
        $this->set('newRentPosts', $newRentPosts);
    }

    /**
     * 
     */
    function listMoreNewBuyPost() {

        $newBuyPosts = array();
        //Get new nha dat ban
        $newBuyPostsDB = $this->Post->find('all', array('conditions' => array(
                'priority' => self::PRIORITY, 'type' => BDSConst::NHA_DAT_BAN),
            'limit' => self::LIMIT_POST,
            'order' => 'Post.created DESC'));
        if (is_array($newBuyPostsDB)) {
            $temp = array();
            foreach ($newBuyPostsDB as $post) {
                $temp['id'] = $post['Post']['id'];
                $temp['created'] = $post['Post']['created'];
                $temp['title'] = $post['Post']['title'];
                $temp['price'] = $post['Post']['money'];
                $temp['price_unit'] = BDSConst::$_money_unit[$post['Post']['money_unit']];
                $newBuyPosts[] = $temp;
            }
        }
        $this->set('newBuyPosts', $newBuyPosts);
    }

    /**
     * 
     */
    function listNewBuyPost($subType = 0) {

        $newBuyPosts = array();
        //Get new nha dat ban
        $newBuyPostsDB = $this->Post->find('all', array('conditions' => array(
                'priority' => self::PRIORITY, 'type' => BDSConst::NHA_DAT_BAN,
                'subType' => $subType), 'limit' => self::LIMIT_POST,
            'order' => 'Post.created DESC'));
        if (is_array($newBuyPostsDB)) {
            $temp = array();
            foreach ($newBuyPostsDB as $post) {
                $temp['id'] = $post['Post']['id'];
                $temp['created'] = $post['Post']['created'];
                $temp['title'] = $post['Post']['title'];
                $temp['price'] = $post['Post']['money'];
                $temp['price_unit'] = BDSConst::$_money_unit[$post['Post']['money_unit']];
                $newBuyPosts[] = $temp;
            }
        }
        $this->set('newBuyPosts', $newBuyPosts);
    }

    function listNewRentPost($subType = 0) {

        $newRentPosts = array();
        //Get new nha dat cho thue
        //Get new nha dat ban
        $newRentPostsDB = $this->Post->find('all', array('conditions' => array(
                'priority' => self::PRIORITY, 'type' => BDSConst::NHA_DAT_CHO_THUE,
                'subType' => $subType), 'limit' => self::LIMIT_RECOMMENDED_POST,
            'order' => 'Post.created DESC'));
        if (is_array($newRentPostsDB)) {
            $temp = array();
            foreach ($newRentPostsDB as $post) {
                $temp['id'] = $post['Post']['id'];
                $temp['created'] = $post['Post']['created'];
                $temp['title'] = $post['Post']['title'];
                $temp['price'] = $post['Post']['money'];
                $temp['price_unit'] = BDSConst::$_money_unit[$post['Post']['money_unit']];
                $newRentPosts[] = $temp;
            }
        }
        $this->set('newRentPosts', $newRentPosts);
    }

    function listMoreNewRentPost() {

        $newRentPosts = array();
        //Get new nha dat cho thue
        //Get new nha dat ban
        $newRentPostsDB = $this->Post->find('all', array('conditions' => array(
                'priority' => self::PRIORITY, 'type' => BDSConst::NHA_DAT_CHO_THUE),
            'limit' => self::LIMIT_RECOMMENDED_POST,
            'order' => 'Post.created DESC'));
        if (is_array($newRentPostsDB)) {
            $temp = array();
            foreach ($newRentPostsDB as $post) {
                $temp['id'] = $post['Post']['id'];
                $temp['created'] = $post['Post']['created'];
                $temp['title'] = $post['Post']['title'];
                $temp['price'] = $post['Post']['money'];
                $temp['price_unit'] = BDSConst::$_money_unit[$post['Post']['money_unit']];
                $newRentPosts[] = $temp;
            }
        }
        $this->set('newRentPosts', $newRentPosts);
    }

    function view() {
        $this->autoLayout = FALSE;
    }

    function showList($type = 0, $subType = 0) {
        $this->autoLayout = FALSE;
    }

    function lien_he() {
        $this->autoLayout = FALSE;
        if ($this->request->is('post')) {
            $data = $this->request->data;
            $question = array();
            if (isset($data['mobile'])) {
                $question['phone_number'] = $data['mobile'];
            } else {
                $question['phone_number'] = '';
            }
            $question['name'] = $data['name'];
            $question['title'] = $data['title'];
            $question['email'] = $data['email'];
            $question['question'] = $data['contact_area'];

            //save record
            $this->Question->create();
            if (!$this->Question->save($question)) {
                $this->set('error', 'Đã có lỗi xảy ra !');
            } else {
                $this->render('send_contact_success');
            }
        }
    }

    function ban_chung_cu($sorted = 'created') {
        
        $this->paginate = array(
            'limit' => self::LIMIT_POST,
            'order' => array(
                $sorted => 'desc'
            ),
            'conditions' => array('type' => BDSConst::NHA_DAT_BAN,
                'subtype' => BDSConst::BAN_CHUNG_CU)
        );
        $this->Post->recursive = 0;
        $this->set('posts', $this->paginate());
        //print_r($this->paginate());
    }

    /**
     * 
     * @param type $type
     * @param type $subType
     */
    function listTheoLoaiHinhBDS($type = 0, $subType = 0) {
        
    }

}
