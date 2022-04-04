<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Document</title>
</head>

<body>
  <?php include __DIR__ . '/functions.php' ?>

  <h1>Таблицы истинности для основных двоичных логических функций</h1>
  <div class="container">

    <div>
      <h4>Конъюнкция</h4>
      <?php 
        myTable('and');
      ?>
    </div>

    <div>
      <h4>Дизъюнкция</h4>
      <?php 
        myTable('or')
      ?>
    </div>

    <div>
      <h4>Исключа́ющее «или»</h4>
      <?php 
        myTable('xor')
      ?>
    </div>

  </div>
</body>

</html>