<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!--<link href="../CSS/style.css" rel="stylesheet">-->
<title>通过SESSION判断用户的操作权限</title>
<style type="text/css">
body{background-image:url(images/03.jpg);font-size:28px;
background-repeat:no-repeat; background-size:cover;
z-index:-1; color:red;}
h1{margin-top: 300px;}
a{ text-decoration: none; font-weight: bold;}
div{margin-left: 300px; font-size:30px; color:red;}
</style>
</head>
<body >
<?php
session_start();
$_SESSION["user"]=$_POST["user"];
$_SESSION["pwd"]=$_POST["pwd"];
?>
<TABLE width="1000" height="458" align="center" cellPadding=0 cellSpacing=0> 
    <TR> 
      <TD height="498" valign="baseline" style="BACKGROUND-IMAGE: url(images/bg.jpg); VERTICAL-ALIGN: middle; HEIGHT: 50px; TEXT-ALIGN: center"><TABLE width="856" height="419" cellPadding=0 cellSpacing=0 >
          <TR>
            <TD height="176" colspan="6" 
          style="VERTICAL-ALIGN: text-top; WIDTH: 80px; HEIGHT: 115px; TEXT-ALIGN: right"></TD>
          </TR>
          <TR>
            <TD height="214" align="center" valign="top">
              <TABLE  align="center" cellPadding=0 cellSpacing=0 >
                  <TR align="center" valign="middle">
                    
                    <TD width="200"><a href="grxx.php">个人信息</a></TD>
                    <TD width="200">|&nbsp;<a href="zcx.php" >查询</a></TD>
                    <TD width="200">|&nbsp;<a href="gw.php" >购物</a></TD>
                    <TD width="200">|&nbsp;<a href="zth.php">退货</a></TD>
               
                    
                </TR>
            </TABLE>             
</TD>
          </TR>
      </TABLE>
</TD>
    </TR> 
</TABLE>
<div>
 <a href="tc.php">退出此页面</a>
</div> 
</body>
</html>
