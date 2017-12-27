<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>帐号设置</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="/u2/Public/Front/layui/css/layui.css">
    <link rel="stylesheet" href="/u2/Public/Front/css/global.css">
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
            <li class="layui-nav-item">
                <a href="main.html">
                    <i class="layui-icon">&#xe612;</i> 用户中心
                </a>
            </li>
            <li class="layui-nav-item layui-this">
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
            <div class="layui-tab layui-tab-brief" lay-filter="user">
                <ul class="layui-tab-title" id="LAY_mine">
                    <!-- <li class="layui-this" lay-id="info">我的资料</li> -->
                    <!-- <li lay-id="avatar">头像</li> -->
                    <li class="layui-this" lay-id="pass">密码</li>
                    <!-- <li lay-id="bind">帐号绑定</li> -->
                </ul>
                <div class="layui-tab-content" style="padding: 20px 0;">
                    <!-- <div class="layui-form layui-form-pane layui-tab-item layui-show">
                        <form method="post">
                            <div class="layui-form-item">
                                <label for="L_email" class="layui-form-label">邮箱</label>
                                <div class="layui-input-inline">
                                    <input type="text" id="L_email" name="email" required lay-verify="email" autocomplete="off" value="" class="layui-input">
                                </div>
                                <div class="layui-form-mid layui-word-aux">如果您在邮箱已激活的情况下，变更了邮箱，需<a href="activate.html" style="font-size: 12px; color: #4f99cf;">重新验证邮箱</a>。</div>
                            </div>
                            <div class="layui-form-item">
                                <label for="L_username" class="layui-form-label">昵称</label>
                                <div class="layui-input-inline">
                                    <input type="text" id="L_username" name="username" required lay-verify="required" autocomplete="off" value="" class="layui-input">
                                </div>
                                <div class="layui-inline">
                                    <div class="layui-input-inline">
                                        <input type="radio" name="sex" value="0" checked title="男">
                                        <input type="radio" name="sex" value="1" title="女">
                                    </div>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label for="L_city" class="layui-form-label">城市</label>
                                <div class="layui-input-inline">
                                    <input type="text" id="L_city" name="city" autocomplete="off" value="" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item layui-form-text">
                                <label for="L_sign" class="layui-form-label">签名</label>
                                <div class="layui-input-block">
                                    <textarea placeholder="随便写些什么刷下存在感" id="L_sign" name="sign" autocomplete="off" class="layui-textarea" style="height: 80px;"></textarea>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <button class="layui-btn" key="set-mine" lay-filter="*" lay-submit>确认修改</button>
                            </div>
                    </div> -->

                    <!-- <div class="layui-form layui-form-pane layui-tab-item">
                        <div class="layui-form-item">
                            <div class="avatar-add">
                                <p>建议尺寸168*168，支持jpg、png、gif，最大不能超过30KB</p>
                                <div class="upload-img">
                                    <input type="file" name="file" id="LAY-file" lay-title="上传头像">
                                </div>
                                <img src="http://tp4.sinaimg.cn/1345566427/180/5730976522/0">
                                <span class="loading"></span>
                            </div>
                        </div>
                    </div> -->

                    <div class="layui-form layui-form-pane layui-tab-item layui-show">
                        <form id="form" method="post" action="<?php echo U('home/setpwd');?>">
                            <div class="layui-form-item">
                                <label for="L_nowpass" class="layui-form-label">当前密码</label>
                                <div class="layui-input-inline">
                                    <input type="password" id="L_nowpass" name="nowpass" required lay-verify="required" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label for="L_pass" class="layui-form-label">新密码</label>
                                <div class="layui-input-inline">
                                    <input type="password" id="L_pass" name="pass" required lay-verify="required" autocomplete="off" class="layui-input">
                                </div>
                                <div class="layui-form-mid layui-word-aux">6到16个字符</div>
                            </div>
                            <div class="layui-form-item">
                                <label for="L_repass" class="layui-form-label">确认密码</label>
                                <div class="layui-input-inline">
                                    <input type="password" id="L_repass" name="repass" required lay-verify="required" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <button class="layui-btn" lay-filter="*" lay-submit id="btn">确认修改</button>
                            </div>
                        </form>
                    </div>

                    <div class="layui-form layui-form-pane layui-tab-item">
                        <ul class="app-bind">
                            <li class="fly-msg app-havebind">
                                <i class="iconfont icon-qq"></i>
                                <span>已成功绑定，您可以使用QQ帐号直接登录，当然，您也可以</span>
                                <a href="javascript:;" class="acc-unbind" type="qq_id">解除绑定</a>

                                <!-- <a href="" onclick="layer.msg('正在绑定微博QQ', {icon:16, shade: 0.1, time:0})" class="acc-bind" type="qq_id">立即绑定</a>
                <span>，即可使用QQ帐号登录Fly社区</span> -->
                            </li>
                            <li class="fly-msg">
                                <i class="iconfont icon-weibo"></i>
                                <!-- <span>已成功绑定，您可以使用微博直接登录Fly社区，当然，您也可以</span>
                <a href="javascript:;" class="acc-unbind" type="weibo_id">解除绑定</a> -->

                                <a href="" class="acc-weibo" type="weibo_id" onclick="layer.msg('正在绑定微博', {icon:16, shade: 0.1, time:0})">立即绑定</a>
                                <span>，即可使用微博帐号登录</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>


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
        $(function() {
            $('#btn').click(function() {
                var L_nowpass = $('#L_nowpass').val();
                var L_pass = $('#L_pass').val();
                //alert(title + content);
                $.ajax({
                    url: $('#form').attr('action'),
                    type: 'post',
                    dataType: 'json',
                    data: {
                        'L_nowpass': L_nowpass,
                        'L_pass': L_pass
                    },
                    success: function(data) {
                        if (data.code == 200) {
                            alert(data.msg);
                            location = 'main.html';
                        } else {
                            alert(data.msg);
                        }
                    }
                })
            })

        })
    </script>
</body>

</html>