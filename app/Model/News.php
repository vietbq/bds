<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppModel','Model');
class News extends AppModel{
    public $name = 'News';
    public $useTable = 'news';
    public $primaryKey = 'news_id';
    
}
