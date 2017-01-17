<html>
<title>Director</title>

<link rel="stylesheet" type="text/css" href="save.css">

<head>
<a href="http://www.drdo.gov.in/drdo/labs/SSPL/English/index.jsp?pg=homebody.jsp"> <div class="img" id="image" style="float:left;">
        <img src="logo.jpg"  align="left"/ width="120px" height="100px"> </a></div>

<div><center><h1>Book/Journal Requisition system</h1></center></div>                <!--Heading-->
<br>
<br>
<hr>                                               <!--Horizontal line-->
</head>

<body>

<br><br>




<?php
mysql_connect("localhost","root","");
mysql_select_db("sspl_db");


if(isset($_POST['saveit'])){

$q="SELECT * FROM `info_table` ";
$resource= mysql_query($q);
 while ($row = mysql_fetch_array($resource)){
$h=$row[1];
echo "<div><pre><b><br>$h</b></div>";

echo "<br>";

echo "<div><b>Dear Sir/Madam,</b></div>";

echo "<br>";echo "<br>";

$b=$row[2];
echo "<div><b><p>$b</p></b></div>";
}
echo "<br>";echo "<br>";echo "<br>";



echo "<center>";

 $id=array();
 $id=$_POST['id'];
echo "<table border='1'>";
echo "<tr bgcolor='LightSlateGray'>";
echo "<th>User IC.</th>";
echo "<th>Name</th>";
echo "<th>Title</th>";
echo "<th>Year</th>";
echo "<th>Author</th>";
echo "<th>cost</th>";
echo "<th>Publisher</th>";
echo "</tr>";


 for($i=0;$i<count($id);$i++){
 
$query="SELECT * FROM `book_table` WHERE `id`=$id[$i] ";
$resource= mysql_query($query);
 while ($row = mysql_fetch_array($resource)){
echo "<tr align='center'>";
$idd=$row['id'];
$ui=$row['user_ic'];
$un=$row['user_name'];
$bt=$row['book_title'];
$by=$row['book_year'];
$ba=$row['book_author'];
$bc=$row['book_cost'];
$bp=$row['book_publisher'];
$bm=$row['book_media'];

  echo "<td>".$row['user_ic']."</td>";
  echo "<td>".$row['user_name']."</td>";
  echo "<td>".$row['book_title']."</td>";
  echo "<td>".$row['book_year']."</td>";
  echo "<td>".$row['book_author']."</td>";
  echo "<td>".$row['book_cost']."</td>";
  echo "<td>".$row['book_publisher']."</td>";
echo "</tr>"; 
  
  $d="DELETE FROM `book_table` WHERE `id`=$id[$i] ";
  mysql_query($d);
  $u="INSERT INTO `backup_sspl`(`id`, `book_title`, `user_ic`, `book_year`, `book_author`, `book_cost`, `book_publisher`, `book_media`,`user_name`) 
  VALUES ('$idd','$bt','$ui','$by','$ba','$bc','$bp','$bm','$un') ";
  mysql_query($u);
  }
 }
}

echo "</table>";
echo "</center>";
?>
<br><br><br><br><br><br><br><br><br><br>
<center><pre><p> <h3><div> Signatures of GO                                 Signatures DO                                 Signatures Director</div></h3></p> </pre></center>

<?php
echo "<div>";
date_default_timezone_set("Pacific/Apia");
echo "Date:" . date("Y/m/d"); "<br>";
echo "</div>";
?>

 </body>
</html>















