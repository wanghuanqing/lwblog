<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
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
                <li class="layui-this"> <a href="bloglist.html">博文列表</a></li>
                <li> <a href="thinklist.html">胡思乱想</a></li>
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
                                <th>博文信息标题</th>
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
                                        <a href="<?php echo U('admin/blogedit',array('id'=>$vo['id']));?>" class="layui-btn layui-btn-small layui-btn-normal"><i class="layui-icon">&#xe642;</i></a>
                                        <a onclick="blog_delete(this)" id="<?php echo ($vo["id"]); ?>" class="layui-btn layui-btn-small layui-btn-danger"><i class="layui-icon">&#xe640;</i></a>

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
    <!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
    <script>
        layui.use('element', function() {
            var $ = layui.jquery,
                element = layui.element; //Tab的切换功能，切换事件监听等，需要依赖element模块

            //触发事件
            var active = {
                tabAdd: function() {
                    //新增一个Tab项
                    element.tabAdd('demo', {
                        title: '新选项' + (Math.random() * 1000 | 0) //用于演示
                            ,
                        content: '内容' + (Math.random() * 1000 | 0),
                        id: new Date().getTime() //实际使用一般是规定好的id，这里以时间戳模拟下
                    })
                },
                tabDelete: function(othis) {
                    //删除指定Tab项
                    element.tabDelete('demo', '44'); //删除：“商品管理”


                    othis.addClass('layui-btn-disabled');
                },
                tabChange: function() {
                    //切换到指定Tab项
                    element.tabChange('demo', '22'); //切换到：用户管理
                }
            };

        });
    </script>

    <script>
        function blog_delete(obj) {
            var id = obj.id;
            //alert(id);
            $.ajax({
                url: '<?php echo U("admin/blog_delete");?>',
                type: "post",
                dataType: 'json',
                data: {
                    'id': id
                },
                success: function(data) {
                    // alert(data.msg);
                    if (data.code == 200) {
                        alert(data.msg);
                        window.location = 'bloglist.html'
                    } else {
                        alert(data.msg);
                    }
                }
            })
        }
    </script>

</body>

</html>