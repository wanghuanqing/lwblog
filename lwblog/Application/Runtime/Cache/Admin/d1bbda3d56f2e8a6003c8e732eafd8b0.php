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
            /* width: 70px;height: 35px; */
            width: 70px;
            height: 30px;
            margin-right: 20px;
            background: #10a8ee;
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
                    <h2><a href="aboutauthor.html">关于作者</a></h2>
                </li>
            </ul>
            <div class="layui-tab-content">
                <form class="layui-form">
                    <input type="text" id="id" value="<?php echo ($data["id"]); ?>" hidden>
                    <div class="layui-form-item">
                        <label class="layui-form-label">个人信息</label>
                        <div class="layui-input-block">
                            <textarea name="infomation" id="infomation" lay-verify="layedit" autocomplete="off" class="layui-textarea"><?php echo ($data["infomation"]); ?></textarea>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">个人简介</label>
                        <div class="layui-input-block">
                            <textarea name="content" id="introduction" lay-verify="layedit" autocomplete="off" class="layui-textarea"><?php echo ($data["introduction"]); ?></textarea>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn" lay-submit="" lay-filter="feedback_edit" id="author_edit" type="button">修改</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script src="/lwblog/Public/admin/js/jquery-1.11.1.min.js"></script>
    <script>
        $(function() {

            // alert('发布兼职');
            $('#author_edit').click(function() {
                var infomation = $('#infomation').val();
                var introduction = $('#introduction').val();
                var id = $('#id').val();
                // alert(infomation+introduction+id); 
                $.ajax({
                    url: '<?php echo U("admin/author_edit");?>',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        'introduction': introduction,
                        'infomation': infomation,
                        'id': id
                    },
                    success: function(data) {
                        if (data.code == 200) {
                            alert(data.msg);
                            location = 'aboutauthor.html';
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

</body>

</html>