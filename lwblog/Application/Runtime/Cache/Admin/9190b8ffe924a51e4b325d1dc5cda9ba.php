<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>校园信息发布后台管理中心</title>
    <link rel="stylesheet" href="/u2/Public/Admin/layui/css/layui.css">
    <link rel="stylesheet" href="/u2/Public/Admin/css/global.css">
    <script type="text/javascript" src="/u2/Public/Admin/layui/layui.js"></script>

    <!-- 样式文件 -->
    <link href="/u2/Public/umedit/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/u2/Public/umedit/third-party/jquery.min.js"></script>
    <script type="text/javascript" src="/u2/Public/umedit/third-party/template.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/u2/Public/umedit/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/u2/Public/umedit/umeditor.min.js"></script>
    <script type="text/javascript" src="/u2/Public/umedit/lang/zh-cn/zh-cn.js"></script>
</head>

<body>
    <div class="layui-tab layui-tab-brief main-tab-container">
        <ul class="layui-tab-title main-tab-title">
            <a href="joblist.html">
                <li>兼职信息列表</li>
            </a>

            <li class="layui-this">兼职信息添加</li>

            <div class="main-tab-item">兼职信息管理</div>
        </ul>
        <div class="layui-tab-content">
            <form class="layui-form" id="form" action="<?php echo U('student/job_add');?>" method="post">
                <div class="layui-tab-item layui-show">
                    <input type="hidden" name="id" value="">
                    <div class="layui-form-item">
                        <label class="layui-form-label">标题</label>
                        <div class="layui-input-inline input-custom-width">
                            <input type="text" id="title" name="title" value="" lay-verify="required" autocomplete="off" placeholder="请输入标题" class="layui-input">
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
    <!-- <script src="/u2/Public/admin/js/jquery-1.11.1.min.js"></script> -->
    <script>
        $(function() {
            // alert('发布兼职');
            $('#btn').click(function() {
                var title = $('#title').val();
                var content = UM.getEditor('content').getContent();
                //alert(title + content);
                $.ajax({
                    url: $('#form').attr('action'),
                    type: 'post',
                    dataType: 'json',
                    data: {
                        'title': title,
                        'content': content
                    },
                    success: function(data) {
                        if (data.code == 200) {
                            alert(data.msg);
                            location = 'joblist.html';
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

            // //创建一个编辑器
            // var content = layedit.build('content', {
            //     uploadImage: {
            //         url: '',
            //         type: 'post'
            //     },
            //     height: 200
            // });
            // //创建一个编辑器
            // var reply = layedit.build('reply', {
            //     uploadImage: {
            //         url: '',
            //         type: 'post'
            //     },
            //     height: 150
            // });
            //表单验证
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