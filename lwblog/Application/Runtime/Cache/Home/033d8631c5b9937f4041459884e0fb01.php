<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>老王博客</title>
    <meta name="keywords" content="老王博客">
    <meta name="description" content="老王博客">
    <link rel="icon" href="/lwblog/Public/home/images/laowang.ico" type="image/x-icon">

    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/lwblog/Public/home/layui/css/layui.css">
    <link rel="stylesheet" type="text/css" href="/lwblog/Public/home/css/style.css">
    <link rel="stylesheet" type="text/css" href="/lwblog/Public/home/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/lwblog/Public/home/css/login.css">

    <script type="text/javascript" src="/lwblog/Public/home/layui/layui.js"></script>
    <style>
        #liuyan {
            min-height: 200px;
            max-height: 300px;
            width: 100%;
            /*自动适应父布局宽度*/
            overflow: auto;
        }
    </style>

</head>

<body>
    <!-- 头部 开始 -->
    <div class="layui-header header trans_3">
        <div class="main index_main">
            <input type="text" id="user" value="<?php echo ($_SESSION['id']); ?>" hidden>
            <?php if($_SESSION['id'] != '' ): ?><a id="layout" href="<?php echo U('home/layout');?>">注销</a>
                <a id="user" href="<?php echo U('home/user',array('id'=>$_SESSION['id']));?>"><img src="/lwblog/Public/upload/<?php echo ($_SESSION["photo"]); ?>" alt=""></a>
                <?php else: ?>
                <a class="register" href="<?php echo U('home/register');?>">注册</a>
                <a class="login1" href="<?php echo U('home/login');?>">登录</a><?php endif; ?>
            <a class="logo" href="./index.html"><img src="/lwblog/Public/home/images/logo2.png" alt="老王博客"></a>
            <ul class="layui-nav" lay-filter="top_nav">
                <li class="layui-nav-item home"><a href="<?php echo U('home/index');?>">首页</a></li>
                <li class="layui-nav-item">
                    <a href="<?php echo U('home/article_list');?>">文章栏目</a>
                    <dl class="layui-nav-child">
                        <!-- 二级菜单 -->
                        <dd><a href="<?php echo U('home/article_think');?>">胡思乱想</a></dd>
                        <dd><a href="<?php echo U('home/article_talk');?>">细语微言</a></dd>
                        <dd><a href="<?php echo U('home/article_front');?>">前端入坑</a></dd>
                        <dd><a href="<?php echo U('home/article_home');?>">后端崛起</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="<?php echo U('home/case_list');?>">你我共享</a>
                </li>
                <li class="layui-nav-item">
                    <a href="<?php echo U('home/diary');?>">雁过留痕</a>
                </li>
                <li class="layui-nav-item">
                    <a href="">关于</a>
                    <dl class="layui-nav-child">
                        <!-- 二级菜单 -->
                        <dd><a href="<?php echo U('home/about_blog');?>">关于博客</a></dd>
                        <dd><a href="<?php echo U('home/about_author');?>">关于作者</a></dd>
                        <dd><a href="<?php echo U('home/message');?>">留言</a></dd>
                    </dl>
                </li>

            </ul>
            <div class="title">老王博客</div>
        </div>
    </div>
    <div class="header_back"></div>
    <!-- 头部 结束 -->

    <!-- 面包屑导航 开始 -->
    <div class="main breadcrumb_nav trans_3">
        <span class="layui-breadcrumb" lay-separator="—">
	  <a href="./index.html">首页</a><a><cite>留言</cite></a>
	</span>
    </div>
    <!-- 面包屑导航 结束 -->
    <div class="main">
        <div class="page_left">
            <form class="layui-form feedback-form" id="form" action="<?php echo U('home/message_add');?>" method="post">
                <p class="aboutinfo-nickname">留言墙</p>
                <p class="aboutinfo-location">
                    <i class="fa fa-clock-o"></i>&nbsp;<span id="time"></span>
                </p>
                <hr>
                <legend style="margin:0 auto;">Leave a message</legend>
                <hr>
                <div class="layui-form-item" style="padding:10px;">
                    <div class="">
                        <textarea name="liuyan" lay-verify="layedit" autocomplete="off" placeholder="我要留言" class="llayui-textarea" id="liuyan"></textarea>
                    </div>
                </div>
                <!-- <div class="layui-form-item" style="padding:10px;">
                    <div>
                        <textarea name="liuyan" id="liuyan" cols="100%" rows="15%"></textarea>
                    </div>
                </div> -->
                <div class="layui-form-item">
                    <button type="button" id="btn" class="layui-btn">提交留言</button>
                </div>

            </form>
            <ul class="feedback_list">
                <legend style="color:orange; border:1px soild green;">
                    <p>最新留言</p>
                </legend>
                <?php if(is_array($list)): foreach($list as $key=>$vo): ?><li>
                        <div class="comment-parent">
                            <?php if(is_array($list1)): foreach($list1 as $key=>$vo1): if($vo["uid"] == $vo1["id"] ): ?><img src="/lwblog/Public/upload/<?php echo ($vo1["photo"]); ?>" alt="头像" /><?php endif; endforeach; endif; ?>
                            <!-- <img src="/lwblog/Public/upload/<?php echo ($vo["photo"]); ?>" alt="头像" /> -->
                            <div class="info0">
                                <span class="username"><i class="layui-icon" title="作者">&#xe612;</i><?php echo ($vo["name"]); ?></span>
                            </div>
                            <div class="content">
                                <p><?php echo ($vo["content"]); ?></p>
                            </div>
                            <p class="info info-footer"><span style="color: #75767b;" class="time"><?php echo ($vo["addtime"]); ?></span></p>
                        </div>
                        <!-- <div class="comment-child">
                            <img src="../images/Absolutely.jpg" alt="Absolutely" />
                            <div class="info">
                                <span class="username">Absolutely</span><span>这是用户回复内容</span>
                            </div>
                            <p class="info"><span class="time">2017-03-18 18:26</span></p>
                        </div>
                        <div class="comment-child">
                            <img src="../images/Absolutely.jpg" alt="Absolutely" />
                            <div class="info">
                                <span class="username">Absolutely</span><span>这是第二个用户回复内容</span>
                            </div>
                            <p class="info"><span class="time">2017-03-18 18:26</span></p>
                        </div> -->
                        <!-- 回复表单默认隐藏 -->
                        <!-- <div class="replycontainer layui-hide">
                            <form class="layui-form" action="">
                                <div class="layui-form-item">
                                    <textarea name="replyContent" lay-verify="replyContent" placeholder="请输入回复内容" class="layui-textarea" style="min-height:80px;"></textarea>
                                </div>
                                <div class="layui-form-item">
                                    <button id="#btn" class="layui-btn layui-btn-mini" lay-submit="formReply" lay-filter="formReply">提交</button>
                                </div>
                            </form>
                        </div> -->
                    </li><?php endforeach; endif; ?>
                <div id="page" class="pages"><?php echo ($page); ?></div>
            </ul>
        </div>
        <div class="page_right">
            <div class="about_stationmaster_container">
                <h3>博主信息</h3>
                <ol class="page_right_list trans_3">
                    <li>姓名：王欢庆</li>
                    <li>职业：PHP程序猿、WEB前端</li>
                    <li>座右铭：自强不息，厚德载物</li>
                    <li>QQ：1426095072 </li>
                    <audio controls="controls" autoplay="true" loop="true">
                            <source src="/lwblog/Public/music/高山流水.ogg" type="audio/ogg">
                            <source src="/lwblog/Public/music/高山流水.mp3" type="audio/mpeg">
                          Your browser does not support the audio element.
                </audio>
                </ol>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <script src="/lwblog/Public/admin/js/jquery-1.11.1.min.js"></script>
    <script>
        //留言回复
        // function btnReplyClick(elem) {
        //     var $ = layui.jquery;
        //     $(elem).parent('p').parent('.comment-parent').siblings('.replycontainer').toggleClass('layui-hide');
        //     if ($(elem).text() == '回复') {
        //         $(elem).text('收起')
        //     } else {
        //         $(elem).text('回复')
        //     }
        // }
        $(function() {
            // var user = $_SESSION['id']
            $('#btn').click(function() {
                // alert('请先登录后再留言！，谢谢！');
                var user = $('#user').val();
                var content = $('#liuyan').val();
                if (!user) {
                    alert('请先登录后再留言！，谢谢！');
                } else if (content == '') {
                    alert('内容不能为空！');
                } else {
                    var content = $('#liuyan').val();
                    $.ajax({
                        url: $('#form').attr('action'),
                        type: 'post',
                        dataType: 'json',
                        data: {
                            'content': content
                        },
                        success: function(data) {
                            if (data.code == 200) {
                                alert(data.msg);
                                location = 'message.html';
                            } else {
                                alert(data.msg);
                            }
                        },
                        error: function(data) {
                            console.log(data);
                        }
                    })
                }
            })
        })
    </script>

    <script type="text/javascript">
        function systemTime() {
            //获取系统时间。
            var dateTime = new Date();
            var year = dateTime.getFullYear();
            var month = dateTime.getMonth() + 1;
            var day = dateTime.getDate();
            var hh = dateTime.getHours();
            var mm = dateTime.getMinutes();
            var ss = dateTime.getSeconds();

            //分秒时间是一位数字，在数字前补0。
            mm = extra(mm);
            ss = extra(ss);

            //将时间显示到ID为time的位置，时间格式形如：19:18:02
            document.getElementById("time").innerHTML = year + "-" + month + "-" + day + " " + hh + ":" + mm + ":" + ss;
            //每隔1000ms执行方法systemTime()。
            setTimeout("systemTime()", 1000);
        }

        //补位函数。
        function extra(x) {
            //如果传入数字小于10，数字前补一位0。
            if (x < 10) {
                return "0" + x;
            } else {
                return x;
            }
        }
        systemTime();

        window.onload = function() {
            var script = document.createElement('script');
            script.src = 'Scripts/aboutindex.js';
            document.getElementsByTagName('body')[0].appendChild(script);
        }
    </script>

    <script type="text/javascript">
        layui.use(['form', 'layedit'], function() {
            var form = layui.form(),
                layer = layui.layer,
                layedit = layui.layedit,
                $ = layui.jquery;

            form.verify({
                //编辑器数据同步
                layedit: function(value) {
                    layedit.sync(content);
                    if (layedit.getText(content).length < 1) {
                        return '至少得 1 个字吧...';
                    }
                }

            });

        });
    </script>
    <!-- 底部 开始 -->
    <ul class="layui-fixbar">
        <!-- <li class="layui-icon qr_code">&#xe63b;<img class="qr_code_pic" src="<?php echo ($settings["qr_code"]); ?>" alt="微信公众号二维码"></li> -->
        <li class="layui-icon layui-fixbar-top" id="to_top">&#xe604;</li>
    </ul>
    <div class="layui-footer footer">
        <div class="main index_main">
            <p><a href="http://www.baidu.com">老王博客</a> © phplaozhang.com</p>
            <p>
                <a href="">网站地图</a>
            </p>
            <p class="beian">
                <a class="gongan" target="_blank" href=""><img src="/lwblog/Public/home/images/gonganbeian.png" alt="豫公网安备 410xxxxxxx号">豫公网安备 410xxxxxxx号</a>
                <a class="icp" target="_blank" href="http://www.miitbeian.gov.cn">豫ICP备xxxxxxxxx号-1</a>
            </p>
        </div>
    </div>
    <!-- 底部 结束 -->
    <script type="text/javascript">
        layui.use(['form', 'element'], function() {
            var layer = layui.layer,
                form = layui.form(),
                element = layui.element(),
                $ = layui.jquery;

            //回到顶部
            $("#to_top").click(function() {
                $("html,body").animate({
                    scrollTop: 0
                }, 200);
            });
            $(document).scroll(function() {
                var scroll_top = $(document).scrollTop();
                if (scroll_top > 500) {
                    $("#to_top").show();
                } else {
                    $("#to_top").hide();
                }
            });
        });
    </script>
</body>

</html>