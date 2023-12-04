<?php 
$servername = "localhost";
$username='root';
$password ="";
$db="oderfood";
$conn = new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
    echo"kết nối bị lỗi",$conn->connect_error;
}
else{
    echo("Thành công");
}
?>


