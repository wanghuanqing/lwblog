<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>老王博客
    <meta charset="UTF-8">
    <title>老王博客</title>
    <meta name="keywords" content="老王博客">
    <meta name="description" content="老王博客">
    <link rel="icon" href="/blog2/Public/home/images/laowang.ico" type="image/x-icon">

    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/blog2/Public/home/layui/css/layui.css">
    <link rel="stylesheet" type="text/css" href="/blog2/Public/home/css/style.css">
    <link rel="stylesheet" type="text/css" href="/blog2/Public/home/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/blog2/Public/home/css/login.css">

    <link rel="stylesheet" href="/blog2/Public/Admin/css/page.css">

    <script type="text/javascript" src="/blog2/Public/home/layui/layui.js"></script>
    <style>

    </style>

</head>

<body>
    <!-- 头部 开始 -->
    <div class="layui-header header trans_3">
        <div class="main index_main">
            <?php if($_SESSION['id'] != '' ): ?><a id="layout" href="<?php echo U('home/layout');?>">注销</a>
                <a id="user" href="<?php echo U('home/user',array('id'=>$_SESSION['id']));?>"><img src="/blog2/Public/upload/<?php echo ($_SESSION["photo"]); ?>" alt=""><?php echo ($_SESSION["name"]); ?></a>
                <?php else: ?>
                <a class="register" href="<?php echo U('home/register');?>">注册</a>
                <a class="login1" href="<?php echo U('home/login');?>">登录</a><?php endif; ?>
            <a class="logo" href="./index.html"><img src="/blog2/Public/home/images/logo2.png" alt="老王博客"></a>
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
		<a href="<?php echo U('home/index');?>">首页</a><cite></cite><a href="<?php echo U('home/article_talk');?>">文章栏目</a></cite> <a><cite>细语微言</cite></a>
		
	</span>
    </div>
    <!-- 面包屑导航 结束 -->
    <!-- 文章 开始 -->
    <div class="main">
        <div class="page_left">

            <ul id="NO2" class="page_left_list">
                <?php if(is_array($listtalk)): foreach($listtalk as $key=>$vo): ?><li id="lists ">
                        <input value="<?php echo ($vo["id"]); ?> " style="display: none; " />
                        <a href="<?php echo U( 'home/article_view',array( 'id'=>$vo['id']));?>" class="pic"><img src="/blog2/Public/blogimg/<?php echo ($vo["photo"]); ?>" alt="老王博客上线了！"></a>
                        <h2 class="title"><a href="<?php echo U('home/article_view',array('id'=>$vo['id']));?>"><?php echo ($vo["title"]); ?></a></h2>
                       <div class="date_hits">
				<span><?php echo ($vo["rtime"]); ?></span>
				<span><a href=""><?php echo ($vo["type"]); ?></a></span>
				<span class="hits"><i class="layui-icon" title="点击量">&#xe63a;</i><?php echo ($vo["commentnum"]); ?>&nbsp;&nbsp;</span>
				<p class="commonts"><i class="layui-icon" title="点击量">&#xe62c;</i> <span id="" class="cy_cmt_count"><?php echo ($vo["looknum"]); ?>℃</span></p>
			</div>  
                        <div class="desc"><?php echo (htmlspecialchars_decode($vo["desc"])); ?></div>
                    </li><?php endforeach; endif; ?>
                <div id="page" class="pages"><?php echo ($page); ?></div>
            </ul>

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
            <div class="article-category shadow">
                <div class="article-category-title">分类导航</div>
                <a href="<?php echo U('home/article_think');?>" id="think" class="left">胡思乱想</a>
                <a href="<?php echo U('home/article_talk');?>" id="talk" class="right">细语微言</a>
                <a href="<?php echo U('home/article_front');?>" id="front" class="left">前端入坑</a>
                <a href="<?php echo U('home/article_home');?>" id="home" class="right">后端崛起</a>
                <div class="clear"></div>
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
    <div class="layui-footer footer" id="bottom">
        <div class="main index_main">
            <p><a href="http://www.baidu.com">老王博客</a> © phplaozhang.com</p>
            <p>
                <a href="">网站地图</a>
            </p>
            <p class="beian">
                <a class="gongan" target="_blank" href=""><img src="/blog2/Public/home/images/gonganbeian.png" alt="豫公网安备 410xxxxxxx号">豫公网安备 410xxxxxxx号</a>
                <a class="icp" target="_blank" href="http://www.miitbeian.gov.cn">豫ICP备xxxxxxxxx号-1</a>
            </p>
        </div>
    </div>
    <!-- 底部 结束 -->
    <script src="/blog2/Public/admin/js/jquery-1.11.1.min.js"></script>


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