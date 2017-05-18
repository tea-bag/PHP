<?php
	$chk=$_GET["chk"];
	require "util/connUtil.php";
	switch ($chk) {
		// 驗證用戶名是否存在
		case 'chkName':
			$name = $_REQUEST["username"];
			$sql = "select name from admin";
		    $result=mysqli_query($conn,$sql);
		    if($result -> num_rows > 0){
				while ($user = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					if ($name==$user["name"]) {
						echo 'true';
						return;
					}
				}
				echo 'false';
				mysqli_close($conn);
				return;		
			}else{
				echo 'false';
			}
			mysqli_close($conn);
			break;
		// 驗證用戶名和密碼是否匹配
		case 'chkPwd':
			$name = $_REQUEST["username"];
			$pwd = $_REQUEST["password"];
			$sql = "select * from admin";
		    $result=mysqli_query($conn,$sql);
		    if($result -> num_rows > 0){
				while ($user = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					if ($name==$user["name"]&&$pwd==$user["password"]) {
						echo 'true';
						return;
					}
				}
				echo 'false';
				mysqli_close($conn);
				return;		
			}else{
				echo 'false';
			}
			mysqli_close($conn);
			break;
		// 驗證用戶名是否存在
		case 'chkRegName':
			$name = $_REQUEST["username"];
			$sql = "select name from admin";
		    $result=mysqli_query($conn,$sql);
		    if($result -> num_rows > 0){
				while ($user = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					if ($name==$user["name"]) {
						echo 'false';
						return;
					}
				}
				echo 'true';
				mysqli_close($conn);
				return;		
			}else{
				echo 'true';
			}
			mysqli_close($conn);
			break;
		// 註冊新用戶
		case 'regUser':
			$name = $_REQUEST["username"];
		    $pwd = $_REQUEST["password"];
		    $email = $_REQUEST["email"];
		    $sql = "insert into admin values(null,'".$name."','".$pwd."','".$email."')";
		    mysqli_query($conn,$sql);
			break;		
		default:
			echo '校验失败';
			break;
	}
?>