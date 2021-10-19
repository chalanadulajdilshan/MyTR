<?php
include '../class/include.php';

$CUSTOMER = new Customer(NULL);

if ($CUSTOMER->logOut()) {
    header('Location:login.php');
} else {
    header('Location: ./?message=2');
}

