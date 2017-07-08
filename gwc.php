<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link  href="cx.css" rel="stylesheet" />
<title>购物车查询页面</title>
<style type="text/css">
body{ font-size:27px; background-color: #F78210; color: #8E56E9;}
a{ text-decoration:none; font-size:30px; color: #000;}
</style>
</head>

<body> 
<h1 align="center"><strong>欢迎来到购物车查询页面</strong></h1>
<table width="609" height="134"  cellpadding="0" cellspacing="0" bgcolor="#9e7db4" align="center">
<!--表1-->
<form name="myform" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
<!--action="<?php echo $_SERVER['PHP_SELF']?>,在浏览器看源代码的结果就是action="/cx.php"-->
<tr>
 <td width="605" height="150" bgcolor="#F9CD60"><div align="center"><h1 style=" color:blue;font-size:29px">请输入名称</h1><input name="txt_book" type="text" id="txt_book" size="25" />
 &nbsp;
 <input type="submit" name="Submit" value="查询" />
 </div></td>
 </tr>
 <!--表1的第一行为表单-->
 </form>
<tr  valign="top" bgcolor="#ffffff">
<!--表1的第二行开始-->
<td height="400"><br />
<table width="572" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CFECF1">
<!--表2-->
<tr align="center" bgcolor="#00CC66" >
<td width="150" height="80" bgcolor="#E1FAFF"><h1 style=" color:#000;font-size:20px">名称</h1></td>
<td width="150"  bgcolor="#E1FAFF"><h1 style=" color:#000;font-size:20px">尺寸</h1></td>
<td width="150"  bgcolor="#E1FAFF"><h1 style=" color:#000;font-size:20px">价格</h1></td>
<td width="150"  bgcolor="#E1FAFF"><h1 style=" color:#000;font-size:20px">数量</h1></td>


</tr>
<?php
$link = mysql_connect("dev.dxdc.net","a0915222653","57558434") or die("数据库连接失败".mysql_error());//建立与数据库连接
mysql_select_db("a0915222653",$link);//选择数据库
mysql_query("set names utf8");
if (isset($_POST["Submit"])){
	$txt_book = $_POST["txt_book"];
	$sql = mysql_query("select * from tb_six where mc like '%".trim($txt_book)."%'");
	$info = mysql_fetch_object($sql);
	if($info){
		do{
			
?>
     <tr align="left" bgcolor="#FFFFFF">

     <td  align="center" style=" font-size:20px; ">&nbsp;<?php  echo $info->mc;?></td>
     <td align="center" style="font-size:20px; "><?php  echo $info->size;?></td>
          <td align="center" style="font-size:20px; "><?php  echo $info->price;?></td>
         
      <td align="center" style="font-size:20px; "><?php  echo $info->sl;?></td>
           
</tr>
            <?php
		}
		while($info = mysql_fetch_object($sql));
		mysql_free_result($sql);
		mysql_close($link);}else{
			//如果检索不存在，则输出相应提示信息
			echo "<div align='center' style='color:#ff0000; font-size:12px'>对不起，你购物车中没有改物件！</div>";}
}
?>
</table></td>
<!--表2结束-->
</tr>

</table>
<div align="center">
  <a href="zcx.php">返回</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="tc.php">退出</a>
</div>

	
</body>
</html>