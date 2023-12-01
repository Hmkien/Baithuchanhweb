<?php
$severname= "localhost";
$username="root";
$password= "";
$db = "oderfood";
$conn = new mysqli($severname,$username,$password,$db);
if ($conn->connect_error) {
    echo"Kết nối không thành công:". $conn->connect_error;
}

?>