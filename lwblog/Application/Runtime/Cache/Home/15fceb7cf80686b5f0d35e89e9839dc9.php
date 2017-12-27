<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>


<html>

<head>
    <meta charset="utf-8">
    <title>失物招领</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="/u2/Public/Front/layui/css/layui.css">
    <link rel="stylesheet" href="/u2/Public/Front/css/global.css">
    <link rel="stylesheet" href="/u2/Public/Admin/css/page.css">
</head>

<body>

    <div class="header">
        <div class="main">
            <a class="logo" href="#" title="Fly">Fly社区</a>
            <div class="nav">
                <a href="<?php echo U('home/joblist');?>">兼职信息</a>
                <a href="<?php echo U('home/lostlist');?>">失物招领</a>
                <a href="<?php echo U('home/courselist');?>">课程信息</a>
                <a href="<?php echo U('home/swaplist');?>">旧物交换</a>
                <a href="<?php echo U('home/index');?>">学院简介</a>
            </div>

            <div class="nav-user">
                <?php if($_SESSION['uid'] != '' ): ?><a class="unlogin" href="main.html"><i class="iconfont icon-touxiang"></i></a>
                    <div class="nav">
                        <a href="set.html"><i class="iconfont icon-shezhi"></i>设置</a>
                    </div> <button onclick="layout()" id="layout">注销</button>
                    <?php else: ?> <a class="unlogin" href="login.html"><i class="iconfont icon-touxiang"></i></a><span><a href="login.html">登入</a><a href="register.html">注册</a></span><?php endif; ?>
            </div>
        </div>
    </div>


    <div class="main layui-clear">
        <div class="wrap">
            <div class="content">
                <div class="fly-tab fly-tab-index">
                    <span>
          <a href="lostlist.html">全部失物招领</a>
          
          <a href="main.html">我的发布</a>
        </span>
                    <!-- <form action="http://cn.bing.com/search" class="fly-search">
                        <i class="iconfont icon-sousuo"></i>
                        <input class="layui-input" autocomplete="off" placeholder="搜索内容，回车跳转" type="text" name="q">
                    </form> -->
                    <a href="<?php echo U('home/addlost');?>" class="layui-btn jie-add">发布失物招领</a>
                </div>


                <!-- <ul class="fly-list fly-list-top">
                    <li class="fly-list-li">
                        <a href="user/home.html" class="fly-list-avatar">
                            <img src="http://tp4.sinaimg.cn/1345566427/180/5730976522/0" alt="">
                        </a>
                        <h2 class="fly-tip">
                            <a href="jie/detail.html">失物招领</a>
                        </h2>
                        <p>
                            <span><a href="user/home.html">民强</a></span>
                            <span>2017</span>
                        </p>
                    </li>
                </ul> -->

                <table style="width:728px;">
                    <tbody class="fly-list fly-list-top">
                        <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr class="fly-list-li" style="width:500px;height: 65px;">
                                <td style="padding-left:30px;">
                                    <input value="<?php echo ($vo["id"]); ?>" style="display: none;" />
                                    <h2 class="fly-tip">
                                        <a href="<?php echo U('home/detail_lost',array('id'=>$vo['id']));?>"><?php echo ($vo["title"]); ?></a>
                                    </h2>
                                    <p>
                                        <span><a href="home.html"><?php echo ($vo["author"]); ?></a></span>
                                        <span><?php echo ($vo["rtime"]); ?></span>
                                        <span style="float: right;  padding-right: 0px; margin-right: 15px;">
                                                <?php if($vo["type"] == 0 ): ?><span class="fly-tip-jing" style = "color:red">发布中</span>
                                        <?php else: ?> <span>已结束</span><?php endif; ?>
                                        </span>
                                    </p>
                                </td>
                            </tr><?php endforeach; endif; ?>
                    </tbody>
                </table>

                <div id="page" class="pages">
                    <?php echo ($page); ?>
                </div>

            </div>
        </div>

        <div class="edge">
            <div class="fly-panel leifeng-rank">
                <h3 class="fly-panel-title">开发人员</h3>
                <dl>
                    <dd>
                        <a href="#">
                            <img src="/u2/Public/Front/images/avatar/default.png">
                            <cite>陈纪伟</cite>
                        </a>
                    </dd>
                    <dd>
                        <a href="#">
                            <img src="/u2/Public/Front/images/avatar/default.png">
                            <cite>陈少华</cite>
                        </a>
                    </dd>
                    <dd>
                        <a href="#">
                            <img src="/u2/Public/Front/images/avatar/default.png">
                            <cite>王欢庆</cite>
                        </a>
                    </dd>
                    <dd>
                        <a href="#">
                            <img src="/u2/Public/Front/images/avatar/default.png">
                            <cite>王民强</cite>
                        </a>
                    </dd>
                </dl>
            </div>



            <script src="/u2/Public/Front/layui/layui.js"></script>
            <script>
                layui.cache.page = '';
                layui.cache.user = {
                    username: '游客',
                    uid: -1,
                    avatar: '/u2/Public/Front/images/avatar/00.jpg',
                    experience: 83,
                    sex: '男'
                };
                layui.config({
                    version: "2.0.0",
                    base: '/u2/Public/Front/mods/'
                }).extend({
                    fly: 'index'
                }).use('fly');
            </script>

            <script src="/u2/Public/Admin/js/jquery-1.11.1.min.js"></script>
            <script>
                function layout() {
                    $.ajax({
                        url: '<?php echo U("home/layout");?>',
                        type: 'post',
                        dataType: 'json',
                        data: {

                        },
                        success: function(data) {
                            if (data.code == 200) {
                                alert(data.msg);
                                location = 'login.html';
                            } else {
                                alert(data.msg);
                            }
                        }
                    })
                }
            </script>

</body>

</html>