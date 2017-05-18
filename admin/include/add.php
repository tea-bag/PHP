<?php
    // 图片上传
    function addImg(){
        define('MAX_SIZE',200000);
        if($_FILES["img"]["error"]>0){
            echo "文件上传失败";
        }else{
            if($_FILES["img"]["type"]!='image/jpeg' && $_FILES["img"]["type"]!="image/jpg"&&$_FILES["img"]["type"]!="image/png"&&$_FILES["img"]["type"]!="image/gif"){
                echo "<script>alert('图片格式不正确！请重新上传！');history.back();</script>";
            }else{
                if($_FILES["img"]["size"]>MAX_SIZE){
                    echo "<script>alert('文件大小超出范围！');history.back();</script>";
                }else{
                    if(move_uploaded_file($_FILES["img"]["tmp_name"],"/Users/appleuser/phpwork/Project_ljx/admin/uploads/".$_FILES["img"]["name"]))
                    echo "文件上传成功";     
                }
            }
        }        
    }
    // 数据库添加
	$item=$_GET["item"];
    require "util/connUtil.php";
    switch ($item) {
        case 'addxw':
            addImg();
            $title = $_REQUEST["title"];
            $img = $_FILES["img"]["name"];
            $content = $_REQUEST["content"];
            $sql = "insert into xinwen values(null,'".$title."','".$img."','".$content."',now())";
            mysqli_query($conn,$sql);
            mysqli_close($conn);
            header("Location: listxw.php");
            break;
        case 'addjg':
            addImg();
            $title = $_REQUEST["title"];
            $img = $_FILES["img"]["name"];
            $content = $_REQUEST["content"];
            $sql = "insert into jigou values(null,'".$title."','".$img."','".$content."',now())";
            mysqli_query($conn,$sql);
            mysqli_close($conn);
            header("Location: listjg.php");
            break;
        case 'addhd':
            $title = $_REQUEST["title"];
            $img = $_FILES["img"]["name"];
            $content = $_REQUEST["content"];
            $sql = "insert into huodong values(null,'".$title."','".$content."',now())";
            mysqli_query($conn,$sql);
            mysqli_close($conn);
            header("Location: listhd.php");
            break;
        default:
            echo "添加失败！";
            break;
    }
?>