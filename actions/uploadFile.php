<?php
  ob_start();
  include "../php/db.php";
  $foleder = "~/www/interspace-work.ru/img/".$_POST['folder']."/";
  foreach ($_FILES as $input => $file) {
    print_r($input);
    echo "<br>  ";
    print_r($file);
    if ($file['error'] == UPLOAD_ERR_OK) {
      // basename() может спасти от атак на файловую систему;
      $name = basename($file["name"]);
      move_uploaded_file($file["tmp_name"], $foleder.$name);
    }
  }

  $new_url = 'https://interspace-work.ru/admin.php';
  header('Location: '.$new_url);
  ob_end_flush();
?>