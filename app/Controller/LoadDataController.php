<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');

class LoadDataController extends AppController {

    public $name = 'LoadData';
    public $uses = array('Type', 'TypeItem', 'Post');

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
        if ($data == 1) {
            $money_unit = Configure::read('money_unit_sell');
            $house_money_search = Configure::read('house_money_sell');
        } else {
            $money_unit = Configure::read('money_unit_lease');
            $house_money_search = Configure::read('house_money_lease');
        }
        if ($type_item) {
            echo json_encode(array(
                'type_item' => $type_item,
                'money_unit' => $money_unit,
                'house_money_search' => $house_money_search
            ));
        } else {
            return FALSE;
        }
    }

    public function load_city() {
        $this->autoRender = FALSE;
        $city = Configure::read('address_info');
        echo json_encode($city);
    }

    public function load_state() {
        $this->autoRender = FALSE;
        $city_id = $this->request->data('city_id');
        $city = Configure::read('address_info');
        $state = $city[$city_id - 1]['state'];
        echo json_encode($state);
    }

    public function load_town() {
        $this->autoRender = FALSE;
        $city_id = $this->request->data('city_id');
        $state_id = $this->request->data('state_id');
        $city = Configure::read('address_info');
        $town = $city[$city_id - 1]['state'][$state_id - 1]['town'];
        echo json_encode($town);
    }

    public function load_type_news() {
        $this->autoRender = FALSE;
        $type = Configure::read('type_news');
        echo json_encode($type);
    }
     public function load_type_item_news() {
        $this->autoRender = FALSE;
        $type_id = $this->request->data('type_id');
        $type = Configure::read('type_news');
        $type_item = $type[$type_id-1]['childrens'];
        echo json_encode($type_item);
    }

}
