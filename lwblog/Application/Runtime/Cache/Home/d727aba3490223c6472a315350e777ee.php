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

    <!-- 样式文件 -->
    <link href="/u2/Public/umedit/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/u2/Public/umedit/third-party/jquery.min.js"></script>
    <script type="text/javascript" src="/u2/Public/umedit/third-party/template.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/u2/Public/umedit/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/u2/Public/umedit/umeditor.min.js"></script>
    <script type="text/javascript" src="/u2/Public/umedit/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript" src="/u2/Public/Admin/layui/layui.js"></script>
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

    <div class="layui-tab layui-tab-brief main-tab-container" style="margin: 200px auto; width:972px">
        <h1 style="margin: -30px auto 70px;
            width: 50%;
            /* height: 50px; */
            font-size: 38px;
            text-align: center;
            font-weight: 500;">添加失物招领信息</h1>
        <div class="layui-tab-content">
            <form class="layui-form" id="form" method="post" action="<?php echo U('home/add_lost');?>">
                <div class="layui-tab-item layui-show">
                    <input type="hidden" name="id" value="">
                    <div class="layui-form-item">
                        <label class="layui-form-label">标题</label>
                        <div class="layui-input-inline input-custom-width">
                            <input type="text" id="title" name="title" value="" style="width: 400px" lay-verify="required" autocomplete="off" placeholder="请输入标题" class="layui-input">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">内容</label>
                        <div class="layui-input-block">
                            <textarea type="text/plain" id="content" name="content" style="width:800px;height:240px;"></textarea>
                            <!--<textarea name="content" id="content" lay-verify="layedit" autocomplete="off" class="layui-textarea" id="content"></textarea>                            -->
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn" id="btn" type="button" lay-submit="" lay-filter="feedback_edit">立即添加</button>
                            <a class="layui-btn" lay-filter="feedback_edit" href="javascript:history.go(-1)">返回</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="footer">
        <p><a href="http://fly.layui.com/">Fly社区</a> 2017 &copy; <a href="http://www.layui.com/">layui.com</a></p>
        <p>
            <a href="http://fly.layui.com/auth/get" target="_blank">产品授权</a>
            <a href="http://fly.layui.com/jie/8157.html" target="_blank">获取Fly社区模版</a>
            <a href="http://fly.layui.com/jie/2461.html" target="_blank">微信公众号</a>
        </p>
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

    <script>
        $(function() {
            // alert('发布兼职');
            $('#btn').click(function() {
                var title = $('#title').val();
                var content = UM.getEditor('content').getContent();
                //alert(title + content);
                $.ajax({
                    url: $('#form').attr('action'),
                    type: 'post',
                    dataType: 'json',
                    data: {
                        'title': title,
                        'content': content
                    },
                    success: function(data) {
                        if (data.code == 200) {
                            alert(data.msg);
                            location = 'lostlist.html';
                        } else {
                            alert(data.msg);
                        }
                    }
                })
            })

        })

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

    <script type="text/javascript">
        //实例化编辑器
        var um = UM.getEditor('content');
        um.ready(function() {
            //this是当前创建的编辑器实例
            this.setContent('请输入内容')
        })

        function getContent() {
            var arr = [];
            arr.push(UM.getEditor('content').getContent());
        }
    </script>
</body>

</html>