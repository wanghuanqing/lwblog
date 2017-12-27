<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>用户中心</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="/u2/Public/Front/layui/css/layui.css">
    <link rel="stylesheet" href="/u2/Public/Front/css/global.css">
    <link rel="stylesheet" href="/u2/Public/Admin/css/page.css">

    <style>
        .mine-edit {
            margin-left: 15px;
            padding: 0 6px;
            background-color: #8FCDA0;
            color: #fff;
            font-size: 12px;
        }
        
        .jie-row i,
        .jie-row em,
        .jie-row cite {
            font-size: 12px;
            color: #999;
            font-style: normal;
        }
    </style>
</head>

<body>

    <div class="header">
        <div class="main">
            <a class="logo" href="/" title="Fly">Fly社区</a>
            <div class="nav">
                <!-- <a class="nav-this" href="index.html">
                    <i class="iconfont icon-wenda"></i>问答
                </a>
                <a href="http://www.layui.com/" target="_blank">
                    <i class="iconfont icon-ui"></i>框架
                </a> -->
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

    <div class="main fly-user-main layui-clear">
        <ul class="layui-nav layui-nav-tree layui-inline" lay-filter="user">
            <!-- <li class="layui-nav-item">
                <a href="home.html">
                    <i class="layui-icon">&#xe609;</i> 我的主页
                </a>
            </li> -->
            <li class="layui-nav-item layui-this">
                <a href="main.html">
                    <i class="layui-icon">&#xe612;</i> 用户中心
                </a>
            </li>
            <li class="layui-nav-item">
                <a href="set.html">
                    <i class="layui-icon">&#xe620;</i> 基本设置
                </a>
            </li>
            <!-- <li class="layui-nav-item">
                <a href="message.html">
                    <i class="layui-icon">&#xe611;</i> 我的消息
                </a>
            </li> -->
        </ul>

        <div class="site-tree-mobile layui-hide">
            <i class="layui-icon">&#xe602;</i>
        </div>
        <div class="site-mobile-shade"></div>

        <div class="fly-panel fly-panel-user" pad20>
            <!--
    <div class="fly-msg" style="margin-top: 15px;">
      您的邮箱尚未验证，这比较影响您的帐号安全，<a href="activate.html">立即去激活？</a>
    </div>
    -->
            <div class="layui-tab layui-tab-brief" lay-filter="user">
                <ul class="layui-tab-title" id="LAY_mine">
                    <li data-type="mine-jie" lay-id="index" class="layui-this">失物招领（<span><?php echo ($count1); ?></span>）</li>
                    <li data-type="collection" data-url="/collection/find/" lay-id="collection">兼职信息（<span><?php echo ($count2); ?></span>）</li>
                    <li data-type="collection" data-url="/collection/find/" lay-id="collection">旧物交换信息（<span><?php echo ($count3); ?></span>）</li>
                </ul>
                <div class="layui-tab-content" style="padding: 20px 0;">
                    <div class="layui-tab-item layui-show">
                        <!-- <ul class="mine-view jie-row">
                            <li>
                                <a class="jie-title" href="/jie/8116.html" target="_blank">LayIM 3.5.0 发布，移动端版本大更新（带演示图）</a>
                                <i>2017/3/14 上午8:30:00</i>
                                <a class="mine-edit" href="/jie/edit/8116">编辑</a>
                                <em>661阅/10答</em>
                            </li>
                        </ul> -->
                        <table>
                            <tbody class="mine-view jie-row">
                                <tr>
                                    <th>失物招领</th>
                                </tr>
                                <?php if(is_array($lost)): foreach($lost as $key=>$vo): ?><tr>
                                        <td>
                                            <a class="jie-title" href="<?php echo U('home/detail_lost',array('id'=>$vo['id']));?>" target="_blank"><?php echo ($vo["title"]); ?></a>
                                            <i><?php echo ($vo["rtime"]); ?></i>
                                            <a class="mine-edit" onclick="lost_delete(this)" id="<?php echo ($vo["id"]); ?>">删除</a>
                                        </td>
                                    </tr><?php endforeach; endif; ?>
                            </tbody>
                        </table>
                        <div id="LAY_page">
                            <div id="page" class="pages">
                                <?php echo ($page1); ?>
                            </div>
                        </div>
                    </div>
                    <div class="layui-tab-item">
                        <!-- <ul class="mine-view jie-row">
                            <li>
                                <a class="jie-title" href="http://fly.layui.com/jie/5366.html" target="_blank">layui 常见问题的处理和实用干货集锦</a>
                                <i>收藏于23小时前</i> </li>
                        </ul> -->
                        <table>
                            <tbody class="mine-view jie-row">
                                <tr>
                                    <th>兼职信息</th>
                                </tr>
                                <?php if(is_array($job)): foreach($job as $key=>$do): ?><tr>
                                        <td>
                                            <a class="jie-title" href="<?php echo U('home/detail_job',array('id'=>$do['id']));?>" target="_blank"><?php echo ($do["title"]); ?></a>
                                            <i><?php echo ($do["rtime"]); ?></i>
                                            <a class="mine-edit" onclick="job_delete(this)" id="<?php echo ($do["id"]); ?>">删除</a>
                                        </td>
                                    </tr><?php endforeach; endif; ?>
                            </tbody>
                        </table>
                        <div id="LAY_page1">
                            <div id="page" class="pages">
                                <?php echo ($page2); ?>
                            </div>
                        </div>
                    </div>
                    <div class="layui-tab-item">
                        <!-- <ul class="mine-view jie-row">
                                <li>
                                    <a class="jie-title" href="http://fly.layui.com/jie/5366.html" target="_blank">layui 常见问题的处理和实用干货集锦</a>
                                    <i>收藏于23小时前</i> </li>
                            </ul> -->
                        <table>
                            <tbody class="mine-view jie-row">
                                <tr>
                                    <th>旧物交换信息</th>
                                </tr>
                                <?php if(is_array($swap)): foreach($swap as $key=>$vo): ?><tr>
                                        <td>
                                            <a class="jie-title" href="<?php echo U('home/detail_swap',array('id'=>$vo['id']));?>" target="_blank"><?php echo ($vo["title"]); ?></a>
                                            <i><?php echo ($vo["rtime"]); ?></i>
                                            <a class="mine-edit" onclick="swap_delete(this)" id="<?php echo ($vo["id"]); ?>">删除</a>
                                        </td>
                                    </tr><?php endforeach; endif; ?>
                            </tbody>
                        </table>
                        <div id="LAY_page2">
                            <div id="page" class="pages">
                                <?php echo ($page3); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="footer">
        <p><a href="http://fly.layui.com/">Fly社区</a> 2017 &copy; <a href="http://www.layui.com/">layui.com</a></p>
        <p>
            <a href="http://fly.layui.com/auth/get" target="_blank">产品授权</a>
            <a href="http://fly.layui.com/jie/8157.html" target="_blank">获取Fly社区模版</a>
            <a href="http://fly.layui.com/jie/2461.html" target="_blank">微信公众号</a>
        </p>
    </div> -->
    <script src="/u2/Public/Front/layui/layui.js"></script>
    <script>
        layui.cache.page = 'user';
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

        function job_delete(obj) {
            var id = obj.id;
            //alert(id);
            $.ajax({
                url: '<?php echo U("home/job_delete");?>',
                type: "post",
                dataType: 'json',
                data: {
                    'id': id
                },
                success: function(data) {
                    // alert(data.msg);
                    if (data.code == 200) {
                        alert(data.msg);
                        window.location = 'main.html'
                    } else {
                        alert(data.msg);
                    }
                }
            })
        }

        function lost_delete(obj) {
            var id = obj.id;
            //alert(id);
            $.ajax({
                url: '<?php echo U("home/lost_delete");?>',
                type: "post",
                dataType: 'json',
                data: {
                    'id': id
                },
                success: function(data) {
                    // alert(data.msg);
                    if (data.code == 200) {
                        alert(data.msg);
                        window.location = 'main.html'
                    } else {
                        alert(data.msg);
                    }
                }
            })
        }

        function swap_delete(obj) {
            var id = obj.id;
            //alert(id);
            $.ajax({
                url: '<?php echo U("home/swap_delete");?>',
                type: "post",
                dataType: 'json',
                data: {
                    'id': id
                },
                success: function(data) {
                    // alert(data.msg);
                    if (data.code == 200) {
                        alert(data.msg);
                        window.location = 'main.html'
                    } else {
                        alert(data.msg);
                    }
                }
            })
        }
    </script>
</body>

</html>