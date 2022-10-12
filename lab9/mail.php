<?php
require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/SMTP.php";
require 'PHPMailer/src/Exception.php';
$mail = new PHPMailer\PHPMailer\PHPMailer(true);
try {

    $mail->isSMTP();
    $mail->CharSet  = "utf-8";
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $nguoigui = "ggraygon@gmail.com";
    $matkhau = "pebmwctwyfeitrjw";

    $tennguoigui = 'Nhập tên người gửi';
    $mail->Username = $nguoigui;
    $mail->Password = $matkhau;
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom($nguoigui, $tennguoigui);
    $to = $_POST['email'];
    $to_name = "bạn";
    $tieude = $_POST['tieude'];

    $mail->addAddress($to, $to_name); //mail và tên người nhận  
    $mail->addAddress("nlquan@vku.udn.vn", "lequan");
    $mail->isHTML(true);  // Set email format to HTML
    $mail->Subject = $tieude;
    $noidungthu = ' <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><b>Xin chào ' . $to_name . '</b></h5>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <p class="card-text">' . $_POST['content'] . '</p>
                </div>
                </div> ';
    $mail->Body =  $noidungthu;
    if (isset($_FILES['file']['name'])) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['file']['name']));
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile))
            $mail->addAttachment($uploadfile, $_FILES['file']['name']);
    }
    $mail->smtpConnect(array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
            "allow_self_signed" => true
        )
    ));
    if ($mail->send()) {
        header("Location:index.php");
    }
} catch (Exception $e) {
    echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
}
