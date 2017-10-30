<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome to Instagram</title>
</head>

<body>
<font size="5">
<center>
<img width=300 height=200 src='ig.jpg'/>
</center>
<table align="center">
<tr>
<td>Email</td>
<td>:</td>
<td><?php echo $_POST["email"] ; ?></br></td>
</tr>
<tr>
<td>Fullname</td>
<td>:</td>
<td><?php echo $_POST["fullname"] ; ?></br></td>
</tr>
<tr>
<td>Username</td>
<td>:</td>
<td><?php echo $_POST["username"] ; ?></br></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><?php echo $_GET["password"]; ?></br></td>
</tr>
</table>
</font>
</body>
</html>