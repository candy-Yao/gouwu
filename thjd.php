<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link  href="cx.css" rel="stylesheet" />
<title>退货进度查询页面</title>
<style type="text/css">
body{ font-size:27px; background-color: #F78210; }
div{margin: 30px;}
a{ text-decoration:none; font-size:30px; font-weight: bold;}

</style>
</head>

<body>
<h1 align="center"><strong>欢迎来到购退货进度查询页面</strong></h1>
<table width="1000"  cellpadding="0" cellspacing="0" bgcolor="#9e7db4" align="center">
<!--表1-->
<form name="myform" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
<!--action="<?php echo $_SERVER['PHP_SELF']?>,在浏览器看源代码的结果就是action="/cx.php"-->
<tr>
 <td width="605" height="100"bgcolor="#F9CD60"><div align="center"><h1 style=" color:#000;font-size:29px">请输入商品名称</h1><input name="txt_book" type="text" id="txt_book" size="25" />
 &nbsp;
 <input type="submit" name="Submit" value="查询" />
 </div></td>
 </tr>
 <!--表1的第一行为表单-->
 </form>
<tr  valign="top" bgcolor="#ffffff">
<!--表1的第二行开始-->
<td height="460"><br />
<table width="980" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#000" >
<!--表2-->
<tr align="center" bgcolor="#CFECF1">
<td width="66" height="90" bgcolor="#CFECF1"><h1 style=" color:#000;font-size:20px">商品名称</h1></td>
<td width="66"  bgcolor="#CFECF1"><h1 style=" color:#000;font-size:20px">数量</h1></td>
<td width="200"  bgcolor="#CFECF1"><h1 style=" color:#000;font-size:20px">寄出地</h1></td>
<td width="200"  bgcolor="#CFECF1"><h1 style=" color:#000;font-size:20px">现在地</h1></td>
<td width="200"  bgcolor="#CFECF1"><h1 style=" color:#000;font-size:20px">目的地</h1></td>


</tr>
<?php
$link = mysql_connect("dev.dxdc.net","a0915222653","57558434")
 or die("数据库连接失败".mysql_error());
//建立与数据库连接
mysql_select_db("a0915222653",$link);
//选择数据库
mysql_query("set names utf8");
if (isset($_POST["Submit"])){
	$txt_book = $_POST["txt_book"];
	$sql = mysql_query("select * from tb_eight where mc like '%".trim($txt_book)."%'");
	$info = mysql_fetch_object($sql);
	if($info){
		do{
			
?>
     <tr align="left" bgcolor="#FFFFFF">
    
     <td  align="center" style=" font-size:20px; ">&nbsp;<?php  echo $info->mc;?></td>
      <td align="center" style="font-size:20px; "><?php  echo $info->sl;?></td>
      <td align="center" style="font-size:20px; "><?php  echo $info->start;?></td>    
      <td align="center" style="font-size:20px; "><?php  echo $info->arrive;?></td>
      <td align="center" style="font-size:20px; "><?php  echo $info->aim;?></td>
</tr>
            <?php
		}
		while($info = mysql_fetch_object($sql));
		mysql_free_result($sql);
		mysql_close($link);}else{
			//如果检索不存在，则输出相应提示信息
			echo "<div align='center' style='color:#ff0000; font-size:12px'>对不起，你检索的信息不存在！</div>";}
}
?>
</table></td>
<!--表2结束-->
</tr>
<!--表1第二行结束-->
</table>
<div align="center"><a href="zth.php">返回</a>  &nbsp;&nbsp;&nbsp;&nbsp;  <a href="tc.php">退出</a><div>

	
</body>
</html>