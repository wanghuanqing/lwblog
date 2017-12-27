<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>老王博客</title>
    <!-- <link rel="Shortcut Icon" href="laowang.ico" type="image/x-icon"> -->
    <link rel="icon" href="/lwblog/Public/home/images/laowang.ico" type="image/x-icon">
    <meta name="keywords" content="老王博客,老王,老王博客,老王的个人博客,个人博客,个人网站,个人主页,老王blog,web老王,PHP个人博客,web个人博客,web程序员博客,PHP程序员博客,个人博客php源代码,基于php个人博客,Lwblogs,老王博客系统">
    <meta name="description" content="老王博客">
    <meta name="viewport" content="width=device-width, height=device-height, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="/lwblog/Public/home/layui/css/layui.css">
    <link rel="stylesheet" type="text/css" href="/lwblog/Public/home/css/style.css">
    <link rel="stylesheet" type="text/css" href="/lwblog/Public/home/css/login.css">
    <link rel="stylesheet" href="/lwblog/Public/Admin/css/page.css">

    <script type="text/javascript" src="/lwblog/Public/home/layui/layui.js"></script>
    <script src="/lwblog/Public/home/layui/layui.js"></script>
    <style>
        .home-tips {
            padding: 10px 10px;
            background: #fff;
            font-size: 13px;
            margin-bottom: 15px;
        }
        
        .home-tips .home-tips-container {
            margin-left: 20px;
            height: 17px;
            overflow: hidden;
        }
        
        .home-tips-container>span {
            margin-left: 20px;
            height: 17px;
            overflow: hidden;
        }
    </style>

</head>

<body>

    <!-- 头部 开始 -->
    <div class="layui-header header trans_3">
        <div class="main index_main">
            <div id="user_color">
                <?php if($_SESSION['id'] != '' ): ?><a id="layout" href="<?php echo U('home/layout');?>">注销</a>
                    <a id="user" href="<?php echo U('home/user',array('id'=>$_SESSION['id']));?>"><img src="/lwblog/Public/upload/<?php echo ($_SESSION["photo"]); ?>" alt=""></a>
                    <?php else: ?>
                    <a class="register" href="<?php echo U('home/register');?>">注册</a>
                    <a class="login1" href="<?php echo U('home/login');?>">登录</a><?php endif; ?>
            </div>
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
                    <!-- <dl class="layui-nav-child">
                        <dd><a href="<?php echo U('home/case_list');?>">源码分享</a></dd>
                        <dd><a href="<?php echo U('home/case_list');?>">jQuery特效</a></dd>
                    </dl> -->
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

    <!-- 头部 结束 -->

    <!-- banner 开始 -->
    <div class="banner">
        <canvas id="canvas-banner" style="background: #393D49;">
				</canvas>
        <div class="main index_main">

            <div>
                <script type="text/javascript">
                    var canvas = document.getElementById('canvas-banner');
                    canvas.width = window.document.body.clientWidth - 10; //减去滚动条的宽度
                    if (screen.width >= 992) {
                        canvas.height = window.innerHeight * 1 / 3;
                    } else {
                        canvas.height = window.innerHeight * 2 / 7;
                    }
                </script>
            </div>
        </div>
    </div>
    <div style="padding:10px;">

    </div>
    <!-- 文章 开始 -->
    <div class="main index_main">
        <div class="home-tips shadow">
            <!-- <embed src="/lwblog/Public/01.mp3" hidden="flase" autostart="true" loop="true"> -->
            <i style="float:left;line-height:17px;font-size:30px; color:#ec6100 ;" class="layui-icon ">&#xe645;</i>
            <div class="home-tips-container ">
                <span style="color: #F10303">大家好！新公告来了！！！！</span>

                <?php if(is_array($listad)): foreach($listad as $key=>$vo): ?><span hidden style="color: #009688"><a href="<?php echo ($vo["ad_link"]); ?>"><?php echo ($vo["ad"]); ?></a> </span><?php endforeach; endif; ?>
            </div>

        </div>
        <div class="page_left ">
            <ul class="page_left_list ">

                <?php if(is_array($list )): foreach($list as $key=>$vo ): ?><li id="lists ">
                        <input value="<?php echo ($vo["id"]); ?> " style="display: none; " />
                        <a href="<?php echo U( 'home/article_view',array( 'id'=>$vo['id']));?>" class="pic"><img src="/lwblog/Public/blogimg/<?php echo ($vo["photo"]); ?>" alt="老王博客上线了！"></a>
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

            <div class="about_stationmaster_container">
                <h3>博主信息</h3>
                <ol class="page_right_list trans_3">
                    <li>姓名：王欢庆</li>
                    <li>职业：WEB前端、PHP程序猿</li>
                    <li>座右铭：自强不息，厚德载物</li>
                    <li>QQ：1426095072 </li>
                    <audio controls="controls" loop="true">
                                    <source src="/lwblog/Public/music/广陵散.ogg" type="audio/ogg">
                                    <source src="/lwblog/Public/music/广陵散.mp3" type="audio/mpeg">
                                  Your browser does not support the audio element.
                        </audio>


                </ol>
            </div>
            <div class="new_list">
                <h3>最新文章</h3>
                <ol class="page_right_list trans_3">
                    <?php if(is_array($list1)): foreach($list1 as $key=>$vo): ?><li><a href="<?php echo U('home/article_view',array('id'=>$vo['id']));?>"><?php echo ($vo["title"]); ?></a><span class="hits"><?php echo ($vo["looknum"]); ?>℃</span></li><?php endforeach; endif; ?>
                </ol>
            </div>
            <div class="hot_list">
                <h3>最近热文</h3>
                <ol class="page_right_list trans_3">
                    <?php if(is_array($list2)): foreach($list2 as $key=>$vo): ?><li><a href="<?php echo U('home/article_view',array('id'=>$vo['id']));?>"><?php echo ($vo["title"]); ?></a><span class="hits"><?php echo ($vo["looknum"]); ?>℃</span></li><?php endforeach; endif; ?>
                </ol>
            </div>
            <h3>友情连接</h3>
            <div class="links trans_3">
                <a href="http://www.baidu.com" target="_blank">百度一下</a>
                <a href="http://www.layui.com/" target="_blank">Layui-经典前端框架</a>
                <a href="http://www.bootcss.com/" target="_blank">Bootstrap-前端框架</a>
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
            <p><a href="http://www.baidu.com">百度一下</a> © www.baidu.com</p>
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
        layui.use('jquery', function() {
            var $ = layui.jquery;
            $(function() {
                //播放公告
                playAnnouncement(3000);
            });

            function playAnnouncement(interval) {
                var index = 0;
                var $announcement = $('.home-tips-container>span');
                //自动轮换
                setInterval(function() {
                    index++; //下标更新
                    if (index >= $announcement.length) {
                        index = 0;
                    }
                    $announcement.eq(index).stop(true, true).fadeIn().siblings('span').fadeOut(); //下标对应的图片显示，同辈元素隐藏
                }, interval);
            }
            //画canvas
            DrawCanvas();
        });

        function DrawCanvas() {
            var $ = layui.jquery;
            var canvas = document.getElementById('canvas-banner');
            canvas.width = window.document.body.clientWidth; //需要重新设置canvas宽度，因为dom加载完毕后有可能没有滚动条
            var ctx = canvas.getContext('2d');

            ctx.strokeStyle = (new Color(150)).style;

            var dotCount = 100; //圆点数量
            var dotRadius = 100; //产生连线的范围
            var dotDistance = 70; //产生连线的最小距离
            var screenWidth = screen.width;
            if (screenWidth >= 768 && screenWidth < 992) {
                dotCount = 130;
                dotRadius = 100;
                dotDistance = 60;
            } else if (screenWidth >= 992 && screenWidth < 1200) {
                dotCount = 140;
                dotRadius = 140;
                dotDistance = 70;
            } else if (screenWidth >= 1200 && screenWidth < 1700) {
                dotCount = 140;
                dotRadius = 150;
                dotDistance = 80;
            } else if (screenWidth >= 1700) {
                dotCount = 200;
                dotRadius = 150;
                dotDistance = 80;
            }
            //默认鼠标位置 canvas 中间
            var mousePosition = {
                x: 50 * canvas.width / 100,
                y: 50 * canvas.height / 100
            };
            //小圆点
            var dots = {
                count: dotCount,
                distance: dotDistance,
                d_radius: dotRadius,
                array: []
            };

            function colorValue(min) {
                return Math.floor(Math.random() * 255 + min);
            }

            function createColorStyle(r, g, b) {
                return 'rgba(' + r + ',' + g + ',' + b + ', 0.8)';
            }

            function mixComponents(comp1, weight1, comp2, weight2) {
                return (comp1 * weight1 + comp2 * weight2) / (weight1 + weight2);
            }

            function averageColorStyles(dot1, dot2) {
                var color1 = dot1.color,
                    color2 = dot2.color;

                var r = mixComponents(color1.r, dot1.radius, color2.r, dot2.radius),
                    g = mixComponents(color1.g, dot1.radius, color2.g, dot2.radius),
                    b = mixComponents(color1.b, dot1.radius, color2.b, dot2.radius);
                return createColorStyle(Math.floor(r), Math.floor(g), Math.floor(b));
            }

            function Color(min) {
                min = min || 0;
                this.r = colorValue(min);
                this.g = colorValue(min);
                this.b = colorValue(min);
                this.style = createColorStyle(this.r, this.g, this.b);
            }

            function Dot() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;

                this.vx = -.5 + Math.random();
                this.vy = -.5 + Math.random();

                this.radius = Math.random() * 2;

                this.color = new Color();
            }

            Dot.prototype = {
                draw: function() {
                    ctx.beginPath();
                    ctx.fillStyle = "#fff";
                    ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
                    ctx.fill();
                }
            };

            function createDots() {
                for (i = 0; i < dots.count; i++) {
                    dots.array.push(new Dot());
                }
            }

            function moveDots() {
                for (i = 0; i < dots.count; i++) {

                    var dot = dots.array[i];

                    if (dot.y < 0 || dot.y > canvas.height) {
                        dot.vx = dot.vx;
                        dot.vy = -dot.vy;
                    } else if (dot.x < 0 || dot.x > canvas.width) {
                        dot.vx = -dot.vx;
                        dot.vy = dot.vy;
                    }
                    dot.x += dot.vx;
                    dot.y += dot.vy;
                }
            }

            function connectDots1() {
                var pointx = mousePosition.x;
                for (i = 0; i < dots.count; i++) {
                    for (j = 0; j < dots.count; j++) {
                        i_dot = dots.array[i];
                        j_dot = dots.array[j];

                        if ((i_dot.x - j_dot.x) < dots.distance && (i_dot.y - j_dot.y) < dots.distance && (i_dot.x - j_dot.x) > -dots.distance && (i_dot.y - j_dot.y) > -dots.distance) {
                            if ((i_dot.x - pointx) < dots.d_radius && (i_dot.y - mousePosition.y) < dots.d_radius && (i_dot.x - pointx) > -dots.d_radius && (i_dot.y - mousePosition.y) > -dots.d_radius) {
                                ctx.beginPath();
                                ctx.strokeStyle = averageColorStyles(i_dot, j_dot);
                                ctx.moveTo(i_dot.x, i_dot.y);
                                ctx.lineTo(j_dot.x, j_dot.y);
                                ctx.stroke();
                                ctx.closePath();
                            }
                        }
                    }
                }
            }

            function drawDots() {
                for (i = 0; i < dots.count; i++) {
                    var dot = dots.array[i];
                    dot.draw();
                }
            }

            function animateDots() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                moveDots();
                connectDots1()
                drawDots();

                requestAnimationFrame(animateDots);
            }
            //鼠标在canvas上移动
            $('canvas').on('mousemove', function(e) {
                mousePosition.x = e.pageX;
                mousePosition.y = e.pageY;
            });

            //鼠标移出canvas
            $('canvas').on('mouseleave', function(e) {
                mousePosition.x = canvas.width / 2;
                mousePosition.y = canvas.height / 2;
            });

            createDots();

            requestAnimationFrame(animateDots);
        }

        //监听窗口大小改变
        window.addEventListener("resize", resizeCanvas, false);

        //窗口大小改变时改变canvas宽度
        function resizeCanvas() {
            var canvas = document.getElementById('canvas-banner');
            canvas.width = window.document.body.clientWidth;
            canvas.height = window.innerHeight * 1 / 3;
        }
    </script>
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