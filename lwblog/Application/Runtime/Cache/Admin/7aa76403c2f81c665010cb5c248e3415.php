<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>


<html>

<head>
    <meta charset="utf-8">
    <title>兼职信息</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="/u2/Public/Front/layui/css/layui.css">
    <link rel="stylesheet" href="/u2/Public/Front/css/global.css">
</head>

<body>

    <div class="header">
        <div class="main">
            <a class="logo" href="#" title="Fly">Fly社区</a>
            <div class="nav">
                <a href="joblistlist.html">兼职信息</a>
                <a href="lostlist.html">失物招领</a>
                <a href="course.html">课程信息</a>
                <a href="swap.html">旧物交换</a>
                <a href="index.html">学院简介</a>
            </div>

            <div class="nav-user">
                <!-- 未登入状态 -->
                <a class="unlogin" href="login.html"><i class="iconfont icon-touxiang"></i></a>
                <span><a href="login.html">登入</a><a href="register.html">注册</a></span>
                <!-- <p class="out-login">
                    <a href="" onclick="layer.msg('正在通过QQ登入', {icon:16, shade: 0.1, time:0})" class="iconfont icon-qq" title="QQ登入"></a>
                    <a href="" onclick="layer.msg('正在通过微博登入', {icon:16, shade: 0.1, time:0})" class="iconfont icon-weibo" title="微博登入"></a>
                </p> -->

                <!-- 登入后的状态 -->
                <!-- 
      <a class="avatar" href="user/index.html">
        <img src="http://tp4.sinaimg.cn/1345566427/180/5730976522/0">
        <cite>贤心</cite>
        <i>VIP2</i>
      </a>
      <div class="nav">
        <a href="/user/set/"><i class="iconfont icon-shezhi"></i>设置</a>
        <a href="/user/logout/"><i class="iconfont icon-tuichu" style="top: 0; font-size: 22px;"></i>退了</a>
      </div> -->

            </div>
        </div>
    </div>


    <div class="main layui-clear">
        <div class="wrap">
            <div class="content">
                <div class="fly-tab fly-tab-index">
                    <span>
          <a href="jie/index.html">全部</a>
          <a href="jie/index.html">未结帖</a>
          <a href="jie/index.html">已采纳</a>
          <a href="jie/index.html">精帖</a>
          <a href="main.html">我的帖</a>
        </span>
                    <form action="http://cn.bing.com/search" class="fly-search">
                        <i class="iconfont icon-sousuo"></i>
                        <input class="layui-input" autocomplete="off" placeholder="搜索内容，回车跳转" type="text" name="q">
                    </form>
                    <a href="jie/add.html" class="layui-btn jie-add">发布失物招领</a>
                </div>


                <!-- <ul class="fly-list fly-list-top">
                    <li class="fly-list-li">
                        <a href="user/home.html" class="fly-list-avatar">
                            <img src="http://tp4.sinaimg.cn/1345566427/180/5730976522/0" alt="">
                        </a>
                        <h2 class="fly-tip">
                            <a href="jie/detail.html">兼职信息</a>
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
                                        <!-- <a href="detail.html"><?php echo ($vo["title"]); ?></a> -->
                                        <a href="<?php echo U('front/detail_job',array('id'=>$vo['id']));?>"><?php echo ($vo["title"]); ?></a>
                                    </h2>
                                    <p>
                                        <span><a href="home.html"><?php echo ($vo["author"]); ?></a></span>
                                        <span><?php echo ($vo["rtime"]); ?></span>
                                    </p>
                                </td>
                            </tr><?php endforeach; endif; ?>
                    </tbody>
                </table>

                <div style="text-align: center">
                    <div class="laypage-main">
                        <a href="jie/index.html" class="laypage-next">更多兼职信息</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="edge">
            <div class="fly-panel leifeng-rank">
                <h3 class="fly-panel-title">开发人员</h3>
                <dl>
                    <dd>
                        <a href="user/home.html">
                            <img src="/u2/Public/Front/images/avatar/default.png">
                            <cite>陈纪伟</cite>
                        </a>
                    </dd>
                    <dd>
                        <a href="user/home.html">
                            <img src="/u2/Public/Front/images/avatar/default.png">
                            <cite>陈少华</cite>
                        </a>
                    </dd>
                    <dd>
                        <a href="user/home.html">
                            <img src="/u2/Public/Front/images/avatar/default.png">
                            <cite>王欢庆</cite>
                        </a>
                    </dd>
                    <dd>
                        <a href="user/home.html">
                            <img src="/u2/Public/Front/images/avatar/default.png">
                            <cite>王民强</cite>
                        </a>
                    </dd>
                </dl>
            </div>

            <!-- <dl class="fly-panel fly-list-one">
                <dt class="fly-panel-title">最近热帖</dt>
                <dd>
                    <a href="jie/detail.html">使用 layui 秒搭后台大布局（基本结构）</a>
                    <span><i class="iconfont">&#xe60b;</i> 6087</span>
                </dd>
                <dd>
                    <a href="jie/detail.html">Java实现LayIM后端的核心代码</a>
                    <span><i class="iconfont">&#xe60b;</i> 767</span>
                </dd>
                <dd>
                    <a href="jie/detail.html">使用 layui 秒搭后台大布局（基本结构）</a>
                    <span><i class="iconfont">&#xe60b;</i> 6087</span>
                </dd>
                <dd>
                    <a href="jie/detail.html">Java实现LayIM后端的核心代码</a>
                    <span><i class="iconfont">&#xe60b;</i> 767</span>
                </dd>
                <dd>
                    <a href="jie/detail.html">使用 layui 秒搭后台大布局（基本结构）</a>
                    <span><i class="iconfont">&#xe60b;</i> 6087</span>
                </dd>
                <dd>
                    <a href="jie/detail.html">Java实现LayIM后端的核心代码</a>
                    <span><i class="iconfont">&#xe60b;</i> 767</span>
                </dd>
                <dd>
                    <a href="jie/detail.html">使用 layui 秒搭后台大布局（基本结构）</a>
                    <span><i class="iconfont">&#xe60b;</i> 6087</span>
                </dd>
                <dd>
                    <a href="jie/detail.html">Java实现LayIM后端的核心代码</a>
                    <span><i class="iconfont">&#xe60b;</i> 767</span>
                </dd>
            </dl>

            <div class="fly-panel fly-link">
                <h3 class="fly-panel-title">友情链接</h3>
                <dl>
                    <dd>
                        <a href="http://www.layui.com/" target="_blank">layui</a>
                    </dd>
                    <dd>
                        <a href="http://layim.layui.com/" target="_blank">LayIM</a>
                    </dd>
                    <dd>
                        <a href="http://layer.layui.com/" target="_blank">layer</a>
                    </dd>
                </dl>
            </div>


        </div>
    </div> -->

            <div class="footer">
                <p><a href="#">失物招领</a> 2017 &copy; <a href="http://www.layui.com/">lost.com</a></p>
                <p>
                    <a href="http://fly.layui.com/auth/get" target="_blank">联系我们</a>
                    <!-- <a href="http://fly.layui.com/jie/8157.html" target="_blank">获取Fly社区模版</a> -->
                    <a href="http://fly.layui.com/jie/2461.html" target="_blank">微信公众号</a>
                </p>
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

</body>

</html>