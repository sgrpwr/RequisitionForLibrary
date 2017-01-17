<html>
<title>Admin</title>

<link rel="stylesheet" type="text/css" href="style1.css">      <!--link to css-->

<head>

 <meta charset='utf-8'>                                                                       <!--drop down menu-->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">                                     <!--drop down menu-->
   <meta name="viewport" content="width=device-width, initial-scale=1">                       <!--drop down menu-->
   <link rel="stylesheet" href="styles.css">                                                   <!--drop down menu-->
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>               <!--drop down menu-->
   <script src="script.js"></script>                                                              <!--drop down menu--> 


<a href="http://www.drdo.gov.in/drdo/labs/SSPL/English/index.jsp?pg=homebody.jsp"> <div id="image" style="float:left;">
        <img src="logo.jpg"  align="left"/ width="120px" height="100px"> </a></div>

<div><center><h1>Book/Journal Requisition system</h1></center></div>                <!--Heading-->
<br>
<hr>                                               <!--Horizontal line-->
</head>


<body>

<div id='cssmenu'>                                                      <!--dropdown-->
<ul>
   <li><a href='index.php'>Home</a>
         <ul>
         <li class='has-sub'><a href='index.php'>User SignUp</a>
            
         </li>
         <li class='has-sub'><a href='adminsignup.php'>Admin SignUp</a>
            
         </li>
      </ul>
   </li>
   
   <li class='active has-sub'><a href='index.php'>Login</a>
      <ul>
         <li class='has-sub'><a href='login.php'>User Login</a>
            
         </li>
         <li class='has-sub'><a href='adminlogin.php'>Admin Login</a>
            
         </li>
      </ul>
   </li>
   <li><a href='about.php'>About</a></li>
   <li><a href='contact.php'>Contact</a></li>
</ul>
</div>                                                                    <!--dropdown-->






<form action="adminsignup.php" method="POST">
<center><h1>Admin Signup!</h1></center>
<center>
<label>first Name:<input type="text" name="fname" placeholder="Name"><br></label>
<label>last Name:<input type="text" name="lname" placeholder="Name"><br></label>                  <!--name-->
<label>Admin IC:<input type="text" name="ic" placeholder="Name"><br></label>
<label>Password:<input type="password" name="pass" placeholder="Password"><br></label>         <!--pass-->
<input type="submit" name="submit" value="Register">                           <!--submit-->

</center>
</form>

<br>
<center>Forgot Password?</center>
<center>Already Register! <a href="login.php">Login</a></center>
</body>
</html>

<?php
mysql_connect("localhost","root","");
mysql_select_db("sspl_db");

if(isset($_POST['submit'])){

$admin_ic=$_POST['ic'];
$admin_fname=$_POST['fname'];
$admin_lname=$_POST['lname'];
$admin_pass=$_POST['pass'];   //editing



if($admin_ic==''){
    echo "<script>alert('Please enter your Identity Card No.!')</script>";exit();}

if($admin_fname==''){
    echo "<script>alert('Please enter your Name!')</script>";exit();}

if($admin_lname==''){
    echo "<script>alert('Please enter your Password!')</script>";exit();}

if($admin_pass==''){
    echo "<script>alert('Please enter your Designation!')</script>";exit();}



	
$check_ic = "select * from admin_table where admin_ic='$admin_ic'";                  //For Checking Identity Card exists or not

$run = mysql_query($check_ic);                                     
if(mysql_num_rows($run)>0){
echo "<script>alert('Identity Card No. $check_ic already exists!')</script>";exit();}



$query="insert into admin_table (fname,lname,admin_ic,password) values            
('$admin_fname','$admin_lname','$admin_ic','$admin_pass')";                          //For Storing the Data into Database

if(mysql_query($query)){
 echo "<script>alert('You have done!')</script>";}
}
?>


