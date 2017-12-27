<?php
namespace Admin\Controller;

use Think\Controller;
class UserController extends Controller {
  //点击登录，进行登录验证
  public function loginadmin(){
    $model = D("Admin");
    $arr = I('post.');
    $where['name'] = $arr['name'];
    $where['password'] = $arr['password'];
    if(empty($where)){
        $this->error('没有数据传入');            
    }else{
        $res = $model->where($where)->select();
       // var_dump($res);die;
        if($res){
            session('uname',$res[0]['name']);
            session('id',$res[0]['id']);
            $this->success('登录成功',U("admin/index"));
            
            // session('username');取值
        }else{
            $this->error('登录失败！账户或密码错误',U("user/login"));
            
        }
    }
}
}