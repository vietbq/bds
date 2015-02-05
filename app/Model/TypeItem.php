<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppModel', 'Model');

class TypeItem extends AppModel {

    public $name = 'TypeItem';
    public $useTable = 'type_item';
    public $primaryKey = 'type_item_id';
    public $belongsTo = array(
        'Type' => array(
            'className' => 'Type',
            'foreignKey' => 'type_id'
        )
    );

}
