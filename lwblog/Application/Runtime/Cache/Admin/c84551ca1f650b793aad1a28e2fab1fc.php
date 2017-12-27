<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>老张博客前台模版</title>
    <link rel="stylesheet" href="/lwblog/Public/Admin/layui/css/layui.css">
    <link href="/lwblog/Public/umedit/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/lwblog/Public/umedit/third-party/jquery.min.js"></script>
    <script type="text/javascript" src="/lwblog/Public/umedit/third-party/template.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/lwblog/Public/umedit/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/lwblog/Public/umedit/umeditor.min.js"></script>
    <script type="text/javascript" src="/lwblog/Public/umedit/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript" src="/lwblog/Public/Admin/layui/layui.js"></script>

    <STYle>
        .axis_container {
            position: relative;
            min-height: 600px;
        }
        
        .axis_container .y-line {
            position: absolute;
            left: 150px;
            top: 10px;
            height: 100%;
            width: 2px;
            background: #009688;
            margin-left: 20%
        }
        
        .axis_container h1 {
            margin-left: 11%;
            text-align: left;
            background: #fff;
            padding-left: 0;
            position: relative;
            left: 1px;
            top: 1px;
            font-size: 24px;
            color: #009688;
            line-height: 50px;
        }
        
        .axis_container h1 span {
            float: left;
            width: 36px;
            text-align: center;
            margin-left: 15%;
        }
        
        .axis_container h1 span i {
            font-size: 28px;
            margin-left: 15%;
        }
        
        .axis_container li {
            position: relative;
            z-index: 5;
            margin: 30px 0;
            line-height: 28px;
            margin-left: 15%;
        }
        
        .axis_container li .date {
            float: left;
            width: 140px;
            text-align: right;
            margin-left: 4%;
        }
        
        .axis_container li .icon {
            float: left;
            width: 50px;
            height: 25px;
            text-align: center;
            background: #fff;
            position: relative;
            left: 6px;
            top: 1px;
            color: #009688;
        }
        
        .axis_container li p {
            position: relative;
            left: 10px;
        }
        
        .layui-icon {
            font-family: layui-icon!important;
            font-size: 25px;
            font-style: normal;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        
        .axis_container li .diary {
            text-align: left;
            padding-left: 180px;
            margin-left: 5%;
        }
        
        #add {
            display: block;
            /* width: 70px;height: 35px; */
            width: 70px;
            height: 30px;
            margin-right: 20px;
            background: #28b0ef;
            margin-left: 90%;
            text-align: center;
            padding-top: 10px;
            color: #fff;
        }
        
        .layui-this {
            color: green;
        }
    </STYle>
</head>

<body>
    <ul class="layui-tab-title main-tab-title">
        <a href="log.html">
            <li class="layui-this">个人日志</li>
        </a>
    </ul>
    <a id="add" href="logadd.html">添加</a>

    <div class="axis_container">
        <div class="y-line"></div>
        <h1><span><i class="layui-icon">&#xe642;</i></span>个人日记</h1>
        <ul>
            <?php if(is_array($list)): foreach($list as $key=>$vo): ?><!-- <input type="text" id="id"> -->
                <li>
                    <div class="date1" style="
                        margin-top: 0px;
                        position: absolute;
                    ">
                        <a onclick="log_delete(this)" id="<?php echo ($vo["id"]); ?>" class="layui-btn layui-btn-small layui-btn-danger"><i class="layui-icon">&#xe640;</i></a>

                    </div>

                    <div class="date"><?php echo ($vo["date"]); ?></div>
                    <div class="icon"><i class="layui-icon">&#xe643;</i></div>
                    <div class="detail-body photos" style="margin-bottom: 20px; width:80%">
                        <p> <?php echo (htmlspecialchars_decode($vo["content"])); ?></p>

                    </div>

                    <div class="clear"></div>
                </li><?php endforeach; endif; ?>

        </ul>
        <div class="clear"></div>
    </div>

    <script src="/lwblog/Public/admin/js/jquery-1.11.1.min.js"></script>
    <script>
        function log_delete(obj) {
            var id = obj.id;
            //alert(id);
            $.ajax({
                url: '<?php echo U("admin/log_delete");?>',
                type: "post",
                dataType: 'json',
                data: {
                    'id': id
                },
                success: function(data) {
                    // alert(data.msg);
                    if (data.code == 200) {
                        alert(data.msg);
                        window.location = 'log.html'
                    } else {
                        alert(data.msg);
                    }
                }
            })
        }
    </script>
</body>

</html>