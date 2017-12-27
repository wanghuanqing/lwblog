<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>老王博客-后台管理中心</title>
    <link rel="stylesheet" href="/lwblog/Public/Admin/layui/css/layui.css">
    <link rel="stylesheet" href="/lwblog/Public/Admin/css/global.css">
    <link rel="stylesheet" href="/lwblog/Public/Admin/css/page.css">
    <script type="text/javascript" src="/lwblog/Public/Admin/layui/layui.js"></script>
    <style>
        #classify a {
            display: block;
            float: left;
            width: 85px;
            height: 40px;
        }
        
        h2 {
            color: #009688;
        }
        
        #add {
            display: block;
            width: 70px;
            height: 30px;
            margin-right: 20px;
            background: #28b0ef;
            margin-left: 90%;
            text-align: center;
            padding-top: 10px;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="layui-tab layui-tab-brief main-tab-container">
        <div class="layui-tab" style="padding:10px;width:100%;">
            <ul class="layui-tab-title" style="width:300px;  margin:0px auto;">
                <li class="layui-this">
                    <h2>关于博客</h2>
                </li>
            </ul>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">
                    <div class="layui-tab-content">
                        <div class="layui-tab-item layui-show">
                            <form class="layui-form">

                                <table class="list-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>版本</th>
                                            <th>时间</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                                                <td><?php echo ($vo["id"]); ?></td>
                                                <td><?php echo ($vo["title"]); ?></td>

                                                <td><?php echo ($vo["date"]); ?></td>
                                                <td>
                                                    <a onclick="aboutblog_delete(this)" id="<?php echo ($vo["id"]); ?>" class="layui-btn layui-btn-small layui-btn-danger"><i class="layui-icon">&#xe640;</i></a>

                                                </td>

                                            </tr><?php endforeach; endif; ?>
                                    </tbody>
                                </table>
                                <a id="add" href="aboutblogadd.html">添加</a>

                                <div id="demo1" class="pages">
                                    <?php echo ($page); ?>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <script src="/lwblog/Public/admin/js/jquery-1.11.1.min.js"></script>
    <script>
        function aboutblog_delete(obj) {
            var id = obj.id;
            //alert(id);
            $.ajax({
                url: '<?php echo U("admin/aboutblog_delete");?>',
                type: "post",
                dataType: 'json',
                data: {
                    'id': id
                },
                success: function(data) {
                    // alert(data.msg);
                    if (data.code == 200) {
                        alert(data.msg);
                        window.location = 'aboutblog.html'
                    } else {
                        alert(data.msg);
                    }
                }
            })
        }
    </script>
</body>

</html>