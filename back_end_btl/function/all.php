<?php
function getIPAddress() {  
            //Hàm kiểm tra xem có tồn tại địa chỉ IP từ "share internet" không. Điều này thường được sử dụng khi người dùng truy cập trang web từ một mạng chia sẻ 
             if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                        $ip = $_SERVER['HTTP_CLIENT_IP'];  
                }  
            //Truy cập trang web qua một proxy server  
            elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
             }  
            //Đây là địa chỉ IP thực của máy tính hoặc thiết bị kết nối đến trang web  
            else{  
                     $ip = $_SERVER['REMOTE_ADDR'];  
             }  
             return $ip;  
        }  
?>