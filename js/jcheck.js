function checkregtel(regtel){
var str=regtel;
var Expression=/^13(\d{9})$|^18(\d{9})$|^15(\d{9})$/;
var objExp=new RegExp(Expression);
if(objExp.test(str))
{
	return true;
}else{
	return false;
	}
}