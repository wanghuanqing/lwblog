<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div id="search1">
        <form id="form" action="<?php echo U('home/search');?>" method="post">
            <span>	
            <input name="search" type="text" id="search_content">
            <button type="submit"  id="search">搜索</button>
        </span>
        </form>
    </div>

    <script src="/blog2/Public/admin/js/jquery-1.11.1.min.js"></script>

</body>

</html>