<html>
<title>check page</title>

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
<!--For book starting-->
<div>
<table width='500' height='150' align='center' border='5'>
<tr bgcolor='LightSlateGray'>
<th>Check</th>
<th>User IC</th>
<th>Book title</th>
<th>Book year</th>
<th>Book author</th>
<th>Book cost</th>
<th>Book media</th>
<th>Delete User</th>
</tr>                         

<?php
mysql_connect("localhost","root","");
mysql_select_db("sspl_db");

session_start();                         //session 
if(!$_SESSION['ic']){                    //session
header("location: login.php");           //session
}
$ic=$_SESSION['ic'];

$query = "SELECT * FROM book_table";
$run = mysql_query($query);
while ($row = mysql_fetch_array($run)){
 $book_id = $row[0];
 $user_ic = $row[2];
 $Book_title = $row[1];
 $Book_year = $row[3]; 
 $Book_author = $row[4];
 $Book_cost = $row[5];
 $Book_media = $row[7];
 $check = $row[8]; 
 ?>
 <tr align='center'>
 <br>
 <td><input type="checkbox" name="check" value="1"></td>
 <td><?php echo $user_ic; ?></td>
 <td><?php echo $Book_title; ?></td>
 <td><?php echo $Book_year; ?></td>
 <td><?php echo $Book_author; ?></td>
 <td><?php echo $Book_cost; ?></td>
 <td><?php echo $Book_media; ?></td>
 <td><a href='deletenew.php?del=<?php echo $book_id;?>'>Delete</a></td>
 </tr>
 <?php } ?>
 </table>
</div>
<!--For book Ending-->
<br>
<form action="check.php" method="POST">
<center><input type="submit" name="submit" value="save">  </center>                         <!--submit-->
</form>

<?php
if(isset($_POST['submit'])){

$query="insert into book_table (check) values ('$check') where  ";                          //For Storing the Data into Database

if(mysql_query($query)){
 echo "<script>alert('You have done!')</script>";}

}?>

</body>
</html>















<html>
<body>
<form action="check.php" method="POST">
<center><h1>Book/Journals Details</h1></center>
<label><center>Book/Journals Title:<input type="text" name="title" placeholder="Book/Journals" /><br></label>  <!--title-->
<label>Year:<input type="text" name="year" placeholder="Year" /><br></label>                                   <!--year-->
<label>Author:<input type="text" name="author" placeholder="Author" /><br></label>                         <!--author-->
<label>Cost:<input type="text" name="cost" placeholder="Cost" /><br></label>                                    <!--cost-->
<label>Publisher:<input type="text" name="publisher" placeholder="Publisher" /><br></label>                     <!--publisher-->
<label>Media:<input type="text" name="media" placeholder="other" /><br></label>                                  <!--media-->
<input type="submit" name="submit1" value="submit" />                                         <!--submit-->
</center>
</form>
<br>
</body>
</html>

<?php
mysql_connect("localhost","root","");
mysql_select_db("sspl_db");

if(isset($_POST['submit1'])){

$book_title=$_POST['title'];
$book_year=$_POST['year'];
$book_author=$_POST['author'];
$book_cost=$_POST['cost'];
$book_publisher=$_POST['publisher'];
$book_media=$_POST['media'];

if($book_title==''){
    echo "<script>alert('Please enter Book/Journal Title!')</script>";exit();}

if($book_year==''){
    echo "<script>alert('Please enter book's year!')</script>";exit();}

if($book_author==''){
    echo "<script>alert('Please enter Book's author!')</script>";exit();}

if($book_cost==''){
    echo "<script>alert('Please enter Book's Cost!')</script>";exit();}

if($book_publisher==''){
    echo "<script>alert('Please enter Book's publisher!')</script>";exit();}
	
if($book_media==''){
    echo "<script>alert('Please enter media!')</script>";exit();}
	
/*$check_title = "select * from book_table where book_title='$book_title'";                  //For Checking book title exists or not

$run = mysql_query($check_title);                                     
if(mysql_num_rows($run)>0){



echo "<script>alert('Identity Card No. $check_title already exists!')</script>";exit();}*/


$id=(int)$_COOKIE['id'];
var_dump($id);


$query="insert into book_table (book_title,user_ic,book_year,book_author,book_cost,book_publisher,book_media) values            
('$book_title','$id','$book_year','$book_author','$book_cost','$book_publisher','$book_media') ";                          //For Storing the Data into Database



if(mysql_query($query)){
 echo "<script>alert('You have done!')</script>";}
}
?>
<html>
<h5>User: <?php echo $ic=$_SESSION['ic']; ?></h5>
</html>



