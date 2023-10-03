<?php
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->IsSMTP();  
$mail->SMTPDebug = 1; // Chế độ debugging: 1 = lỗi và thông báo, 2 = chỉ thông báo
$mail->SMTPAuth = true; // Kích hoạt chế độ xác thực SMTP
$mail->SMTPSecure = 'ssl'; // Kích hoạt chế độ bảo mật SSL
$mail->Host = "smtp.gmail.com"; // Địa chỉ máy chủ SMTP của Gmail
$mail->Port = 465; // Cổng SMTP của Gmail (hoặc 587 nếu bạn không sử dụng SSL)
$mail->IsHTML(true); // Cho phép gửi email dưới dạng HTML

// Cấu hình thông tin đăng nhập Gmail
$mail->Username = "sktt1thai2003@gmail.com"; // Địa chỉ email Gmail của bạn
$mail->Password = "dlfljkiluomnmuck"; // Mật khẩu Gmail của bạn

// Thiết lập thông tin email
$mail->SetFrom("sktt1thai2003@gmail.com");
$mail->Subject = "DiemDanh";
$mail->Body = "Dam Khac Thai - 2151163722 - Diem danh a"; //nội dung mail
$mail->AddAddress("dungkt@wru.com"); // mail người dùng

// Gửi email
if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message has been sent";
}
?>