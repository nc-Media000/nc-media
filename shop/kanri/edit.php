<?php
  require 'common.php';
  $error = '';
  $pdo = connect();
  if (@$_POST['submit']) {
    $code = $_POST['code'];
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $price = $_POST['price'];
    if (!$name) $error .= '���i��������܂���B<br>';
    if (!$comment) $error .= '���i����������܂���B<br>';
    if (!$price) $error .= '���i������܂���B<br>';
    if (preg_match('/\D/', $price)) $error .= '���i���s���ł��B<br>';
    if (!$error) {
      $pdo->query("UPDATE goods SET name='$name',comment='$comment',price=$price WHERE code=$code");
      header('Location: index.php');
      exit();
    }
  } else {
    $code = $_GET['code'];
    $st = $pdo->query("SELECT * FROM goods WHERE code=$code");
    $row = $st->fetch();
    $name = $row['name'];
    $comment = $row['comment'];
    $price = $row['price'];
  }
  require 't_edit.php';
?>