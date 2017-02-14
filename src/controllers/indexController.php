<?php

/**
 * Created by PhpStorm.
 * User: zekri
 * Date: 14/02/17
 * Time: 11:05
 */
class indexController
{
    public function defautAction(){
        $dao = new userDao();
        $dao->test();
    }
}