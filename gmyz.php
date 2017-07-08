<title>购买验证页面</title>
</head><body>
<?php
	header("content-type:text/html;charset=utf-8");

	//开启session
	session_start();
	
	
	
	//接收表单传递的用户名和密码
	$mc=$_POST['mc'];
	$sl=$_POST['sl'];
	$price=$_POST['price'];
	$size=$_POST['size'];
	
	
	$rq=date("Y-m-d");
 
	  
			//通过php连接到mysql数据库
			$conn=mysql_connect("dev.dedc.net","a0915222653","57558434");
			
			//选择数据库
			mysql_select_db("a0915222653",$conn);

			//设置客户端和连接字符集
			mysql_query("set names utf8");
              
			 //通过Php对余额进行update操作
			 $exec="update tb_four set sy=sy-$price, rq='$rq'";  
             $result=mysql_query($exec,$conn);
			 
                  $query1="select sy from tb_four" ;
                      $test=mysql_query($query1,$conn);  
					  $test1=mysql_result($test,0);
                  if($test1<0){
	            echo "<script>alert('余额不足，请充值');</script>";
		             echo"<script>location='ye.php'</script>"; 
	                     }         
                          
			//通过php对购物单进行insert操作
	
			$query=" insert into tb_five(rq,mc,jg,sl )
			 values('{$rq}','{$mc}','{$price}','{$sl}') ";
		                  mysql_query($query,$conn);	
			 	
                         //通过Php对ck进行update操作
			 	$exec1="update tb_two set sl=sl-$sl where mc='$mc'";  
             mysql_query($exec1,$conn);  
	echo "<script>alert('购买成功，请查询');</script>";
		echo"<script>location='gwd.php'</script>"; 

	
	
		
						  
		echo mysql_error();
	
?>
</body>
</html>