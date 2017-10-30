<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
$host= "localhost";
$user= "root";
$password="";
$email=$_POST['email'];
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$pw=$_POST['pw'];
if($email)
$conn= mysql_connect($host, $user, $password);
mysql_select_db("dbinstagram");
$sql="insert into tbinstagram values('$email', '$fullname', '$username', '$pw')";
$hasil=mysql_query($sql, $conn);
echo "";
<body>
</body>
</html>
