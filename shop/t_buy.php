<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>�w�� | Noodle Shop</title>
<link rel="stylesheet" href="shop.css">
</head>
<body>
<h1>�w��</h1>
<div class="base">
  <?php if ($error) echo "<span class=\"error\">$error</span>" ?>
  <form action="buy.php" method="post">
    <p>
      �����O<br>
      <input type="text" name="name" value="<?php echo $name ?>">
    </p>
    <p>
      ���Z��<br>
      <input type="text" name="address" size="60" value="<?php echo $address ?>">
    </p>
    <p>
      �d�b�ԍ�<br>
      <input type="text" name="tel" value="<?php echo $tel ?>">
    </p>
    <p>
      <input type="submit" name="submit" value="�w��">
    </p>
  </form>
</div>
<div class="base">
  <a href="index.php">���������ɖ߂�</a>�@
  <a href="cart.php">�J�[�g�ɖ߂�</a>
</div>
</body>
</html>