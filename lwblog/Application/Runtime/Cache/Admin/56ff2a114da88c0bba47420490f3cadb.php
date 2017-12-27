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
    .layui-btn{
        margin: 20px 50%;
    }
</style>
<body>
    <div class="layui-tab layui-tab-brief main-tab-container">
        <ul class="layui-tab-title main-tab-title">
            <a href="courselist.html">
                <li>课程表信息列表</li>
            </a>

            <li class="layui-this">课程表添加</li>

            <div class="main-tab-item">课程信息管理</div>
        </ul>
        <div class="layui-tab-content">
            <form action="<?php echo U('admin/course_add');?>" method="post">
                <table class="list-table">
                    <tr>
                        <th><label for="">院系</label>
                            <input type="text" name="dep">
                        </th>
                        <th><label for="">专业</label>
                            
            
                            <input type="text" name="major">
                        </th>
                        <th><label for="">班级</label>
                            
                            <input type="text" name="myclass">
                        </th> 
                        <th><label for="">学年</label>
                            
                            <input type="text" name="grade">
                        </th>
                    </tr>
                    
                </table>
                <div style="height:20px;"></div>
                <table class="list-table">
                    <thead>
                        <tr>
                        <th>时间</th>
                        <th>星期一</th>
                        <th>星期二</th>
                        <th>星期三</th>
                        <th>星期四</th>
                        <th>星期五</th>
                        <th>星期六</th>
                        <th>星期日</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>第 1 节</td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                        </tr>
                        <tr>
                            <td>第 2 节</td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                        </tr>
                        <tr>
                            <td>第 3 节</td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                        </tr>
                        <tr>
                            <td>第 4 节</td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                        </tr>
                        <tr>
                            <td>第 5 节</td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                        </tr>
                        <tr>
                            <td>第 6 节</td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                        </tr>
                        <tr>
                            <td>第 7 节</td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                        </tr>
                        <tr>
                            <td>第 8 节</td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                        </tr>
                        <tr>
                            <td>第 9 节</td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                        </tr>
                        <tr>
                            <td>第 10 节</td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                        </tr>
                        <tr>
                            <td>第 11 节</td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                            <td><input type="text" name="info[]"></td>
                        </tr>
                    </tbody>
                </table>
                <button class="layui-btn" id="btn" type="submit">添加</button>
            </form>
        </div>
    </div>
</body>


</html>