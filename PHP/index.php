<?php
// phương thức Get
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if(isset($_GET["hoTen"]) && isset($_GET["PW"]) && isset($_GET["email"]) && isset($_GET["Sdt"])){
        $hoTen = $_GET["hoTen"];
        $PW = $_GET['PW'];
        $email = $_GET['email'];
        $Sdt = $_GET['Sdt'];
        echo "Xin chào " . $hoTen . ", bạn vừa nhập mật khẩu là " . $PW . ", email: " . $email . " và số điện thoại: " . $Sdt . " (phương thức GET)";
    }
}

// phương thức post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["hoTen"]) && isset($_POST["PW"]) && isset($_POST["email"]) && isset($_POST["Sdt"])){
        $hoTen = $_POST["hoTen"];
        $PW = $_POST['PW'];
        $email = $_POST['email'];
        $Sdt = $_POST['Sdt'];
        echo "Xin chào " . $hoTen . ", bạn vừa nhập mật khẩu là " . $PW . ", email: " . $email . " và số điện thoại: " . $Sdt . " (phương thức POST)";
    }
}


?>
