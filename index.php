<html>
<title>Register page</title>

<link rel="stylesheet" type="text/css" href="css/style1.css">      <!--link to css-->



<head>

 <meta charset='utf-8'>                                                                       <!--drop down menu-->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">                                     <!--drop down menu-->
   <meta name="viewport" content="width=device-width, initial-scale=1">                       <!--drop down menu-->
   <link rel="stylesheet" href="drop/cssmenu/styles.css">                                                   <!--drop down menu-->
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>               <!--drop down menu-->
   <script src="drop/cssmenu/script.js"></script>                                                              <!--drop down menu--> 


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


 



<form action="index.php" method="POST">
<center><h1>Signup!</h1></center>
<label><center>IC No:<input type="text" name="ic" placeholder="your name"><br></label>      <!--ic-->
<label>Name:<input type="text" name="name" placeholder="Name"><br></label>                  <!--name-->
<label>Password:<input type="password" name="pass" placeholder="Password"><br></label>         <!--pass-->
<label>Hint Pass:<input type="text" name="hint" placeholder="Hint"><br></label>         <!--pass-->
<label>Designation:<select name="desi" style="width: 200px; font-weight: bold; color: #222; text-transform: none;  border: 1px solid #ccc;
  border-radius: 3px;
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  width:200px;
  min-height: 28px;
  padding: 4px 20px 4px 8px;
  font-size: 12px;
  -moz-transition: all .2s linear;
  -webkit-transition: all .2s linear;
  transition: all .2s linear;
  position: absolute; 
margin-left: 20px; with: 15em; 
left: 720px"><br>
<option value="-1" selected="selected ">-Designation-</option>
                             <option>Scientist B</option>
                             <option>Scientist C</option>
							 <option>Scientist D</option>
							 <option>Scientist E</option>
							 <option>Scientist F</option>
							 <option>TO A</option>
							 <option>TO B</option>
							 <option>TO C</option>
							 <option>TO D</option>
							 <option>STA B</option>
                           </select>
</label>          <!--desi-->

<label>Group:<select name="group" style="width: 300px; font-weight: bold; color: #222; text-transform: none;   border: 1px solid #ccc;
  border-radius: 3px;
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  width:200px;
  min-height: 28px;
  padding: 4px 20px 4px 8px;
  font-size: 12px;
  -moz-transition: all .2s linear;
  -webkit-transition: all .2s linear;
  transition: all .2s linear;
  position: absolute; 
margin-left: 20px; with: 15em; 
left: 720px"><br>
<option value="-1" selected="selected">-Group-</option>
                             <option>TIRC</option>
                             <option>IR</option>
							 <option>CNT</option>
							 <option>MEMS</option>
							 <option>LASER DIODE</option>
							 <option>CZT</option>
							 <option>SAW</option>
							 <option>HYDROPHONE</option>
							 <option>QPG</option>
							 <option>GAN</option>
							 <option>SFS</option>
                           </select>
</label> 
<input type="submit" name="submit" value="Register">                           <!--submit-->
</center>
</form>

<br>
<center><a href="forgot.php">Forgot Password?</a></center>
<center>Already Register! <a href="login.php">Login</a></center>
</body>
</html>

<?php
mysql_connect("localhost","root","");
mysql_select_db("sspl_db");

if(isset($_POST['submit'])){

$user_ic=$_POST['ic'];
$user_name=$_POST['name'];
$user_pass=$_POST['pass'];
$hint=$_POST['hint'];
$user_desi=$_POST['desi'];
$user_group=$_POST['group']; //editing



if($user_ic==''){
    echo "<script>alert('Please enter your Identity Card No.!')</script>";exit();}

if($user_name==''){
    echo "<script>alert('Please enter your Name!')</script>";exit();}

if($user_pass==''){
    echo "<script>alert('Please enter your Password!')</script>";exit();}
	
if($hint==''){
    echo "<script>alert('Please enter your Hint Password!')</script>";exit();}	

if($user_desi==''){
    echo "<script>alert('Please enter your Designation!')</script>";exit();}

if($user_group==''){
    echo "<script>alert('Please enter your Group Name!')</script>";exit();}
	
	


	
$check_ic = "select * from sspl_table where user_ic='$user_ic'";                  //For Checking Identity Card exists or not

$run = mysql_query($check_ic);                                     
if(mysql_num_rows($run)>0){
echo "<script>alert('Identity Card No. $user_ic already exists!')</script>";exit();}



$query="insert into sspl_table (user_ic,user_name,user_pass,user_desi,user_group,hint) values            
('$user_ic','$user_name','$user_pass','$user_desi','$user_group','$hint')";                          //For Storing the Data into Database

if(mysql_query($query)){
 echo "<script>alert('You have done!')</script>";}
}
?>

