<?php
$msg="";
// Create connection   ( DB_HOST,      DB_USER,          DB_PASS,              DB_NAME)
$conn =mysqli_connect('localhost','id18158470_stock','Sakib123456#','id18158470_stockmanaging');
// Check connection
if ($conn) {
  $pname=$_POST['pname'];
  $pcode=$_POST['pcode'];
   $sellprice=$_POST['sellprice'];
  $pdetails=$_POST['pdetails'];
  $sql = "INSERT INTO `ProductStack`( `productName`, `productCode`,`sellPrice`, `productDetails`) VALUES ('$pname','$pcode','$sellprice','$pdetails')";
  $result=mysqli_query($conn,$sql);
 if (mysqli_affected_rows($conn>0)) {
  $msg = "Data add success.";
} else {
  $msg = "Data add failed.";
}
}
else{
  $msg="Connection Failed";
}
echo $msg;  
?>
