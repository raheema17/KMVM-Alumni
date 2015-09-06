<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Required details</title>
</head>

<body>

<?php
$memname=$_POST['name'];
mysql_connect("localhost","root","");
mysql_select_db("alumni");
$data = mysql_query("SELECT * FROM details WHERE name='$memname'") or die(mysql_error()); 
 Print "<table align=center>"; 
 ?>
 <html>
 <body>
 <h1><center>Details</center></h1>
 </body>
 </html>
 <?php
 while($info = mysql_fetch_array( $data )) 
 { 
 Print "<tr>"; 
 Print "<tr><td>Name:</td> <td>".$info['name'] . "</td> </tr>"; 
 Print "<tr><td>Gender:</td> <td>".$info['gender'] . " </td></tr>"; 
 Print "<tr><td>DOB:</td> <td>".$info['birthdate'] . " </td></tr>"; 
 Print "<tr><td>Address Line 1:</td> <td>".$info['addr1'] . " </td></tr>"; 
 Print "<tr><td>Address Line 2:</td> <td>".$info['addr2'] . " </td></tr>"; 
 Print "<tr><td>Address Line 3:</td> <td>".$info['addr3'] . " </td></tr>"; 
 Print "<tr><td>Address Line 4:</td> <td>".$info['addr4'] . " </td></tr>"; 
 Print "<tr><td>City:</td> <td>".$info['city'] . " </td></tr>"; 
 Print "<tr><td>State:</td> <td>".$info['state'] . " </td></tr>"; 
 Print "<tr><td>Mail id:</td> <td>".$info['email'] . " </td></tr>"; 
 Print "<tr><td>Contact Number:</td> <td>".$info['contact_number'] . " </td></tr>"; 
 Print "<tr><td>Passed out year from MVM(10th):</td> <td>".$info['passedoutyear'] . " </td></tr>"; 
 Print "<tr><td>Passed out year from MVM(12th):</td> <td>".$info['passedoutyear12'] . " </td></tr>"; 
 Print "<tr><td>Course in the college:</td> <td>".$info['course'] . " </td></tr>"; 
 Print "<tr><td>Name of the college:</td> <td>".$info['college'] . " </td></tr>"; 
 Print "<tr><td>Year:</td> <td>".$info['year'] . " </td></tr>"; 
 Print "<tr><td>Occupation:</td> <td>".$info['occupation'] . " </td></tr>"; 
 Print "<tr><td>Institution:</td> <td>".$info['institution'] . " </td></tr>"; 
 Print "<tr><td>Address of the Institution:</td> <td>".$info['address'] . " </td></tr>"; 
 } 
 Print "</table>"; 
 ?>
</body>
</html>
