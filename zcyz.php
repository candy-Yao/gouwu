<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>注册验证</title>
</head>

<body>
<?php

	//session开始
	session_start();
	
	//接收表单传递的用户名和密码
	$user=$_POST['user'];
	$pwd=$_POST['pwd'];
	
	 
		//将php链接数据库
		$conn=mysql_connect("dev.dxdc.net","a0915222653","57558434");	
		
		//选择数据库
		mysql_select_db("a0915222653",$conn);
		
		//设计客户端和连接字符
		mysql_query("set  names utf-8");
		
		//插入数据
		$sqlinsert="insert into tb_nine(name , id) values('{$user}','{$pwd}') ";
		
		//将信息添加到数据库
		mysql_query($sqlinsert);
		
		//关闭连接
		mysql_close($conn);
		echo "<script>alert('注册成功,请登录')</script>";
		echo "<script>location='dl.php'</script>";
	 
	

?>
</body>
</html>