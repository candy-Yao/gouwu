<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登陆验证</title>
</head>

<body>
<?php
	header("content-type:text/html;charset=utf-8");
	//开启session
	session_start();
	
	//接收表单的用户名和密码
	$user=$_POST['user'];
	$pwd=$_POST['pwd'];
	
	$conn=mysql_connect("dev.dxdc.net","a0915222653","57558434");
	
			
			//选择数据库
			mysql_select_db("a0915222653",$conn);

			//设置客户端和连接字符集
			mysql_query("set names utf8");

	//设置客户端和连接字符集
			$query="select * from tb_three where name='$user'";
	
	$result=mysql_query($query);
	$numrows=mysql_num_rows($result);
	if($numrows==0)
	{
		echo "<script>alert('该用户没有注册')</script>";
		echo "<script>location='zc.php'</script>";
	}
	$mysql=mysql_query("select * from tb_three where name='$user' and id='$pwd'");
	$row = mysql_fetch_array($mysql);
if(is_array($row))
	{
		echo "<script>alert('登陆成功');</script>";
		echo "<script>location='wz.php'</script>";}
		else{
			echo "<script>alert('登陆失败,用户名或密码错误');</script>";
		echo "<script>location='dl.php'</script>";
			}

?>
	
</body>
</html>