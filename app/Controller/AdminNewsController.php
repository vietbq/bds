<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');
App::import('Vendor', 'simple_html_dom');

class AdminNewsController extends AppController {

    public $name = 'AdminNews';
    public $uses = array('News');
    public $components = array('Session', 'Upload');

    public function index() {
        
    }

    public function add() {
        $this->layout = 'admin';
        $this->set('title_for_layout', 'Tạo bài tin tức mới');
        if ($this->request->isPost()) {
            $data = $this->request->data;
            $data['News']['view_num'] = 0;
            $data['News']['created_datetime'] = $data['News']['updated_datetime'] = strtotime(date("Y-m-d H:i:s"));
            if ($data['News']['type_id'] == -1) {
                $this->Session->setFlash(GlobalVar::get_html_error("Thêm tin tức thất bại"));
                $this->redirect('adminnews/add');
            }
            if ($data['News']['type_item_id'] == -1) {
                $this->Session->setFlash(GlobalVar::get_html_error("Thêm tin tức thất bại"));
                $this->redirect('adminnews/add');
            }
            $image = $this->request->data('image');
            if ($image ) {
                $upload_config = array(
                    'file' => $image,
                    'path' => Configure::read('image_dir'),
                    'name' => null
                );
                $file_name = $this->Upload->copy($upload_config);
                if ($file_name) {
                    $data['News']['thumbnails'] = Configure::read('image_url') . $file_name;
                }else{
                    var_dump('2');
                    die;
                }
            } else {
                $data['News']['thumbnails'] = '';
                var_dump('1');
                die;
            }
            if ($this->News->save($data)) {
                $this->Session->setFlash(GlobalVar::get_html_success("Thêm tin tức thành công"));
            } else {
                $this->Session->setFlash(GlobalVar::get_html_error("Thêm tin tức thất bại"));
            }
        }
    }

    public function addByLink() {
//        $this->autoRender = false;
        $result = array();
        $response = array();
        $url = 'http://dothidiaoc.com/tin-tuc-su-kien/p3.htm';
        $curl = new cURL();
        $html = $curl->get($url);
        if ($html) {
            $pattern = '/<div.*?class="listlistnews".*?<a href="(.*?)".*?title="(.*?)".*?img src="(.*?)".*?<\/a>.*?<div class="listlistnews-title".*?<span.*?>(.*?)<\/span>.*?<p>(.*?)<\/p>/ism';
            $pattern = '/<div class="listlistnews".*?ul>.*?<li>.*?<a href="(.*?)" title="(.*?)">.*?<\/a>.*?<\/li>.*?<\/ul>.*?<\/div>/ism';
            preg_match_all($pattern, $html, $result);
            for ($i = 0; $i < count($result); $i++) {
                $response[] = array(
                    'url' => $result[1][$i],
                    'title' => $result[2][$i],
                    'thumbnails' => $result[3][$i],
                    'datetime' => $result[4][$i],
                    'description' => trim($result[5][$i])
                );
            }
            echo "<pre>";
            var_dump($result);
        } else {
            echo 0;
        }
        die;
    }

    public function getListNews() {
        $this->autoRender = FALSE;
        $result = array();
        $response = array();
        $url = 'http://dothidiaoc.com/phap-ly-nha-dat.htm';
        $curl = new cURL();
        $html = $curl->get($url);
        echo "<pre>";
        if ($html) {
            $data = str_get_html($html);
            if ($data) {
                $listlistnews = $data->find('div.listlistnews ul');
                if ($listlistnews) {
                    $listnews = $listlistnews[0]->find('li');
                    if ($listnews) {
                        foreach ($listnews as $vl) {
                            $data = array();
                            $data1 = $vl->find('div.listlistnews-img a');
                            $data['News']['url'] = 'http://dothidiaoc.com' . $data1[0]->href;
                            $data['News']['title'] = trim($data1[0]->attr['title']);
                            $img = $data1[0]->find('img');
                            $data['News']['thumbnails'] = $img[0]->src;
                            $data2 = $vl->find('div.listlistnews-title');
                            $date = $data2[0]->find('span', 0)->plaintext;
                            $data['News']['created_datetime'] = $data['News']['updated_datetime'] = strtotime($date);
                            $desc = $data2[0]->find('p', 0)->plaintext;
                            $data['News']['description'] = trim($desc);
                            $url_content = $data['News']['url'];
                            if ($this->News->find('first', array('conditions' => array('url' => $data['News']['url'])))) {
                                continue;
                            }
                            $content_html = $curl->get($url_content);
                            if ($content_html) {
                                $content_dom = str_get_html($content_html);
                                $content = $content_dom->find('div.news-detail-content', 0);
                                if ($content) {
                                    $data['News']['content'] = $content;
                                }
                                $reference = $content_dom->find('div.news-source-news em', 0);
                                if ($reference) {
                                    $data['News']['reference'] = trim($reference->plaintext);
                                }
                            }
                            $data['News']['type_id'] = 4;
                            $data['News']['type_item_id'] = 1;
                            $response[] = $data;
                            if ($this->News->save($data)) {
                                print_r('ok');
                            }
                        }
                    }
                }
            }
        }
    }

}
