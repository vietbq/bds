<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminController
 *
 * @author systena
 */
App::uses('AuthComponent', 'Controller/Component');

class AdminController extends AppController {

    public $layout = 'admin_layout';
    public $helpers = array('Html', 'Paginator');
    public $components = array('Session');
    public $uses = array('Admin', 'Post');
    public $username;

    //put your code here
    public function beforeFilter() {
        parent::beforeFilter();
        $this->autoRender = FALSE;
        header('Content-Type: text/html; charset=utf-8');
    }

    function index() {
        $username = $this->checkLogin();
        $this->set('username', $username);
        $this->render('index');
    }

    function login() {
        $this->layout = FALSE;
        // if we get the post information, try to authenticate
        if ($this->request->is('post')) {
            $user_data = $this->request->data;
            if (!empty($user_data)) {
                $username = $user_data['username'];
                $password = AuthComponent::password($user_data['password']);
                $user = $this->Admin->find('first', array('conditions' => array('username' => $username, 'password' => $password)));
                if (empty($user)) {
                    //Return login page and display error
                    $this->set('error', BDSConst::ACCOUNT_NOT_EXIST);
                    return $this->render('login');
                } else {
                    //Write Session and go to index
                    $this->Session->write(BDSConst::SESSION_LOGIN_KEY, $username);
                    return $this->redirect('index');
                }
            }
        }
        $this->render('login');
    }

    function regist() {
        $this->layout = FALSE;
        $this->set('title', 'Create a new account ');
        if ($this->request->is('post')) {
            $user = $this->request->data;
            //Check username exist 
            if ($this->checkExist('username', $user['username'])) {
                $this->set('error', BDSConst::USERNAME_EXIST_ERROR);
                $this->render('regist');
                return;
            }
            //Check email exist
            if ($this->checkExist('email', $user['email'])) {
                $this->set('error', BDSConst::EMAIL_EXIST_ERROR);
                $this->render('regist');
                return;
            }
            //Check password and password confirm are match
            if ($user['password'] != $user['confirm_password']) {
                $this->set('error', BDSConst::PASSWORD_DOES_NOT_MATCH_ERROR);
                $this->render('regist');
            }
            if ($this->Admin->save($user)) {
                //Write Session and go to index
                $this->Session->write(BDSConst::SESSION_LOGIN_KEY, $username);
                return $this->redirect(array('controller' => 'Admin', 'action' => 'index'));
            } else {
                $this->set('error', BDSConst::COMMON_ERROR);
            }
        }

        $this->render('regist');
    }

    function checkLogin() {

        //Get username from session
        $username = $this->Session->read(BDSConst::SESSION_LOGIN_KEY);
        if ($username != NULL) {
            return $username;
        }
        //not login
        return $this->redirect('login');
    }

    function checkExist($field, $value) {
        $user = $this->Admin->find('first', array('conditions' => array($field => $value)));
        if (empty($user)) {
            return false;
        } else {
            return true;
        }
    }

    function changePass() {
        $this->render('change_pass');
    }

    function createPost() {

        $this->layout = 'admin';
        $this->set('title_for_layout', 'Create new post ');
        if ($this->request->is('post')) {
            //            echo '<pre>';
            //            print_r($_FILES);
            //            echo '</pre>';die;
            //Get param
            $data = $this->request->data;

            //Validate input value
            if ($data['title'] == NULL || $data['address'] == NULL || $data['description_area'] == NULL ||
                    $data['city'] == NULL || $data['state'] == NULL) {
                $this->Session->flash('Hãy điền đầy đủ các thông tin bắt buộc !');
                $this->render('create_post');
            }
            $newPost = array('Post' => array(
                    'title' => $data['title'],
                    'area' => $data['area'],
                    'money' => $data['price'],
                    'money_unit' => $data['donviTien'],
                    'address' => $data['address'],
                    'city' => $data['city'],
                    'state' => $data['state'],
                    'view_number' => 0,
                    'status' => 0,
                    'created' => date('Y-m-d H:i:s'),
                    'type' => $data['optionsRadios'],
                    'subtype' => $data['loai_nha_dat'],
                    'description' => $data['description_area']));
            $this->Post->create();
            if ($this->Post->save($newPost)) {
                //Get lastest insertID
                $id = $this->Post->getLastInsertID();
            }

            if ($id != NULL) {
                //upload folder - make sure to create one in webroot
                $uploadFolder = WWW_ROOT . "img";

                // create the folder if it does not exist
                if (!is_dir($uploadFolder)) {
                    mkdir($uploadFolder);
                }

                //full path to upload folder
                $uploadPath = $uploadFolder . "/" . $id . "/";
                // create the folder if it does not exist
                if (!is_dir($uploadPath)) {
                    mkdir($uploadPath);
                }

                //Upload image
                for ($i = 0; $i < count($_FILES['myfile']['name']); $i++) {
                    //Get the temp file path
                    $tmpFilePath = $_FILES['myfile']['tmp_name'][$i];
                    $fileType = $_FILES['myfile']['type'][$i];

                    //                    $allowedExts = array("gif", "jpeg", "jpg", "png");
                    //                    $temp = explode(".", $_FILES["myfile"]["name"]);
                    //                    $extension = end($temp);

                    if ((($fileType == "image/gif") || ($fileType == "image/jpeg") ||
                            ($fileType == "image/jpg") || ($fileType == "image/pjpeg") ||
                            ($fileType == "image/x-png") || ($fileType == "image/png")) &&
                            ($_FILES["myfile"]["size"][$i] < 4096000)) {
                        if ($_FILES["myfile"]["error"][$i] > 0) {
                            echo "Error: " . $_FILES["myfile"]["error"][$i] . "<br>";
                        } else {
                            //Make sure we have a filepath
                            if ($tmpFilePath != "") {
                                //Setup our new file path
                                $newFilePath = $uploadPath . $_FILES['myfile']['name'][$i];

                                //Upload the file into the temp dir
                                if (move_uploaded_file($tmpFilePath, $newFilePath)) {

                                    //Handle other code here
                                    $this->render('success');
                                }
                            }
                        }
                    } else {
                        echo "Invalid file";
                    }
                }
            }
        }
        $this->render('create_post');
    }

    /**
     * Check email has used ?
     * @return type
     */
    function checkEmail() {
        if ($this->request->is('post')) {
            $email = $this->request->data['email'];
            $user = $this->Admin->find('first', array('conditions', array('email' => $email)));
            if (empty($user)) {
                echo 'Email is OK';
                return;
            } else {
                echo 'This email has already in used !';
                return;
            }
        }
    }

    /**
     * Check username has used ?
     * @return type
     */
    function checkUsername() {
        if ($this->request->is('post')) {
            $username = $this->request->data['username'];
            $user = $this->Admin->find('first', array('conditions', array('username' => $username)));
            if (empty($user)) {
                echo 'Username is available';
                return;
            } else {
                echo 'This username has already in used !';
                return;
            }
        }
    }

    function listAllPost() {
//        $this->Post->recursive = 0;
        $this->paginate = array(
            'limit' => 20,
            'order' => array(
                'created' => 'desc'
            )
        );
        $posts = $this->paginate('Post');
        $this->set('posts', $posts);
//        $posts = $this->Post->find('all', array('field' => array('id', 'title'), 'order' => 'created DESC'));
        $this->render('listAllPost');
    }

}
