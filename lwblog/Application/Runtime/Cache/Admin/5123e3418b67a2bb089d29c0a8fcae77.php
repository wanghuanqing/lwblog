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
            <li class="layui-this">兼职信息添加</li>

            <div class="main-tab-item">兼职信息管理</div>
        </ul>
        <div class="layui-tab-content">
            <form class="layui-form" id="form" action="<?php echo U('admin/log_add');?>" method="post">
                <div class="layui-tab-item layui-show">
                    <div class="layui-form-item">
                        <label class="layui-form-label">时间</label>
                        <div class="layui-input-inline input-custom-width">
                            <input type="text" name="date" id="date" value="<?php echo ($data["date"]); ?>" ay-verify="datetime" autocomplete="off" class="layui-input" onclick="layui.laydate({elem: this,istime: 1, format: 'YYYY-MM-DD hh:mm:ss' })">
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
                            <button class="layui-btn" id="btn" type="button" lay-filter="feedback_edit">立即添加</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(function() {
            //alert($_SESSION['uid']);
            $('#btn').click(function() {
                var date = $('#date').val();
                var content = UM.getEditor('content').getContent();

                // alert(title + content);
                $.ajax({
                    url: $('#form').attr('action'),
                    type: 'post',
                    dataType: 'json',
                    data: {
                        'date': date,
                        'content': content
                    },
                    success: function(data) {
                        if (data.code == 200) {
                            alert(data.msg);
                            location = 'log.html';
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