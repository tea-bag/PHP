<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="../css/pintuer.css">
<link rel="stylesheet" href="../css/admin.css">
<script src="../js/jquery.js"></script>

</head>
<body>

<form method="post" action="" id="listform">
    <div class="panel admin-panel">
        <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
        <div class="padding border-bottom">
            <ul class="search" style="padding-left:10px;">
                <li> <a class="button border-main icon-plus-square-o" href="addxw.html"> 添加内容</a> </li>
            </ul>
        </div>
        <div id="xinwen">
            
        </div>
    </div>
</form>
<script type="text/javascript">
//删除
    function del(id,img){
    	if(confirm("您确定要删除吗?")){
          window.location.href="delete.php?item=deletexw&id="+id+"&img="+img;
    	}
    }
    function gotopage(p){
        $.get("util/page.php",'item=back_xinwen&p='+p,function(msg){
            $('#xinwen').html(msg);
        });
    }
    gotopage(1);
</script>
</body>
</html>