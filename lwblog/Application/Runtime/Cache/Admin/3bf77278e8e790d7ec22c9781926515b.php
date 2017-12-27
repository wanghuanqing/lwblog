<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>校园信息发布后台管理中心</title>
    <link rel="stylesheet" href="/u2/Public/Admin/layui/css/layui.css">
    <link rel="stylesheet" href="/u2/Public/Admin/css/global.css">
    <script type="text/javascript" src="/u2/Public/Admin/layui/layui.js"></script>
    <link id="layuicss-skinlayercss" rel="stylesheet" href="http://blog.demo.lzcms.top/static/layui/css/modules/layer/default/layer.css?v=3.0.11110" media="all">
</head>

<body>
    <div class="layui-tab layui-tab-brief main-tab-container">
        <ul class="layui-tab-title main-tab-title">
            <div class="main-tab-item">信息修改</div>
        </ul>
        <div class="layui-tab-content">
            <form class="layui-form">
                <div class="layui-tab-item layui-show">
                    <input type="hidden" name="id" value="1">
                    <div class="layui-form-item"><label class="layui-form-label">用户名</label>
                        <div class="layui-input-inline input-custom-width"><input type="text" name="username" value="demo" lay-verify="username" autocomplete="off" placeholder="请输入用户名" class="layui-input"></div>
                    </div>
                    <div class="layui-form-item"><label class="layui-form-label">原密码</label>
                        <div class="layui-input-inline input-custom-width"><input type="password" name="password" value="" lay-verify="password" autocomplete="off" placeholder="请输密码" class="layui-input"></div>
                    </div>
                    <div class="layui-form-item"><label class="layui-form-label">新密码</label>
                        <div class="layui-input-inline input-custom-width"><input type="password" name="password" value="" lay-verify="password" autocomplete="off" placeholder="请输密码" class="layui-input"></div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn" lay-submit="" lay-filter="edit">修改</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        layui.use(['form', 'upload'], function() {
            var form = layui.form(),
                jq = layui.jquery;

            //图片上传
            layui.upload({
                url: '/admin/upload/upimage.html',
                elem: '#image',
                before: function(input) {
                    loading = layer.load(2, {
                        shade: [0.2, '#000'] //0.2透明度的白色背景
                    });
                },
                success: function(res) {
                    layer.close(loading);
                    jq('input[name=avatar]').val(res.path);
                    layer.msg(res.msg, {
                        icon: 1,
                        time: 1000
                    });
                }
            });
            //图片预览
            jq('input[name=avatar]').hover(function() {
                jq(this).after('<img class="input-img-show" src="' + jq(this).val() + '" >');
            }, function() {
                jq(this).next('img').remove();
            });

            //自定义验证规则
            form.verify({
                username: function(value) {
                    if (value.length < 4) {
                        return '用户名至少得4个字符啊';
                    }
                },
                password: [/(.+){6,12}$/, '密码必须6到12位']
            });

            //监听提交
            form.on('submit(edit)', function(data) {
                loading = layer.load(2, {
                    shade: [0.2, '#000'] //0.2透明度的白色背景
                });
                var param = data.field;
                jq.post('/admin/admin/edit.html', param, function(data) {
                    if (data.code == 200) {
                        layer.close(loading);
                        layer.msg(data.msg, {
                            icon: 1,
                            time: 1000
                        }, function() {
                            window.top.location.reload();
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
        });
    </script>

    <iframe id="layui-upload-iframe" class="layui-upload-iframe" name="layui-upload-iframe"></iframe></body>

</html>