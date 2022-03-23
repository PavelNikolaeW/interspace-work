<?php
ob_start();
echo "<br>";
print_r($_POST);
echo "<br>";
$fl = true;

if ($fl) {
  try {
    $server_name = "mysql:host=31.31.196.158;charset=utf8mb4";
    $user_name = 'u1573258_user';
    $password = 'tfv-s58-usN-5qX';

    $conn = new PDO($server_name, $user_name, $password);
    $sql = "UPDATE u1573258_default.employer SET title = :title, img = :img, nip = :nip, site = :site, person = :person, telegram = :telegram, facebook = :facebook, whatsapp = :whatsapp, viber = :viber, tel = :tel, email = :email, change_date =  CURRENT_TIME()  WHERE u1573258_default.employer.id = :id";

    // определяем prepared statement
    $stmt = $conn->prepare($sql);
    // привязываем параметры к значениям
    $stmt->bindValue(":title", $_POST["title"]);
    $stmt->bindValue(":img", $_POST["img"]);
    $stmt->bindValue(":nip", $_POST["nip"]);
    $stmt->bindValue(":site", $_POST["site"]);
    $stmt->bindValue(":person", $_POST["person"]);
    $stmt->bindValue(":telegram", $_POST["telegram"]);
    $stmt->bindValue(":facebook", $_POST["facebook"]);
    $stmt->bindValue(":whatsapp", $_POST["whatsapp"]);
    $stmt->bindValue(":viber", $_POST["viber"]);
    $stmt->bindValue(":email", $_POST["email"]);
    $stmt->bindValue(":tel", $_POST["tel"]);
    
    $stmt->bindValue(":id", $_POST["id"]);
    // выполняем prepared statement
    $affectedRowsNumber = $stmt->execute();
    // если добавлена как минимум одна строка
    if ($affectedRowsNumber > 0) {
      echo "Data successfully added: name=" . $_POST["title"];
    }
    foreach ($_FILES as $input => $file) {

      if ($file['error'] == UPLOAD_ERR_OK) {
        $tmp_name = $file["tmp_name"];
        // basename() может спасти от атак на файловую систему;
        $name = basename($file["name"]);
        print_r("C:\\xampp\\htdocs\\interspace-work.ru\\img\\job\\$name");
        move_uploaded_file($tmp_name, "C:\\xampp\\htdocs\\interspace-work.ru\\img\\job\\$name");
      }
    }
  } catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
  }
}


  $new_url = 'https://interspace-work.ru/admin.php';
  header('Location: '.$new_url);
  ob_end_flush();
