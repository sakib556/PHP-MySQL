<?php
// Create connection   ( DB_HOST,      DB_USER,          DB_PASS,              DB_NAME)
$conn =mysqli_connect('localhost','id18158470_stock','Sakib123456#','id18158470_stockmanaging');
// Check connection
if ($conn) {
  $result=array();
  $result['data']=array();
  $sql = "SELECT *FROM `ProductStack`";
  $response=mysqli_query($conn,$sql);

 if (mysqli_affected_rows($conn)>0) {
     while($row=mysqli_fetch_array($response)){
            $index['id']=$row['0'];
            $index['productName']=$row['1'];
            $index['productCode']=$row['2'];
            $index['sellPrice']=$row['3'];
            $index['productDetails']=$row['4'];
           array_push($result['data'],$index);
     }
      $result["Success"]="1";
     echo json_encode($result);
    
     mysqli_close($conn);
}
}
else{
    echo "Connection Failed";  
}
?>