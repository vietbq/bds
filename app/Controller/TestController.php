<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TestContronller
 *
 * @author user
 */
class TestController extends AppController{
    //put your code here
    function index(){
        $today = date('Ymd_His');
        echo $today;
    }
}
