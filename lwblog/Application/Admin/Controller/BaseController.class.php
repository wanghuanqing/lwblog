<?php

namespace Admin\Controller;

use Think\Controller;

class BaseController extends Controller{
    public function  _initialize(){
        if(!isset($_SESSION['id'])){
            $this->error('用户还未登录',U('user/login'),1);
        }
    }
}