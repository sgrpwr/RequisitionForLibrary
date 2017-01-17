
<html>
<title>Forgot password</title>

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

<form action="forgot.php" method="POST">
<a href="index.php">Home</a>
<center><h1>Get Password</h1></center>
<label><center>Enter IC:<input type="text" name="ic" placeholder="IC"><br></label>
<label>Enter Hint:<input type="text" name="hint" placeholder="Hint"><br></label>      <!--ic-->
<input type="submit" name="submit" value="save"> 
</center>
</form>
</body>
</html>

<?php
mysql_connect("localhost","root","");
mysql_select_db("sspl_db");
if(isset($_POST['submit'])){
$ic=$_POST['ic'];
$s = "select * from sspl_table where user_ic='$ic'";                  //For Checking Identity Card exists or not

mysql_query($s);
$resource= mysql_query($s);        
$count = mysql_num_rows($resource);

echo "<br>";echo "<br>";
while ($row = mysql_fetch_array($resource)){echo "<center>";
echo "Your Password is:"; echo "<center>".$row[3]."</center>";
echo "</center>";
}
}
?>
