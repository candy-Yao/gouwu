<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加验证页面</title>
</head>

<body>
<?php
	header("content-type:text/html;charset=utf-8");

	//开启session
	session_start();
	
	
	
	//接收表单传递的用户名和密码
	$name=$_POST['name'];
	$tel=$_POST['tel'];
	$add=$_POST['add'];
 
	  
			//通过php连接到mysql数据库
			$conn=mysql_connect("dev.dxdc.net","a0915222653","57558434");
			
			//选择数据库
			mysql_select_db("a0915222653",$conn);

			//设置客户端和连接字符集
			mysql_query("set names utf8");
              
			 //通过Php进行update操作
			 $exec="insert into tb_one(name,tel,add)                                                     values('{$name}','{$tel}','{$add}')";  
                           mysql_query($exec,$conn);        
                          
			  
	 	 
			   
           
	echo "<script>alert('添加成功，请查询');</script>";
		echo"<script>location='shrxx.php'</script>"; 
			  
		echo mysql_error();
	
?>
</body>
</html>