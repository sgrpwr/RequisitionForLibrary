<?php 
session_start();                         //session 
if(!$_SESSION['ic']){                    //session
header("location: login.php");           //session
}
?>
<html>
<title>About</title>

<link rel="stylesheet" type="text/css" href="input.css">      <!--link to css-->



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
 
   <li><a href='adminview.php'>Admin</a></li>
   <li><a href='complete.php'>Complete demands</a></li>
   <li><a href='input.php'>Content</a></li>
</ul>
</div>     

                                                               <!--dropdown-->

<p><pre>
<a href=""><h3 align='right'>Admin:<?php echo $ic=$_SESSION['ic']; ?></a>   <a href='logout.php'>Logout</a></h2>
</pre></p>

<form action="input.php" method="POST">
<center>
<label>The Heading:<textarea name="heading" >
</textarea><br></label>

<br>

<label> The Body:<textarea name="body" >
</textarea></label> <br><br>
</center> 

<center>                 <!--submit-->
<input type="submit" name="submit" value="change" /></center> 
</form>

</body>
</html>

                      

<?php
mysql_connect("localhost","root","");
mysql_select_db("sspl_db");

$ic=$_SESSION['ic'];

if(isset($_POST['submit'])){
$heading=$_POST['heading'];
$body=$_POST['body'];

$query="UPDATE `info_table` SET heading = '$heading', body='$body' WHERE id= 1"; 

if($heading==''){
    echo "<script>alert('Please fill the heading first!')</script>";exit();}

if($body==''){
    echo "<script>alert('Please fill the body first!')</script>";exit();}

if(mysql_query($query)){
 echo "<script>alert('You have done!')</script>";
                        }
}

?>


