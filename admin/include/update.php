<?php
	$item=$_GET["item"];
    $id=$_GET["id"];
    require "util/connUtil.php";
    switch ($item) {
        case 'updatexw':
            $title = $_REQUEST["title"];
		    $img = $_FILES["img"]["name"];
		    $content = $_REQUEST["content"];		    
		    if($img==null){
                $sql = "update xinwen set title = '".$title."' , content = '".$content."' ,createtime = now() where id = ".$id."";                
            }else{
                $sql = "update xinwen set title = '".$title."' , img = '".$img."' , content = '".$content."' ,createtime = now() where id = ".$id.""; 
            } 
		    mysqli_query($conn,$sql);
		    header("Location: listxw.php");
            break;
        case 'updatejg':
            $title = $_REQUEST["title"];
		    $img = $_FILES["img"]["name"];
		    $content = $_REQUEST["content"];
            if($img==null){
		        $sql = "update jigou set title = '".$title."' , content = '".$content."' ,createtime = now() where id = ".$id."";                
            }else{
                $sql = "update jigou set title = '".$title."' , img = '".$img."' , content = '".$content."' ,createtime = now() where id = ".$id.""; 
            }           
		    mysqli_query($conn,$sql);
		    header("Location: listjg.php");
            break;
        case 'updatehd':
            $title = $_REQUEST["title"];
            $content = $_REQUEST["content"];
            $sql = "update huodong set title = '".$title."', content = '".$content."' ,createtime = now() where id = ".$id."";
            mysqli_query($conn,$sql);
            header("Location: listhd.php");
            break;
        default:
            echo "更新失败！";
            break;
    }
    mysqli_close($conn);
?>