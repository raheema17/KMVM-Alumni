<html>
<head>
<title>Login</title>
</head>
<body>
<?php
session_start();
include('config.php');
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$query="SELECT * FROM admin WHERE admin.username='$username' AND admin.password='$password' ";
if($username=="admin" and $password=="123")
{
$_SESSION['logged']=true;	
header('location: admin.php');
}
else
{
?>
<p align="center">
<?php
echo "Incorrect username or password <br />

Please login again";
}
}
?>
<form  method="post">
<h1 align="center"> LOGIN </h1>
<table cellpadding="10" cellspacing="10" align="center">
<tr>
<td>USERNAME</td>
<td><input type="text" name="username" id="username"/></td>
</tr>
<tr>
<td>PASSWORD</td>
<td><input type="password" name="password" id="password"/></td>
</tr>
<tr><td></td>
<td><input type="submit" name="submit" value="Login"/>
<input type="reset" value="Reset"/></td>
</table>
</form>
</body>
</html>