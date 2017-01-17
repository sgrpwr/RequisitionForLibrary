<?php 
session_start();                         //session 
if(!$_SESSION['ic']){                    //session
header("location: login.php");           //session
}
?>

<html>
<title>Requisition page</title>

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
<div id='cssmenu'>                                                      <!--dropdown-->
<ul>
         <ul>
         <li class='has-sub'><a href='index.php'>User SignUp</a>
            
         </li>
         <li class='has-sub'><a href='adminsignup.php'>Admin SignUp</a>
            
         </li>
      </ul>
   
   
   <li class='active has-sub'>
      <ul>
        
            
         </li>
         <li class='has-sub'><a href='adminlogin.php'>Admin Login</a>
            
         </li>
      </ul>
   
   <li><a href="requisition.php">Requisition</a></li>
   <li><a href="print.php">See Demands</a></li>
</ul>
</div>                                                                    <!--dropdown-->

<p><pre>
<a href=""><h2 align='right'>User:<?php echo $ic=$_SESSION['ic']; ?></a>   <a href='logout.php'>Logout</a></h2>
</pre></p>

<form action="requisition.php" method="POST">
<center><h1>Book/Journals Details</h1></center>
<label><center>Book/Journals Title:<input type="text" name="title" placeholder="Book/Journals" /><br></label>  <!--title-->
<label>Year:<input type="text" name="year" placeholder="Year" /><br></label>                                   <!--year-->
<label>Author:<input type="text" name="author" placeholder="Author" /><br></label>                         <!--author-->
<label>Cost:<input type="text" name="cost" placeholder="Cost" /><br></label>                                    <!--cost-->
<label>Publisher:<input type="text" name="publisher" placeholder="Publisher" /><br></label>                     <!--publisher-->
<label>Media:<select name="media" style="width: 200px; font-weight: bold; color: #222; text-transform: none;  border: 1px solid #ccc;
  border-radius: 3px;
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  min-height: 28px;
  padding: 4px 20px 4px 8px;
  font-size: 12px;
  -moz-transition: all .2s linear;
  -webkit-transition: all .2s linear;
  transition: all .2s linear;
  position: absolute; 
margin-left: 70px; with: 15em; 
left: 720px"><br>
<option value="-1" selected="selected ">-Media-</option>
                             <option>Print</option>
                             <option>PDF</option>
                           </select></label>                                  <!--media-->
<input type="submit" name="submit" value="save" />                                         <!--submit-->
</center>
</form>
<br>
<center>Want to see Entries?  <b><a href="print.php">click here!</a></b></center>
</body>
</html>

<?php
mysql_connect("localhost","root","");
mysql_select_db("sspl_db");

if(isset($_POST['submit'])){

$book_title=$_POST['title'];
$book_year=$_POST['year'];
$book_author=$_POST['author'];
$book_cost=$_POST['cost'];
$book_publisher=$_POST['publisher'];
$book_media=$_POST['media'];
$name= 'abcdef';

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
	
$check_title = "select * from book_table where book_title='$book_title'";                  //For Checking book title exists or not

/*$run = mysql_query($check_title);                                     
if(mysql_num_rows($run)>0){



echo "<script>alert('Identity Card No. already exists!')</script>";exit();}*/


$id=(int)$_COOKIE['id'];
//var_dump($id);

$q= "select user_name from sspl_table where user_ic='$id'";
$t= mysql_query($q);

while($row=mysql_fetch_array($t)){
$name = $row[0];
}



$query="insert into book_table (book_title,user_ic,book_year,book_author,book_cost,book_publisher,book_media,user_name) values 
('$book_title','$id','$book_year','$book_author','$book_cost','$book_publisher','$book_media','$name') ";                          //For Storing the Data into Database



if(mysql_query($query)){
 echo "<script>alert('You have done!')</script>";}
}
?>




