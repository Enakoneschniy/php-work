<?php
session_start();
var_dump($_SESSION);
$_SESSION['test'] = 'this is sparta!!!';
echo session_id();
setcookie('this_is_cookie', 'bla bla bla bla', time()+60, '/');
var_dump($_COOKIE);

