<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!Customer::authenticate()) {
    redirect('login.php');
}

if (!Customer::checkMobileNumberVerifried($_SESSION['id'])) {
    redirect('mobile-verify.php?id='.$_SESSION['id']);
}