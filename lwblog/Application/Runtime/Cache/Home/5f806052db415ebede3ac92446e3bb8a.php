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
        
        .layui-tab-content {
            margin-top: 100px;
        }
        
        .title {
            width: 920px;
            margin: 25px auto;
        }
        
        .title>lable {
            margin-right: 20px;
        }
        
        table {
            margin: 0px auto;
            text-align: center;
            width: 1080px;
            background: #ffffff;
        }
        
        th {
            border: 1px solid #a29d9d;
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

    <div class="layui-tab-content">
        <form>
            <div class='title'>
                <label>院系:<?php echo ($data["dep"]); ?></label>
                <label>专业:<?php echo ($data["major"]); ?></label>
                <label>班级:<?php echo ($data["myclass"]); ?></label>
                <label>学年:<?php echo ($data["grade"]); ?></label>
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
                    <tbody>
                        <?php if(is_array($da)): $i = 0; $__LIST__ = $da;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td>第 <?php echo ($key+1); ?> 节</td>
                                <td> <label><?php echo ($vo[0]); ?></label> </td>
                                <td> <label><?php echo ($vo[1]); ?></label> </td>
                                <td> <label><?php echo ($vo[2]); ?></label> </td>
                                <td> <label><?php echo ($vo[3]); ?></label> </td>
                                <td> <label><?php echo ($vo[4]); ?></label> </td>
                                <td> <label><?php echo ($vo[5]); ?></label> </td>
                                <td> <label><?php echo ($vo[6]); ?></label> </td>

                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                    </tbody>

                    <!-- <tr style="height: 25px;"></tr> -->

                </tbody>

            </table>

        </form>
        <div id="layui-btn">
            <a class="layui-btn" href="javascript:history.back(-1)">返回</a>
        </div>
    </div>
</body>

</html>