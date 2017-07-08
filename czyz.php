<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>充值验证页面</title>
</head>

<body>
<?php
	header("content-type:text/html;charset=utf-8");

	//开启session
	session_start();
	
	
	
	//接收表单传递的用户名和密码
	$cz=$_POST['cz'];
	$rq=date("Y-m-d");
 
	  
			//通过php连接到mysql数据库
			$conn=mysql_connect("dev.dxdc.net","a0915222653","57558434");
			
			//选择数据库
			mysql_select_db("a0915222653",$conn);

			//设置客户端和连接字符集
			mysql_query("set names utf8");
              
			 //通过Php对余额进行update操作
			 $exec="update tb_four set sy=sy+$cz, rq='$rq'";  
                           mysql_query($exec,$conn);        
                          
			//通过php对购物单进行insert操作
	 	 
			   
           
	echo "<script>alert('充值成功，请查询');</script>";
		echo"<script>location='ye.php'</script>"; 
			  
		echo mysql_error();
	
?>
</body>
</html>