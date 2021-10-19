<?php

if (!isset($_SESSION)) {
    session_start();
}
$id = '';
$id = $_GET['id'];

if (!Visitor::authenticate()) {
    redirect('visitor/tour-booking-login.php?id='.$id);
}