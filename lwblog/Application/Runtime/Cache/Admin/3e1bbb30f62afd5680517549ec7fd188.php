<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>校园信息发布后台管理中心</title>
    <link rel="stylesheet" href="/u2/Public/Admin/layui/css/layui.css">
    <link rel="stylesheet" href="/u2/Public/Admin/css/global.css">
    <script type="text/javascript" src="/u2/Public/Admin/layui/layui.js"></script>
</head>
<style>
  #layui-btn{
        margin: 20px 50%;
        width: 50%;
    }
</style>
<body>
    <div class="layui-tab layui-tab-brief main-tab-container">
        <ul class="layui-tab-title main-tab-title">

            <li class="layui-this">课程信息修改</li>

            <div class="main-tab-item">课程表信息修改</div>
        </ul>
        <div class="layui-tab-content">
            <form action="<?php echo U('admin/course_edit');?>" method="post">
                <table class="list-table">
                    <tr>
                        <th><label for="">院系</label><input type="text" name="dep" value="<?php echo ($data["dep"]); ?>"></th>
                        <th> <label for="">专业</label><input type="text" name="major" value="<?php echo ($data["major"]); ?>"></th>
                        <th> <label for="">班级</label><input type="text" name="myclass" value="<?php echo ($data["myclass"]); ?>"></th>
                        <th> <label for="">学年</label><input type="text" name="grade" value="<?php echo ($data["grade"]); ?>"></th>
                    </tr>
                </table>
                
                <table class="list-table">
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
                        <?php if(is_array($da)): $i = 0; $__LIST__ = $da;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                <td>第 <?php echo ($key+1); ?> 节</td>
                                <td><input type="text" name="info[]" value="<?php echo ($vo[0]); ?>"></td>
                                <td><input type="text" name="info[]" value="<?php echo ($vo[1]); ?>"></td>
                                <td><input type="text" name="info[]" value="<?php echo ($vo[2]); ?>"></td>
                                <td><input type="text" name="info[]" value="<?php echo ($vo[3]); ?>"></td>
                                <td><input type="text" name="info[]" value="<?php echo ($vo[4]); ?>"></td>
                                <td><input type="text" name="info[]" value="<?php echo ($vo[5]); ?>"></td>
                                <td><input type="text" name="info[]" value="<?php echo ($vo[6]); ?>"></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                    </tbody>
                </table>
                <div id="layui-btn">
                    <input type="text" value="<?php echo ($data["id"]); ?>" name="id" id="id" hidden>
                    <button class="layui-btn" lay-submit="" lay-filter="feedback_edit" id="course_edit" type="submit">修改</button>
                    <a class="layui-btn" href="javascript:history.back(-1)">返回</a>
                </div>
                

            </form>
        </div>
    </div>
</body>


</html>