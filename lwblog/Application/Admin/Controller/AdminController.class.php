<?php
namespace Admin\Controller;

use Think\Controller;
require 'BaseController.class.php';
class AdminController extends BaseController {
    public function index(){
        $this->display();
        }
    public function admin(){
        $this->display();
     }
    

     //用户注销
     function layout(){  
        if(session_destroy()){
            $data['code'] = 200;        
            $data['msg'] = '注销成功';
        }else{
            $data['code'] = 404;        
            $data['msg'] = '注销失败';
        }
        echo json_encode($data);
    }


    //获取home信息并渲染到编辑页面
    public function home(){
        // $where['id'] = I("id");
        $model = D('Blog');
        $count['blog'] = $model->count();// 查询满足要求的总记录数
        $model1 = D('User');
        $count['user'] = $model1->count();// 查询满足要求的总记录数
        $model2 = D('Message');
        $count['message'] = $model2->count();// 查询满足要求的总记录数
        $model3 = D('Comment');
        $count['comment'] = $model3->count();// 查询满足要求的总记录数
        // var_dump($res[0]);
        $this->assign('count',$count);// 赋值数据集
        $this->display();
    }
         //添加兼职信息

         public function blog_add1(){
            $file = $_FILES['photo'];
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            // $upload->saveName  =     "";
            $upload->rootPath  =     './Public/blogimg'; // 设置附件上传根目录
            $upload->savePath  =     './upload'; // 设置附件上传（子）目录
            // 上传文件 
            $info   =   $upload->uploadOne($file);
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError());
            }else{// 上传成功
                
                $arr = I('post.');  
                $model = D('Blog');
                $array['title']=$arr['title'];
                $array['content']=$arr['content'];
                $array['desc']=$arr['desc'];
                $array['type']=$arr['type'];
                $array['author']=$_SESSION['uname'];
                $array['uid']=$_SESSION['uid'];
                $array['Rtime']=date("Y-m-d H:i:s");
                $array['photo']=$info['savepath'].$info['savename'];
    
                if($model->create($array)) {
                        $result = $model->add($array); 
                    if($result) {
                        
                        $this->success('发布成功',U('admin/bloglist'),1);                    
                    }else{
                            $this->error("发布失败",U('admin/01'),1);
                            }
                }else{
                    $data['msg']=$model->getError();
                }
                // $this->ajaxReturn($data);   
            }
            
        }


    // public function blog_add(){
    //     $arr = I('post.');  
    //     $model = D('Blog');
    //     $array['title']=$arr['title'];
    //     $array['content']=$arr['content'];
    //     $array['desc']=$arr['desc'];
    //     $array['type']=$arr['type'];
    //     $array['author']=$_SESSION['uname'];
    //     $array['uid']=$_SESSION['uid'];
    //     $array['Rtime']=date("Y-m-d H:i:s");
       
    //     if($model->create($array)) {     
    //              $result = $model->add(); 
    //         if($result) {
    //             $data['code']=200;
    //             $data['msg']='发布成功';
    //         }else{
    //             $data['code']=404;
    //             $data['msg']='发布失败';  
    //                   }
    //     }else{
    //         $data['msg']=$model->getError();
    //     }
    //     $this->ajaxReturn($data);   
    // }
    //公告信息列表
    public function ad(){
        $model = M('Ad');// 实例化User对象
        $count = $model->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $model->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        //   var_dump($list);
        //   var_dump($show);
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
        }

        public function ad_add(){
                $arr = I('post.');  
                $model = D('Ad');
                $array['ad']=$arr['ad'];
				$array['ad_link']=$arr['ad_link'];
                if($model->create($array)) {
                        $result = $model->add($array); 
                    if($result) {
                        
                        $this->success('添加成功',U('admin/ad'),1);                    
                    }else{
                            $this->error("添加失败",U('admin/ad'),1);
                            }
                }else{
                    $data['msg']=$model->getError();
                } 
        }
         //删除一条公告信息 
    public function ad_delete(){
        $where['id'] = I("id");
        $model = D('Ad');
        $res = $model->where($where)->delete();
        if($res) {
            $data['code']=200;
            $data['msg']='删除成功';
        }else{
            $data['code']=404;
            $data['msg']='删除失败';
            }
        $this->ajaxReturn($data);
    }
    //博文信息列表
     public function bloglist(){
        $model = M('Blog');// 实例化User对象
        $count = $model->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $model->order(array('rtime'=>'desc'))->limit($Page->firstRow.','.$Page->listRows)->select();
        //   var_dump($list);
        //   var_dump($show);
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
        }
     //获取一条博文信息并渲染到编辑页面
     public function blogedit(){
        $where['id'] = I("id");
        $model = D('Blog');
        $res = $model->where($where)->select();
        // var_dump($res[0]);
        $this->assign('data',$res[0]);// 赋值数据集
         $this->display();
    }
     //修改博文信息
     public function blog_edit(){
        $arr = I('post.');
        $model = D('Blog');
        if($model->create($arr)) {
                 $result = $model->save($arr);
            if($result) {
                $data['code']=200;
                $data['msg']='修改成功';
            }else{
                $data['code']=404;
                $data['msg']='修改失败';
                      }
        }else{
            $data['msg']=$model->getError();
        }
        $this->ajaxReturn($data);    
    }

     //删除一条博文信息 
    public function blog_delete(){
        $where['id'] = I("id");
        $model = D('Blog');
        $res = $model->where($where)->delete();
        if($res) {
            $data['code']=200;
            $data['msg']='删除成功';
        }else{
            $data['code']=404;
            $data['msg']='删除失败';
            }
        $this->ajaxReturn($data);
    }
     //胡思乱想信息列表
     public function thinklist(){
        $model = M('Blog');
        $where['type'] = '胡思乱想';
        $count = $model->where($where)->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $model->order('id')->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
        //   var_dump($list);
         //  var_dump($show);
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    //获取一条胡思乱想信息并渲染到编辑页面
    public function thinkedit(){
        $where['id'] = I("id");
        $model = D('Blog');
        $res = $model->where($where)->select();     
        // var_dump($res[0]);
        $this->assign('data',$res[0]);// 赋值数据集    
         $this->display();    
    }
     //修改胡思乱想信息
     public function think_edit(){
        $arr = I('post.');
        $array['uid']=$_SESSION['uid'];
        $model = D('Blog');
        if($model->create($arr)) {
                 $result = $model->save($arr); 
            if($result) {
                $data['code']=200;
                $data['msg']='修改成功';
            }else{
                $data['code']=404;
                $data['msg']='修改失败';  
                      }
        }else{
            $data['msg']=$model->getError();
        }
        $this->ajaxReturn($data);    
    }

     //删除一条胡思乱想信息 
    public function think_delete(){
        $where['id'] = I("id");
        $model = D('Blog');
        $res = $model->where($where)->delete();
        if($res) {
            $data['code']=200;
            $data['msg']='删除成功';
        }else{
            $data['code']=404;
            $data['msg']='删除失败';
            }
        $this->ajaxReturn($data);
    }
     //细语微言信息列表
     public function talklist(){
        $model = M('Blog');
        $where['type'] = '细语微言';
        $count = $model->where($where)->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $model->order('id')->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
        //   var_dump($list);
         //  var_dump($show);
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    //获取一条细语微言信息并渲染到编辑页面
    public function talkedit(){
        $where['id'] = I("id");
        $model = D('Blog');
        $res = $model->where($where)->select();     
        // var_dump($res[0]);
        $this->assign('data',$res[0]);// 赋值数据集    
         $this->display();    
    }
     //修改细语微言信息
     public function talk_edit(){
        $arr = I('post.');
        $array['uid']=$_SESSION['uid'];
        $model = D('Blog');
        if($model->create($arr)) {        
                 $result = $model->save($arr); 
            if($result) {
                $data['code']=200;
                $data['msg']='修改成功';
            }else{
                $data['code']=404;
                $data['msg']='修改失败';  
                      }
        }else{
            $data['msg']=$model->getError();
        }
        $this->ajaxReturn($data);    
    }

     //删除一条细语微言信息 
    public function talk_delete(){
        $where['id'] = I("id");
        $model = D('Blog');
        $res = $model->where($where)->delete();
        if($res) {
            $data['code']=200;
            $data['msg']='删除成功';
        }else{
            $data['code']=404;
            $data['msg']='删除失败';
            }
        $this->ajaxReturn($data);
    }
    //后端崛起信息列表
    public function backlist(){
        $model = M('Blog');
        $where['type'] = '后端崛起';
        $count = $model->where($where)->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $model->order('id')->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
        //   var_dump($list);
         //  var_dump($show);
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    //获取一条后端崛起信息并渲染到编辑页面
    public function backedit(){
        $where['id'] = I("id");
        $model = D('Blog');
        $res = $model->where($where)->select();     
        // var_dump($res[0]);
        $this->assign('data',$res[0]);// 赋值数据集    
         $this->display();    
    }
     //修改后端崛起信息
     public function back_edit(){
        $arr = I('post.');
        $array['uid']=$_SESSION['uid'];
        $model = D('Blog');
        if($model->create($arr)) {        
                 $result = $model->save($arr); 
            if($result) {
                $data['code']=200;
                $data['msg']='修改成功';
            }else{
                $data['code']=404;
                $data['msg']='修改失败';  
                      }
        }else{
            $data['msg']=$model->getError();
        }
        $this->ajaxReturn($data);    
    }

     //删除一条后端崛起信息 
    public function back_delete(){
        $where['id'] = I("id");
        $model = D('Blog');
        $res = $model->where($where)->delete();
        if($res) {
            $data['code']=200;
            $data['msg']='删除成功';
        }else{
            $data['code']=404;
            $data['msg']='删除失败';
            }
        $this->ajaxReturn($data);
    }

    //前端入坑
    public function frontlist(){
        $model = M('Blog');
        $where['type'] = '前端入坑';
        $count = $model->where($where)->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $model->order('id')->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
        //   var_dump($list);
         //  var_dump($show);
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    //获取一条前端入坑信息并渲染到编辑页面
    public function frontedit(){
        $where['id'] = I("id");
        $model = D('Blog');
        $res = $model->where($where)->select();     
        // var_dump($res[0]);
        $this->assign('data',$res[0]);// 赋值数据集    
         $this->display();    
    }
     //修改前端入坑信息
     public function front_edit(){
        $arr = I('post.');
        $array['uid']=$_SESSION['uid'];
        $model = D('Blog');
        if($model->create($arr)) {        
                 $result = $model->save($arr); 
            if($result) {
                $data['code']=200;
                $data['msg']='修改成功';
            }else{
                $data['code']=404;
                $data['msg']='修改失败';  
                      }
        }else{
            $data['msg']=$model->getError();
        }
        $this->ajaxReturn($data);    
    }

     //删除一条前端入坑信息 
    public function front_delete(){
        $where['id'] = I("id");
        $model = D('Blog');
        $res = $model->where($where)->delete();
        if($res) {
            $data['code']=200;
            $data['msg']='删除成功';
        }else{
            $data['code']=404;
            $data['msg']='删除失败';
            }
        $this->ajaxReturn($data);
    }

//分享信息列表
public function share(){
    $model = M('Share');// 实例化User对象
    $count = $model->count();// 查询满足要求的总记录数
    $Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
    $show  = $Page->show();// 分页显示输出
    // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
    $list = $model->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
    //   var_dump($list);
    //   var_dump($show);
    $this->assign('list',$list);// 赋值数据集
    $this->assign('page',$show);// 赋值分页输出
    $this->display(); // 输出模板
    }
 //获取一条博文信息并渲染到编辑页面
 public function shareedit(){
    $where['id'] = I("id");
    $model = D('Share');
    $res = $model->where($where)->select();
    // var_dump($res[0]);
    $this->assign('data',$res[0]);// 赋值数据集
     $this->display();
}
 //修改博文信息
 public function share_edit(){
    $file = $_FILES['photo'];
    $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize   =     3145728 ;// 设置附件上传大小
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    // $upload->saveName  =     "";
    $upload->rootPath  =     './Public/share'; // 设置附件上传根目录
    $upload->savePath  =     './upload'; // 设置附件上传（子）目录
    // 上传文件 
    $info   =   $upload->uploadOne($file);
    $arr = I('post.');  
        // var_dump($arr);die;
        $model = D('Share');
    if($info){
             $array['photo']=$info['savepath'].$info['savename'];
    }
    // 上传成功
        
       
        $array['id']=$arr['id'];
        $array['s_title']=$arr['title'];
        $array['s_desc']=$arr['desc'];
        $array['s_link']=$arr['link'];
        $array['id']=$arr['id'];
        $array['s_time']=date("Y-m-d H:i:s");
        
        if($model->create($array)) {
                $result = $model->save($array); 
            if($result) {
                
                $this->success('修改成功',U('admin/share'),1);                    
            }else{
                    $this->error("修改失败");
                    }
        }else{
            $data['msg']=$model->getError();
        }
}

    public function share_add(){
        $file = $_FILES['photo'];
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        // $upload->saveName  =     "";
        $upload->rootPath  =     './Public/share'; // 设置附件上传根目录
        $upload->savePath  =     './upload'; // 设置附件上传（子）目录
        // 上传文件 
        $info   =   $upload->uploadOne($file);
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            
            $arr = I('post.');  
            $model = D('Share');
            $array['s_title']=$arr['title'];
            $array['s_desc']=$arr['desc'];
            $array['s_link']=$arr['link'];
            $array['photo']=$info['savepath'].$info['savename'];
            $array['s_time']=date("Y-m-d H:i:s");

            if($model->create($array)) {
                    $result = $model->add($array); 
                if($result) {
                    
                    $this->success('发布成功',U('admin/share'),1);                    
                }else{
                        $this->error("发布失败",U('admin/shareadd'),1);
                        }
            }else{
                $data['msg']=$model->getError();
            }
            // $this->ajaxReturn($data);   
        }
    }
 //删除一条分享信息 
 public function share_delete(){
    $where['id'] = I("id");
    $model = D('Share');
    $res = $model->where($where)->delete();
    if($res) {
        $data['code']=200;
        $data['msg']='删除成功';
    }else{
        $data['code']=404;
        $data['msg']='删除失败';
        }
    $this->ajaxReturn($data);
}


//博客日志
    public function log(){
        $model = M('Log');// 实例化User对象
        $count = $model->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $model->order('date desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        //   var_dump($list);
        //   var_dump($show);
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
        }
        //日志添加
    public function log_add(){
            $arr = I('post.');  
            $model = D('Log');
            $array['content']=$arr['content'];
            // $array['date']=date("Y-m-d H:i:s");
            $array['date']=$arr['date'];
           
            if($model->create($array)) {     
                     $result = $model->add(); 
                if($result) {
                    $data['code']=200;
                    $data['msg']='发布成功';
                }else{
                    $data['code']=404;
                    $data['msg']='发布失败';  
                          }
            }else{
                $data['msg']=$model->getError();
            }
            $this->ajaxReturn($data);   
        }

//删除一条log信息 
public function log_delete(){
    $where['id'] = I("id");
    $model = D('Log');
    $res = $model->where($where)->delete();
    if($res) {
        $data['code']=200;
        $data['msg']='删除成功';
    }else{
        $data['code']=404;
        $data['msg']='删除失败';
        }
    $this->ajaxReturn($data);
}
        //关于博客
    public function aboutblog(){
        $model = M('Aboutblog');
        $count = $model->where($where)->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $model->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
        //   var_dump($list);
         //  var_dump($show);
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();    
        
    }

     //关于博客添加
     public function aboutblog_add(){
        $arr = I('post.');  
        $model = D('Aboutblog');
        $array['content']=$arr['content'];
        $array['title']=$arr['title'];
        // $array['date']=date("Y-m-d H:i:s");
        $array['date']=$arr['date'];
        
       
        if($model->create($array)) {     
                 $result = $model->add(); 
            if($result) {
                $data['code']=200;
                $data['msg']='发布成功';
            }else{
                $data['code']=404;
                $data['msg']='发布失败';  
                      }
        }else{
            $data['msg']=$model->getError();
        }
        $this->ajaxReturn($data);   
    }
    //删除一条关于博客信息 
    public function aboutblog_delete(){
        $where['id'] = I("id");
        $model = D('Aboutblog');
        $res = $model->where($where)->delete();
        if($res) {
            $data['code']=200;
            $data['msg']='删除成功';
        }else{
            $data['code']=404;
            $data['msg']='删除失败';
            }
        $this->ajaxReturn($data);
    }
    //获取作者信息并渲染到编辑页面
    public function aboutauthor(){
        
        $model = D('Aboutauthor');
        $res = $model->select();     
        // var_dump($res[0]);
        $this->assign('data',$res[0]);// 赋值数据集    
         $this->display();    
    }
    //修改作者信息
    public function author_edit(){
        $arr = I('post.');
        $model = D('Aboutauthor');
        // var_dump($arr);die;
        if($model->create($arr)) {        
                 $result = $model->save($arr); 
        // var_dump($result);die;
                 
            if($result) {
                $data['code']=200;
                $data['msg']='修改成功';
            }else{
                $data['code']=404;
                $data['msg']='修改失败';  
                      }
        }else{
            $data['msg']=$model->getError();
        }
        $this->ajaxReturn($data);    
    }
//修改管理员登录信息

public function adminlist(){
    $model = M('Admin');// 实例化User对象
    $count = $model->count();// 查询满足要求的总记录数
    $Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
    $show  = $Page->show();// 分页显示输出
    // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
    $list = $model->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
    //   var_dump($list);
    //   var_dump($show);
    $this->assign('list',$list);// 赋值数据集
    $this->assign('page',$show);// 赋值分页输出
    $this->display(); // 输出模板
    }
 //获取一条管理员登录信息并渲染到编辑页面
 public function adminedit(){
    $where['id'] = I("id");
    $model = D('Admin');
    $res = $model->where($where)->select();
    // var_dump($res[0]);
    $this->assign('data',$res[0]);// 赋值数据集
     $this->display();
}
 //修改管理员登录信息
 public function admin_edit(){
    $arr = I('post.');
    $model = D('Admin');
    $where['name']=$arr['name'];
    $name=$model->where($where)->select();
    // var_dump($name);die;
    
    if($name){
        $data['code']=500;
        $data['msg']='用户名已存在';
    }else{

    // var_dump($arr);die();
    if($model->create($arr)) {
             $result = $model->save($arr);
        if($result) {
            $data['code']=200;
            $data['msg']='修改成功';
        }else{
            $data['code']=404;
            $data['msg']='修改失败';
                  }
    }else{
        $data['msg']=$model->getError();
    }
}

    $this->ajaxReturn($data);    
}

 //删除一条博文信息 
public function admin_delete(){
    $where['id'] = I("id");
    $model = D('Admin');
    $res = $model->where($where)->delete();
    if($res) {
        $data['code']=200;
        $data['msg']='删除成功';
    }else{
        $data['code']=404;
        $data['msg']='删除失败';
        }
    $this->ajaxReturn($data);
}
   

}