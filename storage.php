<?php
$name=$_POST['name'];
$gender=$_POST['gender'];
$month=$_POST['month'];
$day=$_POST['day'];
$year=$_POST['yr'];
$birthdate=$year."-".$month."-".$day;
$addr1=$_POST['addr1'];
$addr2=$_POST['addr2'];
$addr3=$_POST['addr3'];
$addr4=$_POST['addr4'];
$city=$_POST['city'];
$state=$_POST['state'];
$email=$_POST['email'];
$contact_number=$_POST['contact_number'];
$passedoutyear=$_POST['passedoutyear'];
$passedoutyear12=$_POST['passedoutyear12'];
$course=$_POST['course'];
$college=$_POST['college'];
$year=$_POST['year'];
$occupation=$_POST['occupation'];
$institution=$_POST['institution'];
$address=$_POST['address'];
mysql_connect("localhost","root","");
mysql_select_db("alumni");
$query="insert into details(name,gender,birthdate,addr1, addr2, addr3, addr4, city, state,email,contact_number,passedoutyear,passedoutyear12,course,college,year,occupation,institution,address) values('$name','$gender','$birthdate','$addr1', '$addr2', '$addr3', '$addr4', '$city', '$state', '$email','$contact_number','$passedoutyear','$passedoutyear12','$course','$college','$year','$occupation','$institution','$address')";
$result=mysql_query($query) or die(mysql_error());

 ?> 
 <html>
 <head>
 <title>
 Storage Details</title>
 </head>
 <body>
<center> Thank you..<br /><center>
<center><a href="form.php">Enter the details of the next student</a></<br /><center>

 <a href="retrieve.php">Get the details of the student</a>
 </body>
</html>		
