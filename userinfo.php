<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//require("connect.php");
require("PHPMailer.php");
require("SMTP.php");
require("Exception.php");

$mail = new PHPMailer(true);

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $radiobutton = $_POST['radiobutton'];
    $message = $_POST['message'];
}

try {
    $mail->isSMTP();

    $mail->Host = "smtp.gmail.com";

    $mail->SMTPAuth = "true";

    $mail->username = "mrogala.arkonsoft@gmail.com";

    $mail->Password = "TDW8961ndd";

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    $mail->Port = "587";

    $mail->setFrom("mrogala.arkonsoft@gmail.com");

    $mail->addAddress("mrogala.arkonsoft@gmail.com");

    $mail->isHTML(true);

    $mail->Subject = 'Message Received (Contact Page)';

    $mail->Body = "<h3>firstname : $firstname <br>lastname : $lastname <br>
email : $email <br>phone : $phone <br> radiobutton : $radiobutton <br>
message : $message</h3>";

    $mail->send();
    $alert = ' <div class="alert-success">
    <span>MessageSent!</span>
  </div>';
} catch (Exception $e) {
    $alert = '  <div class="alert-error">
    <span>.$e->getMessage()</span>
  </div>';
}

?>
<?php
/*
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $radiobutton = $_POST['Webchange'];
$sql = "INSERT INTO names(`1`, `2`, `3`, `4`) VALUES ('','$firstname','$lastname')";
$sql2 = "Select Name, Lastname from names";

$result = $conn->query($sql);
$result2 = $conn->query($sql2);

if($result2->num_rows>0) {
    while($row = $result2->fetch_assoc()) {
        echo "Name: ".$row['Name']." Lastname: ".$row['Lastname']. "<br />";
    }
}
else {
    echo "Nie znaleziono rekordów!";
}
*/
?>