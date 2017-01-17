<html>

<title>new page</title>

<link rel="stylesheet" type="text/css" href="styleprint.css">

<head>
<a href="http://www.drdo.gov.in/drdo/labs/SSPL/English/index.jsp?pg=homebody.jsp"> <div id="image" style="float:left;">
        <img src="logo.jpg"  align="left"/ width="120px" height="100px"> </a></div>

<div><center><h1>Book/Journal Requisition system</h1></center></div>                <!--Heading-->
<br>
<br>
<hr>                                               <!--Horizontal line-->
</head>
<h2 align='right'><a href='logout.php'>Logout</a></h2>

<body>



<?php
mysql_connect("localhost","root","");
mysql_select_db("sspl_db");

if(isset($_POST['save'])){
 $ID = array();
 $ID = $_POST["id"];
 for($j=0; $j<count($ID); $j++){
  $s = "delete from book_table where id=$ID[$j]";
 mysql_query($s);
 if(!mysql_query($s)) {
 echo mysql_error();
}
}
}

$query1 = "SELECT * FROM info_table";
$run1 = mysql_query($query1);
while ($row = mysql_fetch_array($run1)){
 $heading = $row[1];
 echo "<pre>";
   echo "<b>";
     echo $heading;
   echo "</b>"; 
 echo "</pre>";	
 }
 
echo "<br>";
echo "<b>";
echo "Dear Sir/Madam,";
echo "</b>";

echo "<br>";
echo "<br>";
echo "<br>"; 
 
$run2 = mysql_query($query1);
while ($row = mysql_fetch_array($run2)){
 $body = $row[2];
 echo "<p>";
   echo "<b>";
     echo $body;
   echo "</b>"; 
 echo "</p>";	
 }
 
 echo "<br>";
 echo "<br>";
 
$s = "select * from book_table";
$resource= mysql_query($s);
$count = mysql_num_rows($resource);

echo "<center>";
echo "<form method='post' action = ''>";
echo "<table border='1'>";
echo "<tr bgcolor='LightSlateGray'>";
echo "<th>User IC.</th>";
echo "<th>Book title</th>";
echo "<th>Book year</th>";
echo "<th>Book author</th>";
echo "<th>Book cost</th>";
echo "<th>Book Publisher</th>";
echo "<th>Delete User</th>";
echo "</tr>";                         

while ($row = mysql_fetch_array($resource)){
 echo "<tr align='center'>";
 echo "<td>".$row[2]."</td>";
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
echo "<input type='submit' name='save' value='deleteSelected' /> ";
echo "</form>";
?>

</center>



 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <center><p> <pre> <h3> Signatures of GO                                     Signatures DO                                     Signatures Director</h3> </pre></p></center>

 <h2 align='left'><a href="input.php">Back</a></h2>
 </body>
</html>




