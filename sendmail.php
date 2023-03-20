<html>
<head>
<title>Sending form data to an Email</title>
</head>
<body>
<?php
$to = $_POST['to'];
$from = $_POST['from'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From: '.$from.'\r\n';
$mailsent = mail($to, $subject, $message, $headers);
if($mailsent) {
echo 'Mail has been sent<br/><br/>';
echo '<b>To: </b>'.$to.'<br/>';
echo '<b>From: </b>'.$from.'<br/>';
echo '<b>Subject: </b>'.$subject.'<br/>';
echo '<b>Message: </b>'.$message.'<br/>';
} else {
echo 'Error in the message.';
}
?>
</body>
</html>