<?php session_start(); ?>
<!doctype html>
<html lang="ru">

<head>
  <!-- Запрет кеширования -->
  <!-- <meta http-equiv="Cache-Control" content="no-cache"> -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="./pages/admin.css" />
  <link rel="stylesheet" href="./styles.css" />
  <link rel="shortcut icon" href="./img/flags/Poland.png" />
  <title>Work in Poland</title>
</head>

<body>
  <div class="page">
    <?php
  
    include_once "./php/admin_header.php";
    ?>
    <div class="container admin">
    <?php
    // Помещаем содержимое файла в массив
    include "./php/db.php";
    $jobs = get_jobs();
    $employers = get_employer();

    // Помещаем содержимое файла в массив
    $access = array();
    $access = file("access.php");
    // Разносим значения по переменным – пропуская первую строку файла - 0
    $login = trim($access[0]);
    $passw = trim($access[1]);
    // Проверям были ли посланы данные
    if(!empty($_POST['enter']))
    {
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['passw'] = $_POST['passw'];
    }
    if(!empty($_POST['exit']))
    {
      $_SESSION['login'] = "";
      $_SESSION['passw'] = "";
    }

    // Если ввода не было, или они не верны
    // просим их ввести
    if(empty($_SESSION['login']) or
      $login != $_SESSION['login'] or
      $passw != $_SESSION['passw'])
    {
      ?>
        <a href="http://interspace-work.ru">interspace-work.ru</a>
        <form class="" action=admin.php method=post>
        <div class="my-item">
          <label>Логин:</label>
          <input class=input name=login value="">
        </div>
        <div class="my-item">
          <label>Пароль:</label>
            <input class=input name=passw value="">
        </div>
        <input type=hidden name=enter value=yes>
        <input class="btn btn-primary" type=submit value="Вход">
        <?php
    } else {
      include "./php/admin_main.php";
    }
    ?>
    </div>
    </div>
  

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="./js/jquery.js"></script>
  <script src="./js/admin.js"></script>
</body>

</html>