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

<style type="text/css" media="print">
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */
    }
</style>

<body>

<div>
<b>The Director,<br>
Solid State Physics Laboratory (SSPL)<br>
Defence Research and Development Organization (DRDO)<br>
Ministry of Defence<br>
Lucknow Road, Timarpur,<br>
Delhi - 110054<br>
India</b>
</div>

<br><br>
<div><b>Dear Sir/Madam,</b></div>

<br><br><br>
<div>
<p><b>
The board of examiners will examine your project and give their comments on your work.
You have to submit the final project with complete work by 30th June 2015 for report evaluation<br>
The board of examiners will examine your project and give their comments on your work.
You have to submit the final project with complete work by 30th June 2015 for report evaluation<br>
The board of examiners will examine your project and give their comments on your work.
You have to submit the final project with complete work by 30th June 2015 for report evaluation<br>
The board of examiners will examine your project and give their comments on your work.
You have to submit the final project with complete work by 30th June 2015 for report evaluation<br>
</b></p>
</div>



<br>
<br>
<br>
<center>
<?php
mysql_connect("localhost","root","");
mysql_select_db("sspl_db");


echo "<form method='post' action = ''>";
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

if(isset($_POST['save'])){
 $ID = array();
 $ID = $_POST["id"];
echo count($ID);
 for($j=0; $j<count($ID); $j++){
  $s = "select * from book_table where id=$ID[$j]";
 mysql_query($s);
 if(!mysql_query($s)) {
 echo mysql_error();
}

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
 echo "<td align 'center'><input type='checkbox' name='id[]' value='".$row[0]."'deleteSelected></td>";
 echo "</tr>";
 }
 }
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

<?php

echo "Time:" . date("h:i:sa"); echo "<br>";
echo "Date:" . date("Y/m/d"); "<br>";

date_default_timezone_set("Pacific/Apia");
echo "The time is " . date("h:i:sa");

?>

 <h2 align='left'><a href="adminview.php">Back</a></h2>
 </body>
</html>


