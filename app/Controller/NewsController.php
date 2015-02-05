<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');

class NewsController extends AppController {

    public $name = 'News';
    public $uses = array('News');
    public $helpers = array('Paginator', 'Html', 'Form');

    public function beforeFilter() {
        parent::beforeFilter();
    }

    public function view($news_id) {
        $data = $this->News->find('first', array('conditions' => array('news_id' => $news_id)));
        if ($data) {
            $this->set('News', $data);
            $this->set('title_for_layout', $data['News']['title']);
            $relate = $this->News->find('all', array(
                'conditions' => array('news_id <>' => $news_id, 'type_id' => $data['News']['type_id'], 'type_item_id' => $data['News']['type_item_id']),
                'limit' => 6,
                'order' => array('updated_datetime' => 'desc')
            ));
            $this->set('Relate', $relate);
            $this->set('type_id', $data['News']['type_id']);
            $this->set('item_id', $data['News']['type_item_id']);
        }
    }

    public function index() {
        $query_type_news = $query_item_news = '';
        if (isset($this->params['url']['type_news'])) {
            $type_news_arr = Configure::read('type_news');
            $type_news = $this->params['url']['type_news'];
            if (is_numeric($type_news) && $type_news >= 1 && $type_news <= count($type_news_arr)) {
                $query_type_news = array('News.type_id' => $type_news);
                $this->set('type_id', $type_news);
                if (isset($this->params['url']['item_news'])) {
                    $item_news = $this->params['url']['item_news'];
                    if (is_numeric($item_news) && $item_news >= 1 && $item_news <= count($type_news_arr[$type_news - 1]['childrens'])) {
                        $query_item_news = array('News.type_item_id' => $item_news);
                        $this->set('item_id', $item_news);
                    }
                }
            }
            $this->paginate = array(
                'conditions' => array(
                    $query_item_news,
                    $query_type_news
                ),
                'order' => array('updated_datetime' => 'DESC'),
                'limit' => 10,
            );
            $data = $this->paginate('News');
            $this->set('News', $data);
        } else {
            throw new NotFoundException();
        }
    }

}
