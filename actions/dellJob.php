<?php
  ob_start();
  include "../php/db.php";
  print_r($_POST);
  $sql = "DELETE FROM u1573258_default.jobs WHERE u1573258_default.jobs.id = ".$_POST["dell"].";";
  print_r($sql);
  delete_job($sql);
  $new_url = 'https://interspace-work.ru/admin.php';
  header('Location: '.$new_url);
  ob_end_flush();
?>