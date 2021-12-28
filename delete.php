<?php
$msg="";
// Create connection   ( DB_HOST,      DB_USER,          DB_PASS,              DB_NAME)
$conn =mysqli_connect('localhost','id18158470_stock','Sakib123456#','id18158470_stockmanaging');
// Check connection
if ($conn) {
  $id=$_POST["id"]; 
  $sql = "DELETE FROM `ProductStack` where `id`='$id'"; 
  $result=mysqli_query($conn,$sql);
 if ($result) {
  $msg = "Data delete success.";
} else {
  $msg = "Data delete failed.";
}
}
else{
  $msg="Connection Failed";
}
echo $msg;  
?>