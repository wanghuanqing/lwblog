<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>老王博客</title>
    <meta name="keywords" content="老王博客,老王,老王博客,老王的个人博客,个人博客,个人网站,个人主页,老王blog,web老王,PHP个人博客,web个人博客,web程序员博客,PHP程序员博客,个人博客php源代码,基于php个人博客,Lwblogs,老王博客系统">
    <meta name="description" content="老王博客">
    <link rel="icon" href="/lwblog/Public/home/images/laowang.ico" type="image/x-icon">

    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/lwblog/Public/home/layui/css/layui.css">
    <link rel="stylesheet" type="text/css" href="/lwblog/Public/home/css/style.css">
    <link rel="stylesheet" type="text/css" href="/lwblog/Public/home/css/login.css">

    <link rel="stylesheet" type="text/css" href="/lwblog/Public/home/css/reset.css">

    <script type="text/javascript" src="/lwblog/Public/home/layui/layui.js"></script>
    <style>

    </style>

</head>

<body>
    <!-- 头部 开始 -->
    <div class="layui-header header trans_3">
        <div class="main index_main">
            <input type="text" id="user" value="<?php echo ($_SESSION['id']); ?>" hidden>

            <?php if($_SESSION['id'] != '' ): ?><a id="layout" href="<?php echo U('home/layout');?>">注销</a>
                <a id="user" href="<?php echo U('home/user',array('id'=>$_SESSION['id']));?>"><img src="/lwblog/Public/upload/<?php echo ($_SESSION["photo"]); ?>" alt=""><?php echo ($_SESSION["name"]); ?></a>
                <?php else: ?>
                <a class="register" href="<?php echo U('home/register');?>">注册</a>
                <a class="login1" href="<?php echo U('home/login');?>">登录</a><?php endif; ?>
            <a class="logo" href="<?php echo U('home/index');?>"><img src="/lwblog/Public/home/images/logo2.png" alt="老王博客"></a>
            <ul class="layui-nav" lay-filter="top_nav">
                <li class="layui-nav-item home"><a href="<?php echo U('home/index');?>">首页</a></li>
                <li class="layui-nav-item">
                    <a href="<?php echo U('home/article_list');?>">文章栏目</a>
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
	  <a href="<?php echo U('home/index');?>">首页</a><a href="<?php echo U('home/article_list');?>">文章栏目</a><a><cite>文章</cite></a>
	</span>
    </div>
    <!-- 面包屑导航 结束 -->
    <!-- 文章 开始 -->
    <div class="main">
        <div class="page_left">
            <div id="NO1" class="detail_container trans_3">
                <h1><?php echo ($data["title"]); ?></h1>
                <input id="bid" value="<?php echo ($data["id"]); ?>" style="display: none;" />

                <div class="date_hits"><span><i>发布时间：</i><?php echo ($data["rtime"]); ?></span><span><i>作者：</i><?php echo ($data["author"]); ?></span><span><i>热度：</i> <?php echo ($data["looknum"]); ?> ℃</span><span><i>评论数：</i> <a href="#SOHUCS" id="changyan_count_unit"><?php echo ($data["commentnum"]); ?></a></span></div>
                <div class="content"><?php echo (htmlspecialchars_decode($data["content"])); ?>
                </div>
                <div class="keywords">
                    <p><?php echo ($data["type"]); ?></p>
                </div>

                <div class="prev_next">
                    <div class="prev">上一篇：<a id="front" href="<?php echo U('home/article_view',array('id'=>$prev['id']));?>"><?php echo ($prev["title"]); ?></a><span id="span1" style="color:red; display:none">没有了</span></div>
                    <div class="next">下一篇：<a id="after" href="<?php echo U('home/article_view',array('id'=>$next['id']));?>"><?php echo ($next["title"]); ?></a><span id="span2" style="color:red; display:none">没有了</span></div>
                    <div class="clear"></div>
                </div>
                <form class="layui-form feedback-form" id="form" action="<?php echo U('home/comment_add');?>" method="post">

                    <hr>

                    <div class="layui-form-item" style="padding:10px;">
                        <div>
                            <textarea name="liuyan" id="liuyan" style="width:100%" rows="5%"></textarea>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <button type="button" id="btn" class="layui-btn">我有话说</button>
                    </div>

                </form>


                <ul class="feedback_list">
                    <legend style="color:orange; border:1px soild green;">
                        <p>最新评论</p>
                    </legend>
                    <?php if(is_array($list3)): foreach($list3 as $key=>$vo): ?><!-- <?php if(is_array($listblog)): foreach($listblog as $key=>$vo2): if($vo["bid"] == $vo2["id"] ): endif; endforeach; endif; ?> -->
                        <li>
                            <div class="comment-parent">
                                <?php if(is_array($list4)): foreach($list4 as $key=>$vo1): if($vo["uid"] == $vo1["id"] ): ?><img src="/lwblog/Public/upload/<?php echo ($vo1["photo"]); ?>" alt="头像" /><?php endif; endforeach; endif; ?>
                                <div class="info0">
                                    <span class="username"><i class="layui-icon" title="作者">&#xe612;</i><?php echo ($vo["name"]); ?></span>
                                </div>
                                <div class="content">
                                    <p style="margin-left: -20px;"><?php echo ($vo["comment"]); ?></p>
                                </div>
                                <p class="info info-footer"><span style="color: #75767b;" class="time"><?php echo ($vo["addtime"]); ?></span></p>
                            </div>
                        </li><?php endforeach; endif; ?>
                    <div id="page1" class="pages"><?php echo ($page1); ?></div>
                </ul>
                <div class="commont_containr">
                    <!--【畅言】表情评价-->
                    <div id="cyEmoji" role="cylabs" data-use="emoji" sid="<?php echo ($data['category_id']); echo ($data['id']); ?>"></div>
                    <!--【畅言】PC和WAP自适应版-->
                    <div id="SOHUCS" sid="<?php echo ($data['category_id']); echo ($data['id']); ?>"></div>
                </div>

            </div>

        </div>
        <div class="page_right">
            <div class="article-category shadow">
                <form id="form" action="<?php echo U('home/search');?>" method="post">
                    <span>	
                      <input name="search" type="text" id="search_content">
                    <button type="submit"  id="search">搜索</button>
                                        </span>
                </form>
            </div>
            <div class="second_categorys_container">
                <h3>分类导航</h3>
                <div class="article-category shadow">
                    <a href="<?php echo U('home/article_think');?>" id="think" class="left">胡思乱想</a>
                    <a href="<?php echo U('home/article_talk');?>" id="talk" class="right">细语微言</a>
                    <a href="<?php echo U('home/article_front');?>" id="front" class="left">前端入坑</a>
                    <a href="<?php echo U('home/article_home');?>" id="home" class="right">后端崛起</a>

                    <div class="clear"></div>
                </div>

            </div>
            <div class="recommend_list">
                <h3>随便看看</h3>
                <ol class="page_right_list trans_3">
                    <?php if(is_array($list1)): foreach($list1 as $key=>$vo): ?><li><a href="<?php echo U('home/article_view',array('id'=>$vo['id']));?>"><?php echo ($vo["title"]); ?></a><span class="hits"><?php echo ($vo["looknum"]); ?>℃</span></li><?php endforeach; endif; ?>
                </ol>
            </div>
            <div class="hot_list">
                <h3>最近热文</h3>
                <ol class="page_right_list trans_3">
                    <?php if(is_array($list2)): foreach($list2 as $key=>$vo): ?><li><a href="<?php echo U('home/article_view',array('id'=>$vo['id']));?>"><?php echo ($vo["title"]); ?></a><span class="hits"><?php echo ($vo["looknum"]); ?></span></li><?php endforeach; endif; ?>
                </ol>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <!-- 文章 结束 -->
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
    <script src="/lwblog/Public/admin/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(function() {
                var pr = $("#front").text();
                var ne = $("#after").text();
                if (pr == '') {
                    $("#span1").css("display", "block");
                } else {
                    $("#span1").css("display", "none");
                }
                if (ne == '') {
                    $("#span2").css("display", "block");
                } else {
                    $("#span2").css("display", "none");
                }
            })

        });
    </script>



    <script type="text/javascript">
        $(function() {
            //alert($_SESSION['uid']);
            $('#btn').click(function() {
                var user = $('#user').val();
                var content = $('#liuyan').val();
                if (!user) {
                    alert('请先登录后再留言！，谢谢！');
                } else if (content == '') {
                    alert('内容不能为空！');
                } else {
                    var content = $('#liuyan').val();
                    var bid = $('#bid').val();
                    // alert(bid);
                    $.ajax({
                        url: $('#form').attr('action'),
                        type: 'post',
                        dataType: 'json',
                        data: {
                            'content': content,
                            'bid': bid
                        },
                        success: function(data) {
                            if (data.code == 200) {
                                alert(data.msg);
                                location = "<?php echo U('home/article_view',array('id'=>$data['id']));?>";
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