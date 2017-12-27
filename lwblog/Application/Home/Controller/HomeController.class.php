<?php
namespace Home\Controller;
use Think\Controller;
class HomeController extends Controller {
    public function loginuser(){
        $model = D("User");
        $arr = I('post.');
        $where['name'] = $arr['name'];
        $where['password'] = $arr['password'];
        if(empty($where)){
            $this->error('没有数据传入');            
        }else{
            $res = $model->where($where)->select();
           // var_dump($res);die;
            if($res){
                session('name',$res[0]['name']);
                session('id',$res[0]['id']);
                session('photo',$res[0]['photo']);
                session('email',$res[0]['email']);
                session('password',$res[0]['password']);

                $this->success('登录成功','index');
                // session('username');取值
            }else{
                $this->success('登录失败，账户或密码错误','login');
            }
        }
    }
    public function layout(){
        if(session_destroy()){
            $this->success('注销成功','index');
        }else{
            $this->success('注销失败');
        }
    }
    
    public function registeruser(){
        $arr = I('post.');  
        $model = D('User');
        $array['name']=$arr['name'];
        $array['password']=$arr['password'];
        $array['email']=$arr['email'];
        $array['photo']="./upload/touxiang.jpg";

        $where1['name']=$arr['name'];
        $name=$model->where($where1)->select();
        // var_dump($arr['name']);die;
        
        if($name){
            $data['code']=500;
            $data['msg']='用户名已存在';
        }else{
        if($model->create($array)) {     
                 $result = $model->add(); 
            if($result) {
                $data['code']=200;
                $data['msg']='注册成功';
            }else{
                $data['code']=404;
                $data['msg']='注册失败';  
                      }
        }else{
            $data['msg']=$model->getError();
        }
    }
        $this->ajaxReturn($data);
    }
    public function edit_touxiang(){
        $file = $_FILES['photo'];
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        // $upload->saveName  =     "";
        $upload->rootPath  =     './Public/upload'; // 设置附件上传根目录
        $upload->savePath  =     './upload'; // 设置附件上传（子）目录
        // 上传文件 
        $info   =   $upload->uploadOne($file);
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            $arr = I('post.');  
            $model = D('User');
            $array['photo']=$info['savepath'].$info['savename'];
            $array['id']=$_SESSION['id'];
            $_SESSION['photo']= $array['photo'];
            if($model->create($array)) {
                    $result = $model->save($array); 
                if($result) {
                    
                    $this->success('上传成功',U('home/index'),1);                    
                }else{
                        $this->error("上传失败",U('home/user'),1);
                        }
            }else{
                $data['msg']=$model->getError();
            }
            // $this->ajaxReturn($data);   
        }
    }
    public function edit_user(){
            $arr = I('post.');  
            $model = D('User');
            $array['id']=$arr['id'];
            $array['email']=$arr['email'];
            $array['password']=$arr['password'];
            // var_dump($array);die;
            if($model->create($array)) {
                    $result = $model->save($array); 
                if($result) {
                    
                    $this->success('修改成功');  
                    // user($array['id']);                  
                }else{
                        $this->error("修改失败");
                        }
            }else{
                $data['msg']=$model->getError();
            } 
            
    }
    public function user(){
        $where['id'] = I("id");
        $model = M('User');// 实例化User对象
        $count = $model->where($where)->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $model->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
       
        $this->assign('list',$list);// 赋值数据集
       
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    
    }
    public function search_content(){
        $arr = I('post.');
        $where['name'] = $arr['name'];
        $where['password'] = $arr['password'];
        if(empty($where)){
            $this->error('没有数据传入');            
        }else{
            $res = $model->where($where)->select();
           // var_dump($res);die;
            if($res){
                $this->success('登录成功','index');
                // session('username');取值
            }else{
                $this->success('登录失败，账户或密码错误','login');
            }
        }
        
        
    }
    public function search(){
        $arr = I('post.');
        $where['title']=array('like','%'.$arr['search'].'%');
        $where['type']=array('like','%'.$arr['search'].'%');
        $where['_logic'] = 'or';
        $model = M('Blog');// 实例化User对象
        $count = $model->where($where)->count();// 查询满足要求的总记录数
        if($count<=0){
            $this->error('没有搜索到相关内容！');            
        }else{
                // $this->success('登录成功','index');
                // $this->success('登录失败，账户或密码错误','login');
        

        $Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $listsearch = $model->where($where)->order(array('rtime'=>'desc'))->limit($Page->firstRow.','.$Page->listRows)->select();
        $list1 = $model->order(array('rtime'=>'desc'))->limit(0,6)->select();
        $list2 = $model->order(array('looknum'=>'desc'))->limit(0,6)->select();
        
        //   var_dump($list);
        //   var_dump($show);
        $this->assign('listsearch',$listsearch);// 赋值数据集
        $this->assign('list1',$list1);// 赋值数据集
        $this->assign('list2',$list2);// 赋值数据集
       
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }
    }

     //博文信息列表显示
     public function index(){


        $model = M('Blog');// 实例化User对象
        $modelad = M('Ad');// 实例化User对象
        
        $count = $model->count();// 查询满足要求的总记录数
        $countad = $modelad->count();// 查询满足要求的总记录数
        // var_dump($countad);die;
        $Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Pagead  = new \Think\Page($countad,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show  = $Page->show();// 分页显示输出
        $showad  = $Pagead->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        // var_dump($Pagead);die;

        $listad = $modelad->select();
        
        
        $list = $model->order(array('rtime'=>'desc'))->limit($Page->firstRow.','.$Page->listRows)->select();
        $list1 = $model->order(array('rtime'=>'desc'))->limit(0,5)->select();
        $list2 = $model->order(array('looknum'=>'desc'))->limit(0,5)->select();
        
        $this->assign('list',$list);// 赋值数据集
        $this->assign('listad',$listad);// 赋值数据集
        $this->assign('list1',$list1);// 赋值数据集
        $this->assign('list2',$list2);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板

        }
    
        public function article_list(){
            $model = M('Blog');// 实例化User对象
            $where['type'] = '胡思乱想';
            $where1['type'] = '细语微言';
            $where2['type'] = '前端入坑';
            $where3['type'] = '后端崛起';
            
            $count = $model->count();// 查询满足要求的总记录数
            $Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
            $show  = $Page->show();// 分页显示输出
            // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $list0 = $model->order(array('rtime'=>'desc'))->limit($Page->firstRow.','.$Page->listRows)->select();
            
            $listthink = $model->where($where)->order(array('rtime'=>'desc'))->limit($Page->firstRow.','.$Page->listRows)->select();
            $listtalk = $model->where($where1)->order(array('rtime'=>'desc'))->limit($Page->firstRow.','.$Page->listRows)->select();
            $listfront = $model->where($where2)->order(array('rtime'=>'desc'))->limit($Page->firstRow.','.$Page->listRows)->select();
            $listhome = $model->where($where3)->order(array('rtime'=>'desc'))->limit($Page->firstRow.','.$Page->listRows)->select();
            
            $list1 = $model->order(array('rtime'=>'desc'))->limit(0,6)->select();
            $list2 = $model->order(array('looknum'=>'desc'))->limit(0,6)->select();

            $this->assign('list0',$list0);// 赋值数据集
            $this->assign('listthink',$listthink);// 赋值数据集
            $this->assign('listtalk',$listtalk);// 赋值数据集
            $this->assign('listfront',$listfront);// 赋值数据集
            $this->assign('listhome',$listhome);// 赋值数据集
            
            $this->assign('list1',$list1);// 赋值数据集
            $this->assign('list2',$list2);// 赋值数据集
           
           
            $this->assign('page',$show);// 赋值分页输出
            $this->display(); // 输出模板
            }
            public function article_think(){
                $model = M('Blog');// 实例化User对象
                $where['type'] = '胡思乱想';
                
                $count = $model->where($where)->count();// 查询满足要求的总记录数
                $Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
                $show  = $Page->show();// 分页显示输出
                // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
                $listthink = $model->where($where)->order(array('rtime'=>'desc'))->limit($Page->firstRow.','.$Page->listRows)->select();
                $list1 = $model->order(array('rtime'=>'desc'))->limit(0,6)->select();
                $list2 = $model->order(array('looknum'=>'desc'))->limit(0,6)->select();
                
                //   var_dump($list);
                //   var_dump($show);
                $this->assign('listthink',$listthink);// 赋值数据集
                $this->assign('list1',$list1);// 赋值数据集
                $this->assign('list2',$list2);// 赋值数据集
               
                $this->assign('page',$show);// 赋值分页输出
                $this->display(); // 输出模板
                }
                public function article_talk(){
                    $model = M('Blog');// 实例化User对象
                    $where['type'] = '细语微言';
                    
                    $count = $model->where($where)->count();// 查询满足要求的总记录数
                    $Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
                    $show  = $Page->show();// 分页显示输出
                    // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
                    $listtalk = $model->where($where)->order(array('rtime'=>'desc'))->limit($Page->firstRow.','.$Page->listRows)->select();
                    $list1 = $model->order(array('rtime'=>'desc'))->limit(0,6)->select();
                    $list2 = $model->order(array('looknum'=>'desc'))->limit(0,6)->select();
                    
                    //   var_dump($list);
                    //   var_dump($show);
                    $this->assign('listtalk',$listtalk);// 赋值数据集
                    $this->assign('list1',$list1);// 赋值数据集
                    $this->assign('list2',$list2);// 赋值数据集
                   
                    $this->assign('page',$show);// 赋值分页输出
                    $this->display(); // 输出模板
                    }
                    public function article_front(){
                        $model = M('Blog');// 实例化User对象
                        $where['type'] = '前端入坑';
                        
                        $count = $model->where($where)->count();// 查询满足要求的总记录数
                        $Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
                        $show  = $Page->show();// 分页显示输出
                        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
                        $listfront = $model->where($where)->order(array('rtime'=>'desc'))->limit($Page->firstRow.','.$Page->listRows)->select();
                        $list1 = $model->order(array('rtime'=>'desc'))->limit(0,6)->select();
                        $list2 = $model->order(array('looknum'=>'desc'))->limit(0,6)->select();
                        
                        //   var_dump($list);
                        //   var_dump($show);
                        $this->assign('listfront',$listfront);// 赋值数据集
                        $this->assign('list1',$list1);// 赋值数据集
                        $this->assign('list2',$list2);// 赋值数据集
                       
                        $this->assign('page',$show);// 赋值分页输出
                        $this->display(); // 输出模板
                        }
                        public function article_home(){
                            $model = M('Blog');// 实例化User对象
                            $where['type'] = '后端崛起';
                            
                            $count = $model->where($where)->count();// 查询满足要求的总记录数
                            $Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
                            $show  = $Page->show();// 分页显示输出
                            // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
                            $listhome = $model->where($where)->order(array('rtime'=>'desc'))->limit($Page->firstRow.','.$Page->listRows)->select();
                            $list1 = $model->order(array('rtime'=>'desc'))->limit(0,6)->select();
                            $list2 = $model->order(array('looknum'=>'desc'))->limit(0,6)->select();
                            
                            //   var_dump($list);
                            //   var_dump($show);
                            $this->assign('listhome',$listhome);// 赋值数据集
                            $this->assign('list1',$list1);// 赋值数据集
                            $this->assign('list2',$list2);// 赋值数据集
                           
                            $this->assign('page',$show);// 赋值分页输出
                            $this->display(); // 输出模板
                            }
             //获取一条兼职信息并渲染到编辑页面
     public function article_view(){
        $where['id'] = I("id");

        $model = D('Blog');
        $model->where($where)->setInc('looknum',1); // 文章阅读数加1
        // var_dump()
     //下一篇
     $afte=$model->where('id>"'.$where['id'].'"')->order('id asc')->limit('1')->find();
     $next['id']=$afte['id'];
     $next['title']=$afte['title'];
     
     // var_dump($next['title']);die;
     $this->assign('next',$next);   
     //上一篇
     $pre=$model->where('id<"'.$where['id'].'"')->order('id desc')->limit('1')->find();	
     $prev['id']=$pre['id'];
     $prev['title']=$pre['title'];
     
     $this->assign('prev',$prev);

     //评论
        $model3 = M('Comment');// 实例化User对象
        $model4 = M('User');// 实例化User对象
        $where1['bid'] = I("id");
        // var_dump($where1['bid']);die;
        $count0 = $model3->where($where1)->count();// 查询满足要求的总记录数
        $commentnum['commentnum'] = $count0;
        $model->where($where)->save($commentnum);
// var_dump($next['id']);die;
        $Page1  = new \Think\Page($count0,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show1  = $Page1->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $listcomment = $model3->join('__USER__ ON __COMMENT__.uid = __USER__.id')->where($where1)->order('addtime desc')->limit($Page1->firstRow.','.$Page1->listRows)->select();
        $list0 = $model4->select();
        
        $this->assign('list3',$listcomment);// 赋值数据集
        $this->assign('list4',$list0);// 赋值数据集
        $this->assign('page1',$show1);// 赋值分页输出


//博文
        $res = $model->where($where)->select(); 
        $this->assign('data',$res[0]);// 赋值数据集  
        $count = $model->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show  = $Page->show();// 分页显示输出
        $list1 = $model->order(array('rtime'=>'desc'))->limit(0,6)->select();
        $list2 = $model->order(array('looknum'=>'desc'))->limit(0,6)->select();
        $this->assign('list1',$list1);// 赋值数据集
        $this->assign('list2',$list2);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();   
    }
    public function hot(){
        $where['id'] = I("id");

        $model = D('Share');
        $model->where($where)->setInc('looknum',1); // 文章阅读数加1
        // var_dump()
    }
    //分享展示
    public function case_list(){
        $model = M('Share');// 实例化User对象
        
        $count = $model->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list0 = $model->order(array('s_time'=>'desc'))->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('list0',$list0);// 赋值数据集    
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
        }
    //博客日志
    public function diary(){
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
         //获取作者信息并渲染到编辑页面
    public function about_author(){
        
        $model = D('Aboutauthor');
        $res = $model->select();     
        // var_dump($res[0]);
        $this->assign('data',$res[0]);// 赋值数据集    
         $this->display();    
    }
    //关于博客
    public function about_blog(){
        $model = M('Aboutblog');// 实例化User对象
        $count = $model->count();// 查询满足要求的总记录数
        $Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show  = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $model->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
        }
//评论
        public function comment_add(){
            $arr = I('post.');  
            $model = D('Comment');
            $array['comment']=$arr['content'];
            $array['uid']=$_SESSION['id'];
            $array['bid']=$arr['bid'];
            $array['addtime']=date("Y-m-d H:i:s");
           
            if($model->create($array)) {     
                     $result = $model->add(); 
                if($result) {
                    $data['code']=200;
                    $data['msg']='添加留言成功';
                }else{
                    $data['code']=404;
                    $data['msg']='添加留言失败';  
                          }
            }else{
                $data['msg']=$model->getError();
            }
            $this->ajaxReturn($data);  
        }
        public function message_add(){
            $arr = I('post.');  
            $model = D('Message');
            $array['content']=$arr['content'];
            $array['uid']=$_SESSION['id'];
            $array['addtime']=date("Y-m-d H:i:s");
           
            if($model->create($array)) {     
                     $result = $model->add(); 
                if($result) {
                    $data['code']=200;
                    $data['msg']='添加留言成功';
                }else{
                    $data['code']=404;
                    $data['msg']='添加留言失败';  
                          }
            }else{
                $data['msg']=$model->getError();
            }
            $this->ajaxReturn($data);  
        }
        public function message(){
            $model = M('Message');// 实例化User对象
            $model1 = M('User');// 实例化User对象
            // $model['_logic'] = 'and';
            
            $count = $model->count();// 查询满足要求的总记录数
            $Page  = new \Think\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
            $show  = $Page->show();// 分页显示输出
            // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $list = $model->join('__USER__ ON __MESSAGE__.uid = __USER__.id')->order('addtime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
            $list1 = $model1->select();
            // $Model->join('__USER__ ON __MESSAGE__.uid = __USER__.id')->select();
            
            //   var_dump($list);
            //   var_dump($show);
            $this->assign('list',$list);// 赋值数据集
            $this->assign('list1',$list1);// 赋值数据集
            $this->assign('page',$show);// 赋值分页输出
            $this->display(); // 输出模板
            }


}