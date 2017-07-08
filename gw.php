
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!--<link href="../CSS/style.css" rel="stylesheet">-->
<title>购物页面</title>
<style type="text/css">
<!--
body{background-image:url(images/05.jpg);font-size:20px;
background-repeat:no-repeat; background-size:cover;
z-index:-1; color:red;}
.style1 {
	color: #FF0000
}
a{
padding:10px;
text-decoration:none;
display:inline-block;}
a:link,a:visited{
	background-color: #74F39A;
	color:#000;
	}
a:hover{
	background-color: #FC500D;
	color:#000;
	}
	h1{ margin-top:130px; font-size:40px;}
-->
</style>
</head>
<body>
<?php
session_start();
$_SESSION["user"]=$_POST["user"];
$_SESSION["pwd"]=$_POST["pwd"];
?>
<h1 align="center"><strong><font color="red">欢迎来到天睐购物商城</font></strong></h1>
<hr />
<TABLE width="856" height="498" align="center" cellPadding=0 cellSpacing=0>
  <TR>
    <TD><TABLE width="856" height="480" cellPadding=0 cellSpacing=0 >
        <TR>
          <TD height="176" colspan="6" 
          style="VERTICAL-ALIGN: text-top; WIDTH: 80px;HEIGHT: 50px; TEXT-ALIGN: right"></TD>
        </TR>
        <TR>
          <TD height="214" align="center" valign="top"><TABLE  align="center" cellPadding=0 cellSpacing=40 >
              <TR align="center" valign="middle">
                <TD width="90"><a href="gm.php">直接购买</a></TD>
                <TD width="100">|&nbsp;<a href="jgwc.php" >加入购物车</a></TD>
                <TD width="90">|&nbsp;<a href="wz.php">返回</a></TD>
              </TR>
              <tr height="220">
                <td><div float="left" style="position:relative;top:50"><img src="images/1.jpg" width="200" height="300"/> 　　                  
                    <p><p><a href="gm.php" class="a" >购买</a>&nbsp;&nbsp; <a href="jgwc.php" class="a" >加入购物车</a> 
                  </div></td>
                <td><div float="left" style="position:relative;top:50"><img src="images/2.jpg"  width="200" height="300"/> 　　
                    
                        <p><p><a href="gm.php" class="a" >购买</a>&nbsp;&nbsp; <a href="jgwc.php" class="a" >加入购物车</a> 
                  </div></td>
                <td><div float="left" style="position:relative;top:50"><img src="images/3.jpg"  width="200" height="300"/> 　　
                    
                        <p><p><a href="gm.php" class="a" >购买</a>&nbsp;&nbsp; <a href="jgwc.php" class="a" >加入购物车</a> 
                  </div></td>
              </tr>
            </TABLE></TD>
        </TR>
      </TABLE></TD>
  </TR>
</TABLE>
</body>
</html>