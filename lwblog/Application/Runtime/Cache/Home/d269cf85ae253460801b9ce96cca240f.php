<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        
        <div class="search_goods l mt10 mb20">
                <div class="mb5 l search">
                  <h2 class="title">搜点什么呢</h2>
                  <input type="text" name="search" id="search_box"/>
                </div>
                <a href="javascript:goods_search.submit();" id="submit_from" class="button orange" style="width:34px;height:12px;font-size:13px;color:#000;margin-left:30px;">搜 索</a>
             </div>

             <script type="text/javascript">
             
                  $("#submit_from").click(function(){
                  var $search=$('#search_box').val();
                   
                        $.ajax({
                            type: "POST",
                            url:"home/search",
                            data:{
                                search:search
                            },
                            dataType: "json",
                            success: function (data) {
                    if (data.status == 1) {
                            alert('00');
                            // var html='<table class="striped" id="senfe"><thead class="striped-top"><tr><th>商品编号</th><th class="right">商品名字</th><th class="right">添加日期</th><th class="right">商品品牌</th><th class="right">商品价格</th></tr></thead><tbody>';
                            // /*<th class="right">编辑</th><th class="right">删除</th>*/
                            //         $.each(data.data,function(no,items){    
                            //         html+='<tr><td>'+items.goods_id+'</td><td class="right"><a href="/Goods/show/id/'+items.goods_id+'">'+items.goods_name+'</a></td><td class="right">'+items.add_time+'</td><td class="right">'+items.brand+'</td><td class="right">'+items.price+'</td></tr>';
                            //         /*<td class="right"><a href="/Goods/edit/id/<?php echo ($vo["goods_id"]); ?>">编辑</a></td><td class="right"><a href="#">删除</a></td>*/
                
                            //         });
                            //         html+="</tbody></table>";    
                            //          $(".goods-list").html(' ').html(html);
                                   // alert(html);
                    }
                    else if (data.status == 0) {
                    //     $(".show_message").show();
                    //     $(".show_message").html(data.info);
                    //                 $(".show_message").fadeOut(3000);
                       alert('111');
                
                    //     return false;
                    }
                    }
                         });
                    
                  });
                </script>
</body>
</html>