<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加兼职信息</title>
</head>

<body>
    <form id="form" action="<?php echo U('index/add_job');?>" method="post">
        <div class="item">
            <label>标题:</label>
            <input type="text" name="title" id="title" placeholder="请输入兼职标题" />
        </div>
        <div class="item">
            <label class="layui-form-label">兼职内容</label>
            <div class="layui-input-block">
                <textarea id="content" name="content" placeholder="请输入兼职内容" class="layui-textarea"></textarea>
            </div>
        </div>
        <div class="item">
            <button id="btn" type="button">发布</button>
        </div>
    </form>
</body>
<script src="/uu/Public/admin/js/jquery-1.11.1.min.js"></script>
<script>
    $(function() {
        // alert('发布兼职');
        $('#btn').click(function() {
            var title = $('#title').val();
            var content = $('#content').val();
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
                    } else {
                        alert(data.msg);
                    }
                }
            })
        })

    })
</script>

</html>