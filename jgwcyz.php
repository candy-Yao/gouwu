 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>加入购物车验证验证页面</title>
</head>

<body>
<?php
	header("content-type:text/html;charset=utf-8");

	//开启session
	session_start();
	
	
	
	//接收表单传递的用户名和密码
	$mc=$_POST['mc'];
	$sl=$_POST['sl'];
	$price=$_POST['price'];
	$size=$_POST['size'];
	
	if($mc==""||$s1==""||$price==""||$size=""){
		echo"<script>alert('输入错误，请重新输入');</script>";
		echo"<script>location='jgwc.php'</script>";
	}
	else{
	   
			//通过php连接到mysql数据库
			$conn=mysql_connect("dev.dxdc.net","a0915222653","57558434");
			
			//选择数据库
			mysql_select_db("a0915222653",$conn);

			//设置客户端和连接字符集
			mysql_query("set names utf8");

			//通过php进行插入操作
			$query=" insert into tb_six(mc,sl,price,size) values('{$mc}','{$sl}','{$price}','{$size}') ";
		    $num=mysql_query($query,$conn);	
 			          mysql_close($conn);
			
	echo "<script>alert('加入购物车成功，请查询');</script>";
		echo"<script>location='gwc.php'</script>";

	}
	
		
						  
		echo mysql_error();
	
?>
</body>
</html>