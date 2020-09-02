<?php
	require 'common.php';
	$error = $name = $address = $tel = '';
	if (@$_POST['submit']) {
		$name = htmlspecialchars($_POST['name']);
		$address = htmlspecialchars($_POST['address']);
		$tel = htmlspecialchars($_POST['tel']);
		if (!$name) {
			$error .= '�����O����͂��Ă��������B<br>';
		}
		if (!$address) {
			$error .= '���Z������͂��Ă��������B<br>';
		}
		if (!$tel) $error .= '�d�b�ԍ�����͂��Ă��������B<br>';
    if (preg_match('/[^\d-]/', $tel)) $error .= '�d�b�ԍ�������������܂���B<br>';
    if (!$error) {
      $pdo = connect();
      $body = "���i���w������܂����B\n\n"
       . "�����O: $name\n"
       . "���Z��: $address\n"
       . "�d�b�ԍ�: $tel\n\n";
      foreach($_SESSION['cart'] as $code => $num) {
        $st = $pdo->prepare("SELECT * FROM goods WHERE code=?");
        $st->execute(array($code));
        $row = $st->fetch();
        $st->closeCursor();
        $body .= "���i��: {$row['name']}\n"
          . "�P��: {$row['price']} �~\n"
          . "����: $num\n\n";
      }
      $from = "newuser@localhost";
      $to = "newuser@localhost";
      mb_send_mail($to, "�w�����[��", $body, "From: $from");
      $_SESSION['cart'] = null;
      require 't_buy_complete.php';
      exit();
    }
  }
  require 't_buy.php';
?>