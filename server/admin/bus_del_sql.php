<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>删除商家</title>
</head>

<body>
</body>
</html>


<?php
	
include '../api/connf/conn.php';
$b_id = $_GET['b_id'];

$sql = "DELETE FROM business WHERE b_id = '$b_id'";

$result = mysql_query($sql,$conn);
if(mysql_affected_rows()>0)
	echo "成功删除商家信息";
else
	echo "删除失败！";