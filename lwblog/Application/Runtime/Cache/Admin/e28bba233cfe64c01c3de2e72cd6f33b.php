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
            <a href="share.html">
                <li class="layui-this">分享列表</li>
            </a>
            <a href="shareadd.html">
                <li>添加分享</li>
            </a>
            <div class="main-tab-item">分享信息管理</div>
        </ul>
        <div style="padding:10px;">
            <h2 style="margin-top: 8px;
                margin-left: 40px;
                position: absolute; color:gray">分享标签</h2>
            <ul class="layui-tab-title main-tab-title" id="classify">
                <li class="layui-this"> <a href="share.html">分享列表</a></li>
            </ul>
        </div>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <form class="layui-form">

                    <table class="list-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>分享信息标题</th>
                                <th>时间</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                                    <td><?php echo ($vo["id"]); ?></td>
                                    <td><?php echo ($vo["s_title"]); ?></td>
                                    <td><?php echo ($vo["s_time"]); ?></td>

                                    <td>
                                        <a href="<?php echo U('admin/shareedit',array('id'=>$vo['id']));?>" class="layui-btn layui-btn-small layui-btn-normal"><i class="layui-icon">&#xe642;</i></a>
                                        <a onclick="share_delete(this)" id="<?php echo ($vo["id"]); ?>" class="layui-btn layui-btn-small layui-btn-danger"><i class="layui-icon">&#xe640;</i></a>

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
        function share_delete(obj) {
            var id = obj.id;
            // alert(id);
            $.ajax({
                url: '<?php echo U("admin/share_delete");?>',
                type: "post",
                dataType: 'json',
                data: {
                    'id': id
                },
                success: function(data) {
                    // alert(data.msg);
                    if (data.code == 200) {
                        alert(data.msg);
                        window.location = 'share.html'
                    } else {
                        alert(data.msg);
                    }
                }
            })
        }
    </script>
</body>

</html>