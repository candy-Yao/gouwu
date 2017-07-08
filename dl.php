<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登陆页面</title>
<style type="text/css">
body{background-image:url(images/img5.jpg);font-size:24px;
background-repeat:no-repeat; background-size:cover;
z-index:-1; color:red; font-weight: bold;}
.box1{width: 400px; height: 400px;
           background-color:rgba(249,249,249,0.5);
      margin:40px 0 0 100px; 
        -webkit-border-radius: 35px;
          -moz-border-radius: 35px ;
               border-radius:  35px; }
.shadow{-webkit-box-shadow: 0px 0px 60px,;
        -moz-box-shadow:0px 0px 60px ;
             box-shadow:0px 0px 60px;}
</style>
</head>
<body>
  <div class="box1 shadow">
<form  action="dlyz.php"  method="post" >
<table width="500" height="400" border="0" cellpadding="0" cellspacing="0">
<td valign="top">
<table width="320" border="0"cellpadding="0" cellspacing="0">
<tr>
<td width="140" height="100">&nbsp;</td>
<td width="140">&nbsp;</td>
</tr>
<tr>
<td align="center" height="44" >用户名：</td>
<td align="center" height="44">
<input name="user" type="text" size="20"> </td>
</tr>
<tr>
<td height="44" align="center">密&nbsp;码：</td>
<td align="center" height="44">
<input name="pwd" type="password" size="20">
</td>
</tr>

<tr align="center">
<td height="44" colspan="2">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="登录"/>&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="重置"/>
<br>
<br>&nbsp;&nbsp;
无用户名？？<a href="zc.php">请注册</a>
 </td>
</tr>
</table>

</p></p>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>