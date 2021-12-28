<?php
$msg="";
// Create connection   ( DB_HOST,      DB_USER,          DB_PASS,              DB_NAME)
$conn =mysqli_connect('localhost','id18158470_stock','Sakib123456#','id18158470_stockmanaging');
// Check connection
if ($conn) {
  $id=$_POST['id']; 
  $pname=$_POST['pname'];
  $pcode=$_POST['pcode'];
   $sellprice=$_POST['sellprice'];
  $pdetails=$_POST['pdetails'];
  $sql = "UPDATE `ProductStack` SET `productName`='$pname', `productCode`='$pcode',`sellPrice`='$sellprice', `productDetails`='$pdetails' WHERE `id`='$id'"; 
  $result=mysqli_query($conn,$sql);
 if (mysqli_affected_rows($conn>0)) {
  $msg = "Data update success.";
} else {
  $msg = "Data update failed.";
}
}
else{
  $msg="Connection Failed";
}
echo $msg;  
?>