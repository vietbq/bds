<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('AuthComponent', 'Controller/Component');

class UserController extends AppController {

    public $name = 'User';
    public $uses = array('User', 'UserPost');
    public $components = array('Session');

    public function login() {
        $session_user_id = $this->Session->read(SESSION_USER_ID_LOGIN);
        $urlreturn = $this->Session->read('url_return');
        if ($session_user_id == '') {
            if ($this->request->is('post')) {
                $user_data = $this->request->data;
                if (!empty($user_data)) {
                    $email = $user_data['email'];
                    $password = AuthComponent::password($user_data['password']);
                    $user = $this->User->find('first', array('conditions' => array('email' => $email, 'password' => $password)));
                    if (empty($user)) {
                        //Return login page and display error
                        $this->Session->setFlash(GlobalVar::get_html_error(BDSConst::ACCOUNT_NOT_EXIST));
                    } else {
                        //Write Session and go to index
                        $this->Session->write(SESSION_USER_EMAIL_LOGIN, $email);
                        $this->Session->write(SESSION_USER_ID_LOGIN, $user['User']['user_id']);
                        $this->Session->write(SESSION_USER_NAME_LOGIN, $user['User']['name']);
                        if ($urlreturn != '') {
                            return $this->redirect($urlreturn);
                        } else {
                            return $this->redirect(BASE_URL . 'bdspost/index');
                        }
                    }
                }
            }
        } else {
            if ($urlreturn != '') {
                return $this->redirect($urlreturn);
            } else {
                return $this->redirect(BASE_URL . 'bdspost/index');
            }
        }
    }

    public function register() {
        if ($this->request->isPost()) {
            $data = $this->request->data('user');
            $active_code = $this->generate_active_code();
            $data['User']['active_code'] = $active_code;
            $link = BASE_URL . 'user/active?active_code=' . $active_code . '&email=' . $data['User']['email'];
            $data['User']['created_datetime'] = strtotime(date("Y-m-d H:i:s"));
            $data['User']['updated_datetime'] = strtotime(date("Y-m-d H:i:s"));
            $data['User']['password'] = AuthComponent::password($data['User']['password']);
            if ($data['User']['city'] == -1) {
                $data['User']['city'] = '';
            }
            if ($data['User']['state'] == -1) {
                $data['User']['state'] = '';
            }
//            var_dump($data);die;
            if (!$this->User->find('first', array('conditions' => array('email' => $data['User']['email'])))) {
                $Email = new CakeEmail('gmail');
                $Email->to($data['User']['email'])
                        ->emailFormat('html')
                        ->template('register')->viewVars(array('email' => $data['User']['email'], 'link' => $link, 'tel' => $data['User']['tel'], 'name' => $data['User']['name']))
                        ->from(array('404ebook@gmail.com' => 'BDS'))
                        ->subject('[BDS] ACTIVE ACCOUNT');
                if ($Email->send()) {
                    if ($this->User->save($data)) {
                        $this->Session->setFlash(GlobalVar::get_html_success('Đăng ký thành công! Hãy vào email để kích hoạt tài khoản.'));
                    } else {
                        $this->Session->setFlash(GlobalVar::get_html_error(
                                        'Đăng ký thất bại! Hãy đăng ký lại.'));
                    }
                } else {
                    $this->Session->setFlash(GlobalVar::get_html_error(
                                    'Gửi email thất bại! Hãy đăng ký lại.'));
                }
            } else {
                $this->Session->setFlash(GlobalVar::get_html_error(
                                'Đã có tài khoản sử dụng email này! Hãy đăng ký lại bằng email khác.'));
            }
        }
    }

    public function active() {
        $active_code = isset($this->params['url']['active_code']) ? $this->params['url']['active_code'] : '';
        $email = isset($this->params['url']['email']) ? $this->params['url']['email'] : '';
        if ($active_code == '' || $email == '') {
            die();
        } else {
            $user = $this->User->find('first', array('conditions' => array('email' => $email, 'active_code' => $active_code, 'status' => 0)));
            if ($user) {
                $user['User']['status'] = 1;
                $user['User']['active_code'] = '';
                if ($this->User->save($user)) {
                    $this->Session->setFlash(GlobalVar::get_html_success('Active account successful'));
                    return;
                }
            }
        }
        die();
    }

    public function check_captcha() {
        $this->autoRender = FALSE;
        session_start();
        $captcha = $this->request->data('captcha');
        //print_r($_SESSION["captcha_code"]);
        if ($captcha == $_SESSION["captcha_code"]) {
            echo json_encode(array('ret' => 'OK'));
        } else {
            // print_r('fail');
            return FALSE;
        }
    }

    public function profile() {
        $session_user_id = $this->Session->read(SESSION_USER_ID_LOGIN);
        if ($session_user_id != '') {
            if ($user = $this->User->find('first', array('conditions' => array('user_id' => $session_user_id)))) {
                if ($this->request->isPost()) {
                    $user = $this->request->data('user');
                    $user['User']['user_id'] = $session_user_id;
                    $user['User']['updated_datetime'] = strtotime(date("Y-m-d H:i:s"));
                    $this->User->save($user);
                }
                $user = $this->User->find('first', array('conditions' => array('user_id' => $session_user_id)));
                $this->Session->write(SESSION_USER_NAME_LOGIN, $user['User']['name']);
                $this->set('User', $user);
            } else {
                $this->redirect('/user/login');
            }
        } else {
            $this->redirect('/user/login');
        }
    }

    public function userpost() {
        $session_user_id = $this->Session->read(SESSION_USER_ID_LOGIN);
        if ($session_user_id != '') {
            if ($user = $this->User->find('first', array('conditions' => array('user_id' => $session_user_id)))) {
                $this->UserPost->unbindModel(
                        array('belongsTo' => array('User'))
                );
                $posts = $this->UserPost->find('all', array(
                    'conditions' => array(
                        'UserPost.user_id' => $session_user_id,
                    ),
                    'fields' => array('UserPost.*', 'Post.*'),
                    'joins' => array(
                        array('table' => 'posts',
                            'alias' => 'Post',
                            'fields' => '*',
                            'type' => 'LEFT',
                            'conditions' => array(
                                'Post.id= UserPost.post_id',
                            ),
                        ),
                    )
                        )
                );
                $this->set('Posts', $posts);
            } else {
                $this->redirect('/user/login');
            }
        } else {
            $this->redirect('/user/login');
        }
    }

    private function generate_active_code() {
        $length = 5;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $active_code = '';
        for ($i = 0; $i < $length; $i++) {
            $active_code .= $characters[rand(0, strlen($characters) - 1)];
        } return $active_code;
    }

    public function logout() {
        $this->Session->write(SESSION_USER_EMAIL_LOGIN, '');
        $this->Session->write(SESSION_USER_ID_LOGIN, '');
        $this->Session->write(SESSION_USER_NAME_LOGIN, '');
        return $this->redirect(BASE_URL . 'user/login');
    }

}
