<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>


<html>

<head>
    <meta charset="utf-8">
    <title>社区</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="/u/Public/Front/layui/css/layui.css">
    <link rel="stylesheet" href="/u/Public/Front/css/global.css">

      <!-- 样式文件 -->
    <link href="/u/Public/umedit/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/u/Public/umedit/third-party/jquery.min.js"></script>
    <script type="text/javascript" src="/u/Public/umedit/third-party/template.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/u/Public/umedit/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/u/Public/umedit/umeditor.min.js"></script>
    <script type="text/javascript" src="/u/Public/umedit/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript" src="/u/Public/Admin/layui/layui.js"></script>
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
                <a href="joblist.html">兼职信息</a>
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
    <div class="content detail">
      <div class="fly-panel detail-box">
        <h1><input type="text" name="title" id="title" value="<?php echo ($data["title"]); ?>" required lay-verify="required" placeholder="" autocomplete="off" class="layui-input"></h1>
        <div class="fly-tip fly-detail-hint" data-id="{{rows.id}}">
          <span class="fly-tip-jing">未招领</span> 
          <span>已招领</span>
        </div>
        <div class="detail-about">
          <a class="jie-user" href="">
            <img src="http://tp4.sinaimg.cn/1345566427/180/5730976522/0" alt="">
            <cite>
            <div class="layui-form-item">
            <label name="author" id="author"><?php echo ($data["author"]); ?>aa</label><br>
            <label name="rtime" id="rtime">发布时间:<?php echo ($data["rtime"]); ?></label>
            
            </div>
            </cite>
             
          </a>
        </div>
        
        <div class="detail-body photos" style="margin-bottom: 20px;">
               <?php echo (htmlspecialchars_decode($data["content"])); ?>
        </div>
      </div>

      <div class="fly-panel detail-box" style="padding-top: 0;">
        <a name="comment"></a>
        <ul class="jieda photos" id="jieda">
          <li data-id="12" class="jieda-daan">
            <a name="item-121212121212"></a>
            <div class="detail-about detail-about-reply">
              <a class="jie-user" href="">
                <img src="/u/Public/res/images/avatar/default.png" alt="">
                <cite>
                  <i>华仔</i>
                  <!-- <em>(楼主)</em>
                  <em style="color:#5FB878">(管理员)</em>
                  <em style="color:#FF9E3F">（活雷锋）</em>
                  <em style="color:#999">（该号已被封）</em> -->
                </cite>
              </a>
              <div class="detail-hits">
                <span>3分钟前</span>
              </div>
              <i class="iconfont icon-caina" title="最佳答案"></i>
            </div>
            <div class="detail-body jieda-body">
              <p>么么哒</p>
            </div>
            <div class="jieda-reply">
              <span class="jieda-zan zanok" type="zan"><i class="iconfont icon-zan"></i><em>12</em></span>
              <span type="reply"><i class="iconfont icon-svgmoban53"></i>回复</span>
              <!-- <div class="jieda-admin">
                <span type="edit">编辑</span>
                <span type="del">删除</span>
                <span class="jieda-accept" type="accept">采纳</span>
              </div> -->
            </div>
          </li>
          
          <li data-id="13">
            <a name="item-121212121212"></a>
            <div class="detail-about detail-about-reply">
              <a class="jie-user" href="">
                <img src="/u/Public/res/images/avatar/default.png" alt="">
                <cite>
                  <i>香菇</i>
                  <em style="color:#FF9E3F">活雷锋</em>
                </cite>
              </a>
              <div class="detail-hits">
                <span>刚刚</span>
              </div>
            </div>
            <div class="detail-body jieda-body">
              <p>蓝瘦</p>
            </div>
            <div class="jieda-reply">
              <span class="jieda-zan" type="zan"><i class="iconfont icon-zan"></i><em>0</em></span>
              <span type="reply"><i class="iconfont icon-svgmoban53"></i>回复</span>
            </div>
          </li>
          
          <!-- <li class="fly-none">没有任何回答</li> -->
        </ul>
        
        <div class="layui-form layui-form-pane">
          <form action="/jie/reply/" method="post">
            <div class="layui-form-item layui-form-text">
              <div class="layui-input-block">
            
                <textarea name = "replay" id="replay"  class="layui-textarea"></textarea>

              </div>
            </div>
            <div class="layui-form-item">
              <input type="hidden" name="jid" value="{{rows.id}}">
              <button class="layui-btn" lay-filter="*" lay-submit>提交回答</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

         <div class="edge">
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
    </div> 

    <!--右侧帖子-->
    <table style="border: 1px solid black; display: block;">
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
    </table>


        <div class="footer" style="border: 0px;">
            <p><a href="http://fly.layui.com/">Fly社区</a> 2017 &copy; <a href="http://www.layui.com/">layui.com</a></p>
            <p>
                <a href="http://fly.layui.com/auth/get" target="_blank">产品授权</a>
                <a href="http://fly.layui.com/jie/8157.html" target="_blank">获取Fly社区模版</a>
                <a href="http://fly.layui.com/jie/2461.html" target="_blank">微信公众号</a>
            </p>
        </div>
        <script src="/u/Public/Front/layui/layui.js"></script>
        <script>
            layui.cache.page = 'jie';
            layui.cache.user = {
                username: '游客',
                uid: -1,
                avatar: '/u/Public/Front/images/avatar/00.jpg',
                experience: 83,
                sex: '男'
            };
            layui.config({
                version: "2.0.0",
                base: '/u/Public/Front/mods/'
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