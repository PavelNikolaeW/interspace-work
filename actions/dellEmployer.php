<?php
  ob_start();
  include "../php/db.php";
  print_r($_POST);
  $sql = "DELETE FROM u1573258_default.employer WHERE u1573258_default.employer.id = ".$_POST["dell"].";";
  print_r($sql);
echo "<br>";
echo "<br>";

echo "<br>";

// выводить сообщение об ошибке удаления 
if (delete_job($sql)) {
  $new_url = 'https://interspace-work.ru/admin.php';
} else {
  $new_url = 'https://interspace-work.ru/admin.php';
}
header('Location: '.$new_url);
ob_end_flush();
?>