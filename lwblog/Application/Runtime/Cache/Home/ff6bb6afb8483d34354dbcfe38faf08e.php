<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>


<html>

<head>
    <meta charset="utf-8">
    <title>社区</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="/blog2/Public/Front/layui/css/layui.css">
    <link rel="stylesheet" href="/blog2/Public/Front/css/global.css">

    <!-- 样式文件 -->
    <link href="/blog2/Public/umedit/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/blog2/Public/umedit/third-party/jquery.min.js"></script>
    <script type="text/javascript" src="/blog2/Public/umedit/third-party/template.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/blog2/Public/umedit/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/blog2/Public/umedit/umeditor.min.js"></script>
    <script type="text/javascript" src="/blog2/Public/umedit/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript" src="/blog2/Public/Admin/layui/layui.js"></script>
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


    <div class="main layui-clear">
        <div class="wrap">
            <div class="content detail">
                <div class="fly-panel detail-box">
                    <h1><label><?php echo ($data["title"]); ?></label></h1>
                    <div class="fly-tip fly-detail-hint" data-id="{{rows.id}}">
                        <?php if($data["type"] == 0 ): ?><span class="fly-tip-jing">发布中</span>
                            <?php else: ?> <span>已结束</span><?php endif; ?>


                    </div>
                    <div class="detail-about">
                        <a class="jie-user">
                            <img src="" alt="">
                            <cite>
            <div class="layui-form-item">
            <label name="author" id="author">发布者：<?php echo ($data["author"]); ?></label><br>
            <label name="rtime" id="rtime">发布时间:<?php echo ($data["rtime"]); ?></label>           
            </div>
            </cite>

                        </a>
                    </div>

                    <div class="detail-body photos" style="margin-bottom: 20px;">
                        <?php echo (htmlspecialchars_decode($data["content"])); ?>
                    </div>
                </div>

                <a class="layui-btn" lay-filter="feedback_edit" href="javascript:history.go(-1)">返回</a>
            </div>
        </div>

        <!-- <div class="edge">
            <dl class="fly-panel fly-list-one">
                <dt class="fly-panel-title">最近热帖</dt>
                <dd>
                    <a href="">使用 layui 秒搭后台大布局（基本结构）</a>
                    <span><i class="iconfont">&#xe60b;</i> 6087</span>
                </dd>
            </dl>

            <dl class="fly-panel fly-list-one">
                <dt class="fly-panel-title">近期热议</dt>
                <dd>
                    <a href="">使用 layui 秒搭后台大布局之基本结构</a>
                    <span><i class="iconfont">&#xe60c;</i> 96</span>
                </dd>
            </dl>
        </div>
    </div> -->

        <!--右侧帖子-->
        <!-- <table style="border: 1px solid black; display: block;">
            <tbody class="edge">
                <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr class="fly-panel fly-list-one">
                        <td style="padding-left:30px;">
                            <input value="<?php echo ($vo["id"]); ?>" style="display: none;" />
                            <h2 class="fly-tip">
                                <a href="<?php echo U('front/detail',array('id'=>$vo['id']));?>"><?php echo ($vo["title"]); ?></a>
                            </h2>
                            <p>
                                <span><a href="home.html"><?php echo ($vo["author"]); ?></a></span>
                                <span><?php echo ($vo["rtime"]); ?></span>
                            </p>
                        </td>
                    </tr><?php endforeach; endif; ?>
            </tbody>
        </table> -->


        <!-- <div class="footer" style="border: 0px;">
            <p><a href="http://fly.layui.com/">Fly社区</a> 2017 &copy; <a href="http://www.layui.com/">layui.com</a></p>
            <p>
                <a href="http://fly.layui.com/auth/get" target="_blank">产品授权</a>
                <a href="http://fly.layui.com/jie/8157.html" target="_blank">获取Fly社区模版</a>
                <a href="http://fly.layui.com/jie/2461.html" target="_blank">微信公众号</a>
            </p>
        </div> -->
        <script src="/blog2/Public/Front/layui/layui.js"></script>
        <script>
            layui.cache.page = 'jie';
            layui.cache.user = {
                username: '游客',
                uid: -1,
                avatar: '/blog2/Public/Front/images/avatar/00.jpg',
                experience: 83,
                sex: '男'
            };
            layui.config({
                version: "2.0.0",
                base: '/blog2/Public/Front/mods/'
            }).extend({
                fly: 'index'
            }).use('fly', function() {
                var fly = layui.fly;
                //如果你是采用模版自带的编辑器，你需要开启以下语句来解析。
                /*
                $('.detail-body').each(function(){
                  var othis = $(this), html = othis.html();
                  othis.html(fly.content(html));
                });
                */
            });
        </script>
        <script type="text/javascript">
            //实例化编辑器
            var um = UM.getEditor('replay');
        </script>
        <script>
            function getContent() {
                var arr = [];
                arr.push(UM.getEditor('replay').getContent());
                // alert(arr.join("\n"));
            }
        </script>
        <script>
            function setDisabled() {
                UM.getEditor('editor').setDisabled('fullscreen');
                disableBtn("enable");
            }

            function setEnabled() {
                UM.getEditor('editor').setEnabled();
                enableBtn();
            }
        </script>


</body>

</html>