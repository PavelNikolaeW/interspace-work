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
    $sql = "UPDATE u1573258_default.jobs SET title = :title, id_employer = :id_employer, job_des = :job_des, city = :city, for_who = :for_who, hoverly_pay_min = :hoverly_pay_min, hoverly_pay_max = :hoverly_pay_max, work_days_min = :work_days_min, work_days_max = :work_days_max, price_home = :price_home, housing_des = :housing_des, job_image = :job_image, hour_min = :hour_min, hour_max = :hour_max, passport = :passport, opyt = :opyt, age = :age, lang = :lang, food = :food, transfer = :transfer, work_clothes = :work_clothes, help_documents = :help_documents, form_employment = :form_employment, change_date =  CURRENT_TIME()  WHERE u1573258_default.jobs.id = :id";

    // определяем prepared statement
    $stmt = $conn->prepare($sql);
    // привязываем параметры к значениям
    $stmt->bindValue(":title", $_POST["title"]);
    $stmt->bindValue(":id_employer", $_POST["id_employer"]);
    $stmt->bindValue(":job_des", $_POST["job_des"]);
    $stmt->bindValue(":city", $_POST["city"]);
    $stmt->bindValue(":for_who", $_POST["for_who"]);
    $stmt->bindValue(":hoverly_pay_min", $_POST["hoverly_pay_min"]);
    $stmt->bindValue(":hoverly_pay_max", $_POST["hoverly_pay_max"]);
    $stmt->bindValue(":work_days_min", $_POST["work_days_min"]);
    $stmt->bindValue(":work_days_max", $_POST["work_days_max"]);
    $stmt->bindValue(":hour_min", $_POST["hour_min"]);
    $stmt->bindValue(":hour_max", $_POST["hour_max"]);
    $stmt->bindValue(":job_image", $_POST["job_image"]);
    $stmt->bindValue(":housing_des", $_POST["housing_des"]);
    $stmt->bindValue(":price_home", $_POST["price_home"]);
    $stmt->bindValue(":passport", $_POST["passport"]);
    $stmt->bindValue(":opyt", $_POST["opyt"]);
    $stmt->bindValue(":age", $_POST["age"]);
    $stmt->bindValue(":for_who", $_POST["for_who"]);
    $stmt->bindValue(":lang", $_POST["lang"]);
    $stmt->bindValue(":food", $_POST["food"]);
    $stmt->bindValue(":transfer", $_POST["transfer"]);
    $stmt->bindValue(":work_clothes", $_POST["work_clothes"]);
    $stmt->bindValue(":help_documents", $_POST["help_documents"]);
    $stmt->bindValue(":form_employment", $_POST["form_employment"]);
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
