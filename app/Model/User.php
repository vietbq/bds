<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppModel', 'Model');

class User extends AppModel {

    public $name = 'User';
    public $useTable = 'user';
    public $primaryKey = 'user_id';
//    public $validate = array(
//        'name' => array(
//            'notEmpty' => array(
//                'rule' => 'notEmpty',
//                'message' => 'Hãy nhập họ tên',
//                'required' => 'register'
//            )
//        ),
//        'email' => array(
//            'email' => array(
//                'rule' => 'email',
//                'message' => 'Nhập email chưa chính xác'
//            ),
//            'unique' => array(
//                'rule' => 'uniqueEmail',
//                'message' => 'Email này đã được đăng ký'
//            )
//        ),
//        'password' => array(
//            'notEmpty' => array(
//                'rule' => 'notEmpty',
//                'message' => 'Hãy nhập mật khẩu',
//                'required' => 'create'
//            ),
//            'length' => array(
//                'rule' => array('between', 8, 40),
//                'message' => 'Mật khẩu phải có nhiều hơn 8 ký tự',
//            ),
//        ),
//        'comfirm_password' => array(
//            'length' => array(
//                'rule' => array('between', 8, 40),
//                'message' => 'Mật khẩu phải có nhiều hơn 8 ký tự',
//            ),
//            'compare' => array(
//                'rule' => array('matchPass'),
//                'message' => 'Mật khẩu xác nhận chưa chính xác',
//            )
//        )
//    );
//
//    public function beforeSave($options = array()) {
//        parent::beforeSave($options);
//
//        if (isset($this->data[$this->alias]['password'])) {
//            $passwordHasher = new SimplePasswordHasher(array('hashType' => 'md5'));
//            $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
//        }
//    }
//
//    public function uniqueEmail($check) {
//        $existingEmail = $this->find('count', array(
//            'conditions' => array(
//                'email' => $this->data[$this->alias]['email'],
//            ),
//            'recursive' => -1
//        ));
//        return ($existingEmail == 0);
//    }
//
//    public function matchPass() {
//        return $this->data[$this->alias]['password'] === $this->data[$this->alias]['comfirm_password'];
//    }

}
