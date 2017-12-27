<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>课程信息</title>
    <link rel="stylesheet" href="/u2/Public/Front/layui/css/layui.css">
    <link rel="stylesheet" href="/u2/Public/Front/css/index.css">
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }
        
        .title {
            width: 920px;
            margin: 10px auto;
        }
        
        .title>input {
            margin-right: 20px;
        }
        
        table {
            margin: 0px auto;
            text-align: center;
            width: 1080px;
        }
        
        td {
            border: 1px solid #a29d9d;
            height: 50px;
            width: 100%;
            width: 65px;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="main">
            <a class="logo" href="#" title="Fly">Fly社区</a>
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

                <!-- <a class="avatar" href="#">
                    <img src="http://tp4.sinaimg.cn/1345566427/180/5730976522/0">
                    <cite>贤心</cite>
                    <i>VIP2</i>
                </a>
                <div class="nav">
                    <a href="#"><i class="iconfont icon-shezhi"></i>设置</a>
                    <a href=""><i class="iconfont icon-tuichu" style="top: 0; font-size: 22px;"></i>退了</a>
                </div> -->

            </div>
        </div>
    </div>

    <div class="layui-tab-content">
        <form action="<?php echo U('Admin/course_add');?>" method="post">
            <div class='title'>
                <label for="">院系:</label><input type="text" name="dep">
                <label for="">专业:</label><input type="text" name="major">
                <label for="">班级:</label><input type="text" name="myclass">
                <label for="">学年:</label><input type="text" name="grade">
            </div>
            <table>
                <thead>
                    <th>时间</th>
                    <th>星期一</th>
                    <th>星期二</th>
                    <th>星期三</th>
                    <th>星期四</th>
                    <th>星期五</th>
                    <th>星期六</th>
                    <th>星期日</th>
                </thead>
                <tbody>
                    <tr>
                        <td>第 1 节</td>
                        <td>高数</td>
                        <td>高数</td>
                        <td>高数</td>
                        <td>高数</td>
                        <td>高数</td>
                        <td>高数</td>
                        <td>高数</td>
                    </tr>
                    <tr>
                        <td>第 2 节</td>
                        <td>高数</td>
                        <td>高数</td>
                        <td>高数</td>
                        <td>高数</td>
                        <td>高数</td>
                        <td>高数</td>
                        <td>高数</td>
                    </tr>
                    <tr>
                        <td>第 3 节</td>
                        <td>高数</td>
                        <td>人机交互</td>
                        <td>人机交互</td>
                        <td>人机交互</td>
                        <td>人机交互</td>
                        <td>人机交互</td>
                        <td>人机交互</td>
                    </tr>
                    <tr>
                        <td>第 4 节</td>
                        <td>人机交互</td>
                        <td>人机交互</td>
                        <td>人机交互</td>
                        <td>人机交互</td>
                        <td>人机交互</td>
                        <td>人机交互</td>
                        <td>人机交互</td>
                    </tr>
                    <tr style="height: 25px;"></tr>
                    <tr>
                        <td>第 5 节</td>
                        <td>人机交互</td>
                        <td>人机交互</td>
                        <td>人机交互</td>
                        <td>人机交互</td>
                        <td>人机交互</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                    </tr>
                    <tr>
                        <td>第 6 节</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                    </tr>
                    <tr>
                        <td>第 7 节</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                    </tr>
                    <tr>
                        <td>第 8 节</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                    </tr>
                    <tr>
                        <td>第 9 节</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                    </tr>
                    <tr>
                        <td>第 10 节</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                    </tr>
                    <tr>
                        <td>第 11 节</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                        <td>计算机系统基础</td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</body>

</html>