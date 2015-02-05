<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppModel', 'Model');

class UserPost extends AppModel {

    public $name = 'UserPost';
    public $useTable = 'user_post';
    public $primaryKey = 'id';
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
   
    public $validate = array(
        'name_contact' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => 'Hãy nhập họ tên người liên lạc',
                'required' => 'create_post'
            )
        ),
        'mobile_contact' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => 'Hãy nhập số điện thoại liên lạc '
            )
        ),
    );

}
