<?php
include '../class/include.php';

$VISITOR = new Visitor(NULL);

if ($VISITOR->logOut()) {
    header('Location:login.php');
} else {
    header('Location: ./?message=2');
}

