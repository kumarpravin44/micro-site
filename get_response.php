<?php 
//require_once("config.php");
if((isset($_POST['your_name'])&& $_POST['your_name'] !='') && (isset($_POST['your_email'])&& $_POST['your_email'] !=''))
{
 //require_once("contact_mail.php");
//print($_POST);
//die;
$yourName =$_POST['your_name'];
$yourEmail = $_POST['your_email'];
$yourPhone = $_POST['your_phone'];
$comments = $_POST['your_city'];
$toEmail = "kumar.pravin160@gmail.com";
$mailHeaders = "From: " . $yourName . "<". $yourEmail .">\r\n";
if(mail($toEmail, $comments, $yourPhone, $mailHeaders)) {
echo"<p class='success'>Contact Mail Sent.</p>";
} else {
echo"<p class='Error'>Problem in Sending Mail.</p>";
}
}

?>