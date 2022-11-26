<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Xu?t s? th�nh ch?</title>
</head>

<body>
<?php
if (isset($_POST["so"]))
{
  if(is_numeric($_POST["so"]))
  {
  switch($_POST["so"])
  {
  case 0:
   $chu="Kh�ng";
   break;
  case 1:
   $chu="M?t";
   break;
  case 2:
   $chu="Hai";
   break;
  case 3:
   $chu="Ba";
   break;
  case 4:
   $chu="B?n"; 
   break
  case 5:
   $chu="Nam";
   break;
  case 6:
   $chu="S�u";
   break; 
  case 7:
   $chu="B?y";
   break;
  case 8:
   $chu="T�m";
   break;
  case 9:
   $chu="Ch�n";
   break;
  default:
   $chu="Kh�ng h?p l?";
   break;
}
}
}
?>
<form action="xuat_so_thanh_chu.php" method="POST" >
<table width="519" border="1">
<tr>
<td colspan="3">�?c s?</td>
</tr>
<tr>
<td>Nh?p s? (0-9)</td>
<td width="69" rowspan="2"><input type="submit" name="button" id="button" value="Submit" /></td>
<td> B?ng ch?</td>
</tr>
<tr>
<td width="177"><p>
<label for="textfield"></label>
<input type="text" name="so" id="textfield" />
</p></td>
<td width="232"><label for="textfield2"></label>
<input type="text" name="chu" id="textfield2" value="<?php echo $chu;?> "/></td>
</tr>
</table>
</form>
</body>
</html>
