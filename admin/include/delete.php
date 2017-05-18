<?php
	$item=$_GET["item"];
	$id=$_GET["id"];
	$img=$_GET["img"];
	echo "item的值：".$item;
	echo "id的值：".$id;
	echo "img的值：".$img;
	require "util/connUtil.php";
	switch ($item) {
		case 'deletexw':
			$sql = "delete from xinwen where id = ".$id."";
		    // echo "sql语句".$sql."<br>";
		    mysqli_query($conn,$sql);
		    unlink ("../uploads/{$img}");
		    echo "删除图片成功";
		    header("Location: listxw.php");
			break;
		case 'deletejg':
			$sql = "delete from jigou where id = ".$id."";
		    // echo "sql语句".$sql."<br>";
		    mysqli_query($conn,$sql);
		    unlink ("../uploads/{$img}");
		    header("Location: listjg.php");
			break;
		case 'deletehd':
			$sql = "delete from huodong where id = ".$id."";
		    // echo "sql语句".$sql."<br>";
		    mysqli_query($conn,$sql);
		    header("Location: listhd.php");
			break;		
		default:
			echo "删除失败！";
			break;
	}
    mysqli_close($conn);
?>