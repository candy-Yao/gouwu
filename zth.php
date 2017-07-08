
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!--<link href="../CSS/style.css" rel="stylesheet">-->
<title>退货页面</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>
<body >
<?php
session_start();
$_SESSION["user"]=$_POST["user"];
$_SESSION["pwd"]=$_POST["pwd"];
?>
<TABLE width="856" height="498" align="center" cellPadding=0 cellSpacing=0> 
    <TR> 
      <TD height="258" valign="baseline" style="BACKGROUND-IMAGE: url(images/bg.jpg); VERTICAL-ALIGN: middle; HEIGHT: 50px; TEXT-ALIGN: center"><TABLE width="856" height="419" cellPadding=0 cellSpacing=0 >
          <TR>
            <TD height="176" colspan="6" 
          style="VERTICAL-ALIGN: text-top; WIDTH: 80px; HEIGHT: 115px; TEXT-ALIGN: right"></TD>
          </TR>
          <TR>
            <TD height="214" align="center" valign="top">
              <TABLE  align="center" cellPadding=0 cellSpacing=0 >
                  <TR align="center" valign="middle">
                    
                    <TD width="90"><a href="gwd.php">购物清单</a></TD>
            
                    <TD width="90">|&nbsp;<a href="thjd.php" >退货进度</a></TD>
                  
                     <TD width="90">|&nbsp;<a href="wz.php">返回</a></TD>
               
                    
                </TR>
            </TABLE>
               
</TD>
          </TR>
      </TABLE>
      欢迎访问购物网站 请使用360浏览器浏览本网站&nbsp;<a href="tc.php">退出</a></TD>
    </TR> 
</TABLE> 
</body>
</html>