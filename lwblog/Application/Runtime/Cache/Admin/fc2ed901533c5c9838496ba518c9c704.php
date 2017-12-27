<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>校园信息发布后台管理中心</title>
    <link rel="stylesheet" href="/u2/Public/Admin/layui/css/layui.css">
    <link rel="stylesheet" href="/u2/Public/Admin/css/global.css">
    <link rel="stylesheet" href="/u2/Public/Admin/css/page.css">
    <script type="text/javascript" src="/u2/Public/Admin/layui/layui.js"></script>
</head>

<body>
    <div class="layui-tab layui-tab-brief main-tab-container">
        <ul class="layui-tab-title main-tab-title">
            <a href="swaplist.html">
                <li class="layui-this">旧物交换信息列表</li>
            </a>
            <a href="swapadd.html">
                <li>旧物交换信息添加</li>
            </a>

            <div class="main-tab-item">旧物交换信息管理</div>
        </ul>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <form class="layui-form">

                    <table class="list-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>旧物交换信息标题</th>
                                <th>发布者</th>
                                <th>时间</th>
                                <th>状态</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                                    <td><?php echo ($vo["id"]); ?></td>
                                    <td><?php echo ($vo["title"]); ?></td>
                                    <td><?php echo ($vo["author"]); ?></td>
                                    <td><?php echo ($vo["rtime"]); ?></td>
                                    <td><?php echo ($vo["type"]); ?></td>

                                    <td>
                                        <a href="<?php echo U('admin/swapedit',array('id'=>$vo['id']));?>" class="layui-btn layui-btn-small layui-btn-normal"><i class="layui-icon">&#xe642;</i></a>
                                        <a onclick="swap_delete(this)" id="<?php echo ($vo["id"]); ?>" class="layui-btn layui-btn-small layui-btn-danger"><i class="layui-icon">&#xe640;</i></a>

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
    <script src="/u2/Public/admin/js/jquery-1.11.1.min.js"></script>
    <script>
        function job_delete(obj) {
            var id = obj.id;
            //alert(id);
            $.ajax({
                url: '<?php echo U("student/swap_delete");?>',
                type: "post",
                dataType: 'json',
                data: {
                    'id': id
                },
                success: function(data) {
                    // alert(data.msg);
                    if (data.code == 200) {
                        alert(data.msg);
                        window.location = 'joblist.html'
                    } else {
                        alert(data.msg);
                    }
                }
            })
        }
    </script>
    <script type="text/javascript">
        layui.use(['element', 'layer', 'form'], function() {
            var element = layui.element(),
                jq = layui.jquery,
                form = layui.form(),
                laypage = layui.laypage;

            //图片预览
            jq('.list-table td .thumb').hover(function() {
                jq(this).append('<img class="thumb-show" src="' + jq(this).attr('thumb') + '" >');
            }, function() {
                jq(this).find('img').remove();
            });
            //链接预览
            jq('.list-table td .link').hover(function() {
                var link = jq(this).attr('href');
                layer.tips(link, this, {
                    tips: [2, '#009688'],
                    time: false
                });
            }, function() {
                layer.closeAll('tips');
            });

            //监听提交
            form.on('submit(sort)', function(data) {
                loading = layer.load(2, {
                    shade: [0.2, '#000'] //0.2透明度的白色背景
                });
                var param = data.field;
                jq.post('', param, function(data) {
                    if (data.code == 200) {
                        layer.close(loading);
                        layer.msg(data.msg, {
                            icon: 1,
                            time: 1000
                        }, function() {
                            location.reload(); //do something
                        });
                    } else {
                        layer.close(loading);
                        layer.msg(data.msg, {
                            icon: 2,
                            anim: 6,
                            time: 1000
                        });
                    }
                });
                return false;
            });

            //ajax删除
            jq('.del_btn').click(function() {
                var name = jq(this).attr('category-name');
                var id = jq(this).attr('category-id');
                layer.confirm('确定删除【' + name + '】?', function(index) {
                    loading = layer.load(2, {
                        shade: [0.2, '#000'] //0.2透明度的白色背景
                    });
                    jq.post('', {
                        'id': id
                    }, function(data) {
                        if (data.code == 200) {
                            layer.close(loading);
                            layer.msg(data.msg, {
                                icon: 1,
                                time: 1000
                            }, function() {
                                location.reload(); //do something
                            });
                        } else {
                            layer.close(loading);
                            layer.msg(data.msg, {
                                icon: 2,
                                anim: 6,
                                time: 1000
                            });
                        }
                    });
                });

            });

        })
    </script>

</body>

</html>