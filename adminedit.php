<?php 
session_start();                         //session 
if(!$_SESSION['ic']){                    //session
header("location: login.php");           //session
}

?>
<html>
<title>Admin Info.</title>

<link rel="stylesheet" type="text/css" href="stylereq.css">

<head>
<a href="http://www.drdo.gov.in/drdo/labs/SSPL/English/index.jsp?pg=homebody.jsp"> <div id="image" style="float:left;">
        <img src="logo.jpg"  align="left" width="180px" height="140px"> </a></div>

<div><center><h1>Book/Journal Requisition system</h1></center></div>                <!--Heading-->
<br>
<br>
<hr>                                               <!--Horizontal line-->
</head>


<body>

<p><pre>
<h2 align='right'> <a href='logout.php'>Logout</a></h2>
</pre></p>
<!--For book Ending-->

<br>
<!--For User Starting-->
<center>My Info:</center>
<table width='500' height='150' align='center' border='5'>
<tr bgcolor='LightSlateGray'>
<th>I.C.</th>
<th>First Name</th>
<th>Last Name</th>
<th>Password</th>
<th>Edit</th>
</tr>                         

<?php
mysql_connect("localhost","root","");
mysql_select_db("sspl_db");

$ic=$_SESSION['ic'];
$query = "SELECT * FROM admin_table WHERE admin_ic='$ic'";
$run = mysql_query($query);
while ($row = mysql_fetch_array($run)){
 $id = $row[0];
 $fname = $row[1];
 $lname = $row[2];
 $ic = $row[3]; 
 $adminpass = $row[4]; 
 ?>
 <tr align='center'>
 <td><?php echo $ic; ?></td>
 <td><?php echo $fname; ?></td>
 <td><?php echo $lname; ?></td>
 <td><?php echo $adminpass; ?></td>
 
 <td><a href='adminedit2.php?id=<?php echo $id;?>'>Edit</a></td>
 </tr>
 <?php } ?>
<pre>
</table>
</pre>
<h2 align='left'><a href="adminview.php"><-Back</a></h2>
</form> 
</form> 
</body>
</html>


