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
    </style>
</head>

<body>
    <div class="layui-tab layui-tab-brief main-tab-container">
        <ul class="layui-tab-title main-tab-title">
            <a href="bloglist.html">
                <li class="layui-this">博文列表</li>
            </a>
            <div class="main-tab-item">博文信息管理</div>
        </ul>
        <div style="padding:10px;">
            <h2 style="margin-top: 8px;
                        margin-left: 40px;
                        position: absolute; color:gray">文章标签</h2>
            <ul class="layui-tab-title main-tab-title" id="classify">
                <li> <a href="bloglist.html">博文列表</a></li>
                <li class="layui-this"> <a href="thinklist.html">胡思乱想</a></li>
                <li> <a href="talklist.html">细语微言</a></li>
                <li> <a href="frontlist.html">前端入坑</a></li>
                <li> <a href="backlist.html">后端崛起</a></li>
            </ul>
        </div>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <form class="layui-form">

                    <table class="list-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>胡思乱想信息标题</th>
                                <th>时间</th>
                                <th>类别</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                                    <td><?php echo ($vo["id"]); ?></td>
                                    <td><?php echo ($vo["title"]); ?></td>
                                    <td><?php echo ($vo["rtime"]); ?></td>
                                    <td><?php echo ($vo["type"]); ?></td>
                                    <td>
                                        <a href="<?php echo U('admin/thinkedit',array('id'=>$vo['id']));?>" class="layui-btn layui-btn-small layui-btn-normal"><i class="layui-icon">&#xe642;</i></a>
                                        <a onclick="think_delete(this)" id="<?php echo ($vo["id"]); ?>" class="layui-btn layui-btn-small layui-btn-danger"><i class="layui-icon">&#xe640;</i></a>

                                    </td>
                                </tr><?php endforeach; endif; ?>
                        </tbody>
                    </table>
                    <div id="demo1" class="pages">
                        <?php echo ($page); ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="/lwblog/Public/admin/js/jquery-1.11.1.min.js"></script>
    <script>
        function think_delete(obj) {
            var id = obj.id;
            //alert(id);
            $.ajax({
                url: '<?php echo U("admin/think_delete");?>',
                type: "post",
                dataType: 'json',
                data: {
                    'id': id
                },
                success: function(data) {
                    // alert(data.msg);
                    if (data.code == 200) {
                        alert(data.msg);
                        window.location = 'thinklist.html'
                    } else {
                        alert(data.msg);
                    }
                }
            })
        }
    </script>

</body>

</html>