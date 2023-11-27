<?php
    extract($_REQUEST);
    $file=fopen("contact-form.txt","a");

    fwrite($file, "\n");
    fwrite($file, "--==Client==--\n");
    fwrite($file,"Nume: ");
    fwrite($file, $nume ."\n");
    fwrite($file,"Numar de telefon: ");
    fwrite($file, $numar ."\n");
    fwrite($file,"Email: ");
    fwrite($file, $email ."\n");
    fwrite($file,"Mesaj: ");
    fwrite($file, $mesaj ."\n");
    fclose($file);
    header("location: index.php");
 ?>
