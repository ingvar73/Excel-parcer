<?php
  $dbase=mysqli_connect('localhost', 'root', '');
  if(!$dbase){
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Не могу подключиться к БД</title>
</head>
<body>
  <br /><br /><br />
  <h1 align="center">Проверьте настройки подключения к БД</h1>
</body>
</html>
<?php
  exit;
  }
  mysqli_select_db('anton05353_srub');
  @mysqli_query('set character_set_client="utf8"');
  @mysqli_query('set character_set_results="utf8"');
  @mysqli_query('set collation_connection="utf8_general_ci"');
?>