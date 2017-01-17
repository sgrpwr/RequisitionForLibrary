<?php
mysql_connect("localhost","root","");
mysql_select_db("sspl_db");

$delete_ic = $_GET['del'];

$query = "delete from book_table where id = '$delete_ic'";

if(mysql_query($query)){
echo
"<script>window.open('print.php?deleted=user has been deleted!','_self')</script>";


}
?>