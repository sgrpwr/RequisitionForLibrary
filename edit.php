<?php 
session_start();                         //session 
if(!$_SESSION['ic']){                    //session
header("location: login.php");           //session
};
?>

<?php
mysql_connect("localhost","root","");
mysql_select_db("sspl_db");

if(isset($_GET['id'])){
$id=$_GET['id'];
$res = mysql_query("SELECT * FROM book_table WHERE id = '$id'");
$row= mysql_fetch_array($res);

/*foreach($_GET as $key => &$value){
	$Book_id=$_GET['$Book_id'];
	echo $value[0];
}*/
}

if(isset($_POST['submit'])){
$id=$_POST['id'];
$tt = $_POST['newtitle'];
$y = $_POST['year'];
$a = $_POST['author'];
$c = $_POST['cost'];
$p = $_POST['publisher'];
$m = $_POST['media'];

$sql = "UPDATE book_table SET book_title = '$tt', book_year = '$y', book_author = '$a',
book_cost = '$c', book_publisher = '$p', book_media = '$m' WHERE id = '$id'";
$res = mysql_query($sql) or die("Could not update".mysql_error());
echo "<meta http-equiv='refresh' content ='0;url=print.php'>"; 
}

?>


<html>
<title>Edit</title>

<link rel="stylesheet" type="text/css" href="stylereq.css">


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
<a href=""><h2 align='right'>User:<?php echo $ic=$_SESSION['ic']; ?></a>   <a href='logout.php'>Logout</a></h2>
</pre></p>

<form action="edit.php" method="POST">
<center><h1>Edit Demands</h1></center>

<label><center>Book/Journals Title:<input type="text" name="newtitle" value="<?php echo $row[1];?>" /><br></label>  <!--title-->
<label>Year:<input type="text" name="year" value="<?php echo $row[3];?>" /><br></label>                                   <!--year-->
<input type="hidden" name="id" value="<?php echo $row[0];?>" />                                  
<label>Author:<input type="text" name="author" value="<?php echo $row[4];?>" /><br></label>                         <!--author-->
<label>Cost:<input type="text" name="cost" value="<?php echo $row[5];?>" /><br></label>                                    <!--cost-->
<label>Publisher:<input type="text" name="publisher" value="<?php echo $row[6];?>" /><br></label>                     <!--publisher-->
<label>Media:<input type="text" name="media" value="<?php echo $row[7];?>" /><br></label>                                  <!--media-->
<input type="submit" name="submit" value="submit" />                                         <!--submit-->
</center>
</form>
<br>
<center>Want to see Entries?  <b><a href="print.php">click here!</a></b></center>
</body>
</html>





