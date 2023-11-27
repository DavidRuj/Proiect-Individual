<?php
    extract($_REQUEST);
    $file=fopen("abonati-form.txt","a");

    fwrite($file, "\n");
    fwrite($file, "--==Client==--\n");
    fwrite($file,"Email: ");
    fwrite($file, $email ."\n");
    fclose($file);
    header("location: index.php");
 ?>
