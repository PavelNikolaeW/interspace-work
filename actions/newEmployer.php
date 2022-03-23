<?php
ob_start();
include "../php/db.php";

print_r($_POST);
echo "<br>";
print_r($_FILES);

$fl = true;

foreach ($_POST as $key => $val) {
  echo "<br>";
  echo "<br>";
  print_r($val);
  if ($val == "") {
    $new_url = "https://interspace-work.ru/admin.php?add_employer?";
    foreach ($_POST as $key => $val) {
      if ($val != "" && $key != "id_employer")
        $new_url = $new_url . $key . "|" . $val . "^";
    }
    header('Location: ' . $new_url);
    ob_end_flush();
    $fl = false;
  }
}

echo "kek $fl";
if ($fl) {
  try {
    $server_name = "mysql:host=31.31.196.158;charset=utf8mb4";
    $user_name = 'u1573258_user';
    $password = 'tfv-s58-usN-5qX';

    $conn = new PDO($server_name, $user_name, $password);

    $sql = "INSERT INTO u1573258_default.employer (title, img,  nip,  site,  person,  tel,  email,   facebook, whatsapp,  viber,  telegram) VALUES (:title, :img, :nip, :site, :person, :tel, :email, :facebook, :whatsapp, :viber, :telegram)";
    // определяем prepared statement
    $stmt = $conn->prepare($sql);
    // привязываем параметры к значениям
    $stmt->bindValue(":title", $_POST["title_emp"]);
    $stmt->bindValue(":img", $_POST["img"]);
    $stmt->bindValue(":nip", $_POST["nip"]);
    $stmt->bindValue(":site", $_POST["site"]);
    $stmt->bindValue(":person", $_POST["person"]);
    $stmt->bindValue(":tel", $_POST["tel"]);
    $stmt->bindValue(":email", $_POST["email"]);
    $stmt->bindValue(":facebook", $_POST["facebook"]);
    $stmt->bindValue(":whatsapp", $_POST["whatsapp"]);
    $stmt->bindValue(":viber", $_POST["viber"]);
    $stmt->bindValue(":telegram", $_POST["telegram"]);
    // выполняем prepared statement
    $affectedRowsNumber = $stmt->execute();
    // если добавлена как минимум одна строка
    if($affectedRowsNumber > 0 ){
        echo "Data successfully added: name=" . $_POST["title_emp"];  
    }
    foreach ($_FILES as $input => $file) {
      print_r($input);
      echo "<br>  ";
      print_r($file);
      if ($file['error'] == UPLOAD_ERR_OK) {
        // basename() может спасти от атак на файловую систему;
        $name = basename($file["name"]);
        move_uploaded_file($file["tmp_name"], "~/www/interspace-work.ru/img/employer/$name");
      }
    }
  } catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
  }
  $new_url = "https://interspace-work.ru/admin.php";
  header('Location: '.$new_url);
  ob_end_flush();
}
