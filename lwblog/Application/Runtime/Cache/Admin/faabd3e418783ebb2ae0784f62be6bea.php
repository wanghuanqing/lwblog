<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>老王博客-后台管理中心</title>
    <link rel="stylesheet" href="/blog2/Public/Admin/layui/css/layui.css">
    <link rel="stylesheet" href="/blog2/Public/Admin/css/global.css">
    <link rel="stylesheet" href="/blog2/Public/Admin/css/page.css">
    <script type="text/javascript" src="/blog2/Public/Admin/layui/layui.js"></script>
    <style>
    #classify a{
        display: block;
        float: left;
        width: 85px;
        height: 40px;
    }
    h2{
        color: #009688;
    }
    #add{
    display: block;
    /* width: 70px;height: 35px; */
    width: 70px;height: 30px;
    margin-right: 20px;
    background: #009688;
    margin-left: 90%;
    text-align: center;padding-top: 10px;
    
}
    </style>
</head>

<body>
    <div class="layui-tab layui-tab-brief main-tab-container">
                  <div class="layui-tab" style="padding:10px;width:100%;">
                        <ul class="layui-tab-title" style="width:300px;  margin:0px auto;">
                          <li class="layui-this"><h2>关于博客</h2></li>
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
                                                            <th>内容</th>
                                                            <th>时间</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                                                                <td><?php echo ($vo["id"]); ?></td>
                                                                <td><?php echo ($vo["title"]); ?></td>
                                                                <td class="detail-body photos" style="margin-bottom: 20px;">
                                                                        <?php echo (htmlspecialchars_decode($vo["content"])); ?>
                                                                </td>
                                                                <!-- <td><?php echo ($vo["content"]); ?></td> -->
                                                                <td><?php echo ($vo["date"]); ?></td>                                    
                                                                
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
    <script src="/blog2/Public/admin/js/jquery-1.11.1.min.js"></script>
    <script>
            $(function() {
    
                // alert('发布兼职');
                $('#author_edit').click(function() {
                    var infomation = $('#infomation').val();
                    var introduction = $('#introduction').val();  
                    $.ajax({
                        url: '<?php echo U("admin/author_edit");?>',
                        type: 'post',
                        dataType: 'json',
                        data: {
                            'introduction': introduction,
                            'infomation': infomation
                        },
                        success: function(data) {
                            if (data.code == 200) {
                                alert(data.msg);
                            } else {
                                alert(data.msg);
                            }
                        },
                        error: function(data) {
                            console.log(data);
                        }
                    })
                })
    
            })
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