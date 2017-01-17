<?php 
session_start();                         //session 
if(!$_SESSION['ic']){                    //session
header("location: login.php");           //session
}
?>
<?php
mysql_connect("localhost","root","");
mysql_select_db("sspl_db");

if(isset($_GET['id'])){
$id=$_GET['id'];
$res = mysql_query("SELECT * FROM admin_table WHERE id = '$id'");
$row= mysql_fetch_array($res);

/*foreach($_GET as $key => &$value){
	$Book_id=$_GET['$Book_id'];
	echo $value[0];
}*/
}

if(isset($_POST['submit'])){
$id=$_POST['id'];
$ic = $_POST['ic'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$pass = $_POST['pass'];


$sql = "UPDATE admin_table SET fname = '$fname', lname = '$lname', admin_ic = '$ic',
password = '$pass'";
$res = mysql_query($sql) or die("Could not update".mysql_error());
echo "<meta http-equiv='refresh' content ='0;url=adminedit.php'>"; 
}
?>



<html>
<title>Edit</title>

<link rel="stylesheet" type="text/css" href="useredit.css">


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

<p><pre>
<a href="adminedit.php"><h2 align='right'>User:<?php echo $ic=$_SESSION['ic']; ?></a>   <a href='logout.php'>Logout</a></h2>
</pre></p>

<form action="adminedit2.php" method="POST">
<center><h1>Update:</h1></center>
<input type="hidden" name="id" value="<?php echo $row[0];?>" /> 
<label><center>First Name:<input type="text" name="fname" value="<?php echo $row[1];?>" ><br></label>      <!--ic-->
<label>Last Name:<input type="text" name="lname" value="<?php echo $row[2];?>" ><br></label>                  <!--name-->
<label>Password:<input type="text" name="pass" value="<?php echo $row[4];?>" ><br></label>
<label>I.C.:<input type="text" name="ic" value="<?php echo $row[3];?>" ><br></label>          <!--desi-->
<input type="submit" name="submit" value="Save">                           <!--submit-->
</center>
</form>
</body>
</html>


