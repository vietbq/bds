<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
App::uses('News', 'Model');

class AppController extends Controller {

    function responseApi($code = 'OK', $message = '', $data = array(), $header_type = 'json') {
        if ($header_type == 'json') {
            header('Content-Type: application/json');
        } else {
            header('Content-Type: text/html');
        }
        echo json_encode(array(
            'code' => $code,
            'message' => $message,
            'data' => $data
                )
        );
        die;
    }

    function beforeFilter() {
        parent::beforeFilter();
        $News = new News();
        if ((strpos(strtolower($this->name), 'bdspost') !== false && in_array($this->action, array('index'))) || strpos(strtolower($this->name), 'news') !== false) {

            
            $gocKienTruc = $News->find('all', array('conditions' => array(
                    'News.type_id' => 2
                ),
                'order' => array('updated_datetime' => 'desc'),
                'limit' => 5
                    )
            );
            $nhaDep = $News->find('all', array('conditions' => array(
                    'News.type_id' => 3
                ),
                'order' => array('updated_datetime' => 'desc'),
                'limit' => 5
                    )
            );
            $tuVan = $News->find('all', array('conditions' => array(
                    'News.type_id' => 4
                ),
                'order' => array('updated_datetime' => 'desc'),
                'limit' => 5
                    )
            );
            $sanGiaoDich = $News->find('all', array('conditions' => array(
                    'News.type_id' => 6
                ),
                'order' => array('updated_datetime' => 'desc'),
                'limit' => 5
                    )
            );
            $Category = array(
                'gocKT' => $gocKienTruc,
                'nhaD' => $nhaDep,
                'tuVan' => $tuVan,
                'sanGD' => $sanGiaoDich
            );
            $this->set('Category_Right', $Category);
        } else {
            if ((strpos(strtolower($this->name), 'bdspost') !== false && in_array($this->action, array('detail', 'list_post')))) {
                $news = $News->find('all', array('limit' => 5, 'order' => array('view_num' => 'desc')));
                $this->set('NewsHot',$news);
            }
        }
    }

}
