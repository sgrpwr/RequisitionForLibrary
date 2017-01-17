<?php
mysql_connect("localhost","root","");
mysql_select_db("sspl_db");


if(isset($_POST['saveit'])){                        //for save button

echo "<form method='post' action = ''>";              //table for save
echo "<table border='1'>";                            //table
echo "<tr bgcolor='LightSlateGray'>";                 //table
echo "<th>User IC.</th>";                             //table
echo "<th>Name</th>";                                  //table
echo "<th>Title</th>";                                   //table
echo "<th>Year</th>";                                      //table
echo "<th>Author</th>";                                     //table
echo "<th>cost</th>";                                       //table
echo "<th>Publisher</th>";                                   //table
echo "<th>Delete User</th>";                                  //table
echo "</tr>";                                                //table  for save
                       
 $ID = array();
 $ID = $_POST["id"];
 count($ID);
 for($j=0; $j<count($ID); $j++){
  $s = "select * from book_table where id=$ID[$j]";
 mysql_query($s);
 if(!mysql_query($s)) {
 echo mysql_error();
}

$resource= mysql_query($s);
$count = mysql_num_rows($resource);

while ($row = mysql_fetch_array($resource)){                                                             //storing data into table
 echo "<tr align='center'>";
 echo "<td>".$row[2]."</td>";
 echo "<td>".$row[8]."</td>";
 echo "<td>".$row[1]."</td>";                                                                                 //storing data into table
 echo "<td>".$row[3]."</td>";
 echo "<td>".$row[4]."</td>";
 echo "<td>".$row[5]."</td>";
 echo "<td>".$row[6]."</td>";
 echo "<td align 'center'><input type='checkbox' name='id[]' value='".$row[0]."'save></td>";                     //storing data into table
 echo "</tr>";                          
 } 
 }
 }                                                                                                            //storing data into table



if(isset($_POST['save'])){                                                                          //deleting
 $ID = array();
 $ID = $_POST["id"];
 for($j=0; $j<count($ID); $j++){
  $s = "delete from book_table where id=$ID[$j]";
 mysql_query($s);
 if(!mysql_query($s)) {
 echo mysql_error();
}
}
}                                                                                                    //deleting

echo "<br>";
echo "<br>";

$s = "select * from book_table";
$resource= mysql_query($s);
$count = mysql_num_rows($resource);

echo "<form method='post' action = ''>";                                                      //table for delete
echo "<table border='1'>";
echo "<tr bgcolor='LightSlateGray'>";
echo "<th>IC.</th>";
echo "<th>Name</th>";
echo "<th>Title</th>";                                                                            //table for delete
echo "<th>Year</th>";
echo "<th>Author</th>";
echo "<th>Cost</th>";
echo "<th>Media</th>";
echo "<th>Delete User</th>";
echo "</tr>";                                                                                     //table for delete



while ($row = mysql_fetch_array($resource)){                                                           //table for delete
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
echo "<input type='submit' name='save' value='deleteSelected' /> ";
echo "<input type='submit' name='saveit' value='save' /> ";
echo "</form>";
?>
