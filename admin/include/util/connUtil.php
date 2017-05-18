<?php
	define("HOST","127.0.0.1");
	define("USERNAME", "root");
	define("PASSWORD","");
	define("DBNAME", "zgc");
	define("MYSQL_CHARSET","utf8");

	$conn = mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);

	if(!$conn){
       die("数据库连接失败:".mysqli_connect_error());
	}

	//需要进行字符集的设置
	//使用 mysql 中  set names 字符集；命令来实现
	//  字符集 需要和 php程序字符集一致
	mysqli_query($conn,"set names ".MYSQL_CHARSET);