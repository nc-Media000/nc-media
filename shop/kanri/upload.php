<?php
  require 'common.php';
  $error = '';
  if (@$_POST['submit']) {
    $code = $_POST['code'];
    if (move_uploaded_file($_FILES['pic']['tmp_name'], "../images/$code.jpg")) {
      header('Location: index.php');
      exit();
    } else {
      $error .= '�t�@�C����I�����Ă��������B<br>';
    }
  } else {
    $code = $_GET['code'];
  }
  require 't_upload.php';
?>
shop/kanri/t_upload.php