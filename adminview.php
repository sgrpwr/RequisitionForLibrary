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
<a href="adminedit.php"><h3 align='right'>Admin:<?php echo $ic=$_SESSION['ic']; ?></a>   <a href='logout.php'>Logout</a></h2>
</pre></p>

<center>
<p>Total demands:</p>
</center>

</body>
</html>

<?php
mysql_connect("localhost","root","");
mysql_select_db("sspl_db");

echo "<center>";
if(isset($_POST['saveit'])){
echo "<form method='post' action = 'save.php'>";
echo "<table border='1'>";
echo "<tr bgcolor='LightSlateGray'>";
echo "<th>User IC.</th>";
echo "<th>Name</th>";
echo "<th>Title</th>";
echo "<th>Year</th>";
echo "<th>Author</th>";
echo "<th>cost</th>";
echo "<th>Publisher</th>";
echo "<th>Delete User</th>";
echo "</tr>"; 

 $ID = array();
 $ID = $_POST["id"];
 count($ID);
 for($j=0; $j<count($ID); $j++){
  $s = "select * from book_table where id=$ID[$j]";
 mysql_query($s);
 if(!mysql_query($s)) {
 echo mysql_error();
}
//$s = "select * from book_table";
$resource= mysql_query($s);
$count = mysql_num_rows($resource);

while ($row = mysql_fetch_array($resource)){
 echo "<tr align='center'>";
 echo "<td>".$row[2]."</td>";
 echo "<td>".$row[8]."</td>";
 echo "<td>".$row[1]."</td>";
 echo "<td>".$row[3]."</td>";
 echo "<td>".$row[4]."</td>";
 echo "<td>".$row[5]."</td>";
 echo "<td>".$row[6]."</td>";
 echo "<td align 'center'><input type='checkbox' name='id[]' value='".$row[0]."'save></td>";
 echo "</tr>";

 }
 }
 }

echo "<br>";
echo "<br>";

$s = "select * from book_table";
$resource= mysql_query($s);
$count = mysql_num_rows($resource);

echo "<form method='post' action = 'save.php'>";
echo "<table border='1'>";
echo "<tr bgcolor='LightSlateGray'>";
echo "<th>IC.</th>";
echo "<th>Name</th>";
echo "<th>Title</th>";
echo "<th>Year</th>";
echo "<th>Author</th>";
echo "<th>Cost</th>";
echo "<th>Media</th>";
echo "<th>Check</th>";
echo "</tr>";                         

while ($row = mysql_fetch_array($resource)){
 echo "<tr align='center'>";
 echo "<td>".$row[2]."</td>";
 echo "<td>".$row[8]."</td>";
 echo "<td>".$row[1]."</td>";
 echo "<td>".$row[3]."</td>";
 echo "<td>".$row[4]."</td>";
 echo "<td>".$row[5]."</td>";
 echo "<td>".$row[6]."</td>";
 echo "<td align 'center'><input type='checkbox' name='id[]' value='".$row[0]."'deleteSelected></td>";
 echo "</tr>";
 }
echo "</table>";
echo "<br />";
echo "<input type='submit' name='saveit'  value='save' /> ";
echo "</form>";
echo "</center>";
?>

<html>
<center>
Want to delete Demands? <a href= "del.php">Click Here!</a>
</center>
</html>



