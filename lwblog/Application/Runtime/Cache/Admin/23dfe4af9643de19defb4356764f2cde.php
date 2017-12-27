<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>校园信息发布后台管理中心</title>
    <link rel="stylesheet" href="/blog2/Public/Admin/layui/css/layui.css">
    <link rel="stylesheet" href="/blog2/Public/Admin/css/global.css">
    <script type="text/javascript" src="/blog2/Public/Admin/layui/layui.js"></script>

     <!-- 样式文件 -->
     <link href="/blog2/Public/umedit/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
     <script type="text/javascript" src="/blog2/Public/umedit/third-party/jquery.min.js"></script>
     <script type="text/javascript" src="/blog2/Public/umedit/third-party/template.min.js"></script>
     <script type="text/javascript" charset="utf-8" src="/blog2/Public/umedit/umeditor.config.js"></script>
     <script type="text/javascript" charset="utf-8" src="/blog2/Public/umedit/umeditor.min.js"></script>
     <script type="text/javascript" src="/blog2/Public/umedit/lang/zh-cn/zh-cn.js"></script>
</head>

<body>
    <div class="layui-tab layui-tab-brief main-tab-container">
        <ul class="layui-tab-title main-tab-title">
            <a href="swaplist.html">
                <li>旧物交换信息列表</li>
            </a>

            <li class="layui-this">旧物交换信息添加</li>

            <div class="main-tab-item">旧物交换信息管理</div>
        </ul>
        <div class="layui-tab-content">
            <form class="layui-form" id="form" action="<?php echo U('admin/swap_add');?>" method="post">
                <div class="layui-tab-item layui-show">
                    <input type="hidden" name="id" value="">
                    <div class="layui-form-item">
                        <label class="layui-form-label">旧物交换标题</label>
                        <div class="layui-input-inline input-custom-width">
                            <input type="text" id="title" name="title" value="" lay-verify="required" autocomplete="off" placeholder="请输入标题" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">类别</label>
                        <div class="layui-input-inline input-custom-width">
                            <select name="model_id" lay-verify="required" id="type">
                                <option value="">请选择</option>
                                <option value="胡思乱想">胡思乱想</option>
                                <option value="细语微言">细语微言</option>
                                <option value="后端崛起">后端崛起</option>
                                <option value="前端入坑">前端入坑</option>
                            </select>
                        </div>
                        <div class="layui-form-mid layui-word-aux"></div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">简介</label>
                    <div class="layui-input-block">
                        <textarea name="" id="desc" cols="218" rows="10"></textarea>
                    </div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">内容</label>
                        <div class="layui-input-block">
                            <textarea name="content" id="content" lay-verify="layedit" autocomplete="off" class="layui-textarea" id="content"></textarea>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn" id="btn" type="button" lay-submit="" lay-filter="feedback_edit">立即添加</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- <script src="/blog2/Public/admin/js/jquery-1.11.1.min.js"></script> -->
    <script>
        $(function() {
            // alert('发布兼职');
            $('#btn').click(function() {
                var title = $('#title').val();
                var desc = $('#desc').val();
                var type = $("select[id='type']").val();
                var content = UM.getEditor('content').getContent();
                //alert(title + content);
                $.ajax({
                    url: $('#form').attr('action'),
                    type: 'post',
                    dataType: 'json',
                    data: {
                        'title': title,
                        'content': content,
                        'desc':desc,
                        'type':type
                    },
                    success: function(data) {
                        if (data.code == 200) {
                            alert(data.msg);
                            location = 'swaplist.html';
                        } else {
                            alert(data.msg);
                        }
                    }
                })
            })

        })
    </script>
    <script type="text/javascript">
        layui.use(['element', 'form', 'upload', 'layedit', 'laydate'], function() {
            var element = layui.element(),
                form = layui.form(),
                layedit = layui.layedit,
                laydate = layui.laydate,
                jq = layui.jquery;
            form.verify({
                //编辑器数据同步
                layedit: function(value) {
                    layedit.sync(content);
                    // layedit.sync(reply);
                }
            });


            //监听提交
            form.on('submit(feedback_edit)', function(data) {
                return false;
            });

        })
    </script>
    <script type="text/javascript">
        //实例化编辑器
        var um = UM.getEditor('content');
        function getContent() {
        var arr = [];
        arr.push(UM.getEditor('content').getContent());
        }  
    </script>
</body>

</html>