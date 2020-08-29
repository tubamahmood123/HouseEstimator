<?php
session_start();
$value = Session::get('message');
echo $value;
?>