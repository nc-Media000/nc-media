<?php
  require 'common.php';
  $error = $name = $comment = $price = '';
  $pdo = connect();
  if (@$_POST['submit']) {
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $price = $_POST['price'];
    if (!$name) $error .= '���i��������܂���B<br>';
    if (!$comment) $error .= '���i����������܂���B<br>';
    if (!$price) $error .= '���i������܂���B<br>';
    if (preg_match('/\D/', $price)) $error .= '���i���s���ł��B<br>';
    if (!$error) {
      $pdo->query("INSERT INTO goods(name,comment,price) VALUES('$name','$comment',$price)");
      header('Location: index.php');
      exit();
    }
  }
  require 't_insert.php';
?>