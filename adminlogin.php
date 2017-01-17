<?php

session_start();

?>

<html>
<title>Admin Login</title>

<link rel="stylesheet" type="text/css" href="stylelogin.css">
<head>
<a href="http://www.drdo.gov.in/drdo/labs/SSPL/English/index.jsp?pg=homebody.jsp"> <div id="image" style="float:left;">
        <img src="logo.jpg"  align="left"/ width="120px" height="100px"> </a></div>

<div><center><h1>Book/Journal Requisition system</h1></center></div>                <!--Heading-->
<br>
<hr>                                               <!--Horizontal line-->
</head>
<body>
<a href="index.php">Home</a>
<center><h2>Admin Login!</h2></center><br>
<form action="adminlogin.php" method="POST">
<center><label>IC No:<input type="text" name="ic" placeholder="your name" /></label>
<label>Password:<input type="password" name="pass" placeholder="Password" /></label><br>
<input type="submit" name="login" value="login" /></center>
<br><br><br>
<br><br><br>

</form>
</body>
</html>

<?php
mysql_connect("localhost","root","");
mysql_select_db("sspl_db");

if(isset($_POST['login'])){

$ic=$_POST['ic'];
$pass=$_POST['pass'];

$check_user = "select * from admin_table where admin_ic='$ic' AND password='$pass'";                  //For Checking Identity Card exists or not

$run = mysql_query($check_user);  
                                   
if(mysql_num_rows($run)>0){
$_SESSION['ic']=$ic;
setcookie('id',$ic);
echo "<script>window.open('adminview.php','_self')</script>";}

else{
echo "<script>alert('IC or Password Incorrect!')</script>";}
}
?>


