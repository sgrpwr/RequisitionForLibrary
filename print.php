<?php 
session_start();                         //session 
if(!$_SESSION['ic']){                    //session
header("location: login.php");           //session
}
$ic=$_SESSION['ic'];
?>
<html>
<title>Print page</title>

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
<a href=""><h2 align='right'>User:<?php echo $ic=$_SESSION['ic']; ?></a>   <a href='logout.php'>Logout</a></h2>
</pre></p>
<center>My Demands:</center>
<br>

<!--For book starting-->
<form method="POST" action="edit.php" />
<table  align='center' border='5'>
<tr bgcolor='LightSlateGray'>
<th>Title</th>
<th>Year</th>
<th>Author</th>
<th>Cost</th>
<th>Media</th>
<th>Edit</th>
<th>Delete</th>
</tr>   
                      

<?php
mysql_connect("localhost","root","");
mysql_select_db("sspl_db");
$ic=$_SESSION['ic'];

$query = "SELECT * FROM book_table where user_ic = '$ic'";
$run = mysql_query($query);
while ($row = mysql_fetch_array($run)){
  $Book_id = $row[0];
 $Book_title = $row[1];
 $Book_year = $row[3]; 
 $Book_author = $row[4];
 $Book_cost = $row[5];
 $Book_media = $row[7]; 
 ?>
 <tr align='center'>
 <td><?php echo $Book_title; ?></td>
 <td><?php echo $Book_year; ?></td>
 <td><?php echo $Book_author; ?></td>
 <td><?php echo $Book_cost; ?></td>
 <td><?php echo $Book_media; ?></td>
 <td><a href='edit.php?id=<?php echo $Book_id;?>'>Edit</a></td>
 <td><a href='delete.php?del=<?php echo $Book_id;?>'>Delete</a></td>
 </tr>
 <?php } ?>
 </table>

<!--For book Ending-->

<br>
<!--For User Starting-->
<center>My Info:</center>
<table width='500' height='150' align='center' border='5'>
<tr bgcolor='LightSlateGray'>
<th>My IC.</th>
<th>Name</th>
<th>Password</th>
<th>Designation</th>
<th>Group</th>
<th>Edit</th>
</tr>                         

<?php
mysql_connect("localhost","root","");
mysql_select_db("sspl_db");


$query = "SELECT * FROM sspl_table where user_ic = '$ic'";
$run = mysql_query($query);
while ($row = mysql_fetch_array($run)){
 $id = $row[0];
 $user_ic = $row[1];
 $user_name = $row[2];
 $user_pass = $row[3]; 
 $user_desi = $row[4];
 $user_group = $row[5]; 
 ?>
 <tr align='center'>
 <td><?php echo $user_ic; ?></td>
 <td><?php echo $user_name; ?></td>
 <td><?php echo $user_pass; ?></td>
 <td><?php echo $user_desi; ?></td>
 <td><?php echo $user_group; ?></td>
 <td><a href='useredit.php?id=<?php echo $id;?>'>Edit</a></td>
 </tr>
 <?php } ?>
<pre>
</table>
</pre>
<h2 align='left'><a href="requisition.php"><-Back</a></h2>
</form>
</form>  
</body>
</html>


