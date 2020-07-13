
<html>
<head>
<title>Registration</title>
<link rel ="stylesheet" type"text/css" href="style.css">
</head>
<body >
<div>
<img src="images\logo.png" height=50px;width = 140; alt="company logo">
</div>
<div id="links">
<a href="https:\\www.facebook.com" target="_Blank"><img src="images\fb.png"></a>
<a href="https:\\www.twitter.com" target="_Blank"><img src="images\twit.png"></a>
<a href="https:\\www.gmail.com" target="_Blank"><img src="images\gm.png"></a>
</div>
<div id="header">
<ul id="navbar">
<li><a href="index.html"> Home</a></li>
<li><a href="About us.html">About us</a></li>
<li><a href="course.html">Courses</a>
</li>
<li><a href="Services.html">Services</a><ul id="down">
<li><a href="sd.html">Software Devlopment</a></li>
<li><a href="wd.html">Website Designing</a></li>
<li><a href="wh.html">Website Hosting</a></li>
<li><a href="it.html">Industrial Training</a></li>
<li><a href="tat.html">Advanced Technologies</a></li>
<li><a href="isp.html">Internship</a></li>
</ul></li>
<li><a href="ss.html">Gallary</a></li>
<li><a href="Contact us.html">Contact us</a></li>
</ul>
</div>
<div id="posi">
<div id="c1">
<center><h1>Register Here</h1></center></div>
<form action="registration.php" method="post">
<center>
<table cellspacing="15px">
<tr>
<td id="td11">Name</td>
<td><input type="text" name="name" Placeholder="enter your name" required=""></td>
</tr>
<tr><td id="td11">Email</td>
<td><input type="text" name="email" Placeholder="enter your Email" required=""></td>
</tr>
<tr>
<td id="td11">Gender</td>
<td>&nbsp;&nbsp;<input type="radio" name="gender" value="Male" required="">&nbsp;&nbsp;Male &nbsp;&nbsp;<input  type="radio" required="" name="gender" value="Female" >&nbsp;&nbsp;Female
</td></tr>
<tr>
<td id="td11">Phone Number</td>
<td><input type="text" name="phoneno" Placeholder="enter your Phonenumber" required="" >
</td></tr>
<tr><td id="td11">Password</td>
<td><input type="Password" name="password" Placeholder="enter your Password" required=""></td>
</tr>
<tr>
<td id="td11">Confirm Password</td><td><input type="password" name="pass" Placeholder="Confirm Password">
</td></tr>

</tr><td>&nbsp;</td><td>
<button type="Submit" style="background-color:#82ccdd;color:white;width:150px; height:40px;border-radius:8px;" >Sign Up</button></td>
</tr>

</table>
</center>
</form>
</div>

<div id="footer">
<center>
<h4>All rights are reserved to RSoft Technologies  <img src="images\cop.jpg" height="12px" width="12px"></h4>
</center>
</div>
</div>
</body>
</html>
<?php
error_reporting(0);
    $conn=mysqli_connect("localhost","root","","mytraining");
if(!$conn)
	 {
		 echo 'Database connection server failed';
	 }
	 if(!mysqli_select_db($conn,'mytraining'))
	 {
		 echo 'database is not selected';
	 }
		 $username=$_POST['name'];
		 $email=$_POST['email'];
		 $gender=$_POST['gender'];
		 $phoneno=$_POST['phoneno'];
		 $password=$_POST['password'];
		 $pass=$_POST['pass'];
		 if($email==null)
		 {
			 echo '<script language="javascript"> alert(" enter Required fields")</script>';
		 }
		 else
		 {
		 if($password==$pass)
		 {
			 $sql="INSERT INTO register(name,email,gender,phoneno,password)VALUES('$username','$email','$gender','$phoneno','$password')";
			 if(!mysqli_query($conn,$sql))
			 {
				 echo '<script language="javascript"> alert(" not registered")</script>';
			 }
			 else
			 {
				echo '<script language="javascript"> alert("registered")</script>';
			 }
		 }
		 else
		 {
			 echo '<script language="javascript"> alert(" not registered plz enter correct password")</script>';
		 }
		 }
?>