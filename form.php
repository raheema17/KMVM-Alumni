<!DOCTYPE html>
<html lang="en">
    <head>
		
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>KMVM ALUMNI REGISTRATION</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->                <style>	
			
			body {
				background: #7f9b4e url(images/bg2.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
		</style>
    </head>
    <body>
        <div class="container">
		
			<header>
			
				<h1 align="center"><strong>KMVM ALUMNI REGISTRATION</strong></h1>
			
				
			</header>
			
			<section class="main">
				<form name="regform" action="storage.php" method="post" >
<table align="center">
<tr><td>Name</td><td><input type="text" name="name" placeholder="Name" required/></td></tr>
<tr><td>Gender</td><td><input type="radio" name="gender" value="male"  checked="checked"/> Male <br /> <input type="radio" name="gender" value="female" /> Female</td></
<br />
<tr><td>Birthday</td><td><select name="month">
        <option>- Month -</option>
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select> 
    <select name="day">
        <option>- Day -</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
        <option value="31">31</option>
    </select> 
<select name="yr">
    <option>- Year -</option>
    <option value="2011">2011</option>
    <option value="2010">2010</option>
    <option value="2009">2009</option>
    <option value="2008">2008</option>
    <option value="2007">2007</option>
    <option value="2006">2006</option>
    <option value="2005">2005</option>
    <option value="2004">2004</option>
    <option value="2003">2003</option>
    <option value="2002">2002</option>
    <option value="2001">2001</option>
    <option value="2000">2000</option>
    <option value="1999">1999</option>
    <option value="1998">1998</option>
    <option value="1997">1997</option>
    <option value="1996">1996</option>
    <option value="1995">1995</option>
    <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option></select></td></tr>
<br>
<tr><td>Address Line 1:</td><td><input type="text" name="addr1" placeholder="Address Line 1" required /></td></tr>
<br>
<tr><td>Address Line 2:</td><td><input type="text" name="addr2" placeholder="Address Line 2" required /></td></tr>
<br>
<tr><td>Address Line 3:</td><td><input type="text" name="addr3" placeholder="Address Line 3" required /></td></tr>
<br>
<tr><td>Address Line 4:</td><td><input type="text" name="addr4" placeholder="Address Line 4" required /></td></tr>
<br>
<tr><td>City</td><td><input type="text" name="city" placeholder="City" required /></td></tr>
<br>
<tr><td>State:</td><td><input type="text" name="state" placeholder="State" required /></td></tr>
<br>

<tr><td>Email id (Preferably gmail)</td><td><input type="text" name="email" placeholder="Email" required /></td></tr>
<br>
<tr><td>Contact number</td><td><input type="text" name="contact_number" placeholder="Contact number" required /></td></tr>
<br>
<tr><td>Passed out year(10th)</td><td><input type="text" name="passedoutyear" placeholder="year" required /></td></tr>
<br>
<tr><td>Passed out year(12th)</td><td><input type="text" name="passedoutyear12" placeholder="year" required /></td></tr>
<br>

<tr><td>Present Status</td><td></tr>
<br>
<tr><ol><td>Student</td></ol></tr>

<tr><td><li>Course</td><td><input type="text" name="course" placeholder="Course" required></li></td></tr>
<tr><td><li>College</td><td><input type="text" name="college" placeholder="College" required></li></td></tr>
<tr><td><li>Year</td><td><input type="text" name="year" placeholder="Year of study" required></li></td></tr>

<tr><ol><td>Employed</td></ol></tr>

<tr><td><li>Occupation</td><td><input type="text" name="occupation" placeholder="Occupation" ></li></td></tr>
<tr><td><li>Institution</td><td><input type="text" name="institution" placeholder="Institution" ></li></td></tr>
<tr><td><li>Address</td><td><textarea rows="4" cols="25" name="address" placeholder="Address of the institution" ></textarea></li></td></tr>

<tr><td></td><td><input type="submit" name="submit" value="Submit"  />
<input type="reset" name="reset" value="Reset">
</td></tr>
</table>
</form>
			</section>
			
        </div>
    </body>
</html>