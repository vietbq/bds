<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Post
 *
 * @author user
 */
class Post extends AppModel {

    //put your code here
    public $useTable = 'posts';
    var $name = 'Post';
    public $primaryKey = 'id';
    public $hasMany = array(
        'Image' => array(
            'className' => 'Image',
            'conditions' => array('Image.post_id' => 'Post.id'),
            'order' => 'Image.updated_datetime asc'
        )
    );
    public $hasOne = array(
        'UserPost' => array(
            'className' => 'UserPost',
            'conditions' => array('UserPost.post_id' => 'Post.id'),
            'dependent' => true
        )
    );
    public $validate = array(
        'title' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => 'Hãy nhập tiêu đề',
                'required' => 'create_post'
            )
        ),
        'address' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => 'Hãy nhập địa chỉ'
            )
        ),
        'description' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => 'Hãy nhập nội dung mô tả '
            )
        ),
    );
    
}
