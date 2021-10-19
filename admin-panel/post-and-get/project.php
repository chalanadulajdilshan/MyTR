<?php

include '../../class/include.php';
  
//Arange slider
if (isset($_POST['arrange'])) {
    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;
        $PROJECT= Project::arrange($key, $img);
        header('Location:../arrange-project.php?message=9');
    }
}