<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>���i�C��</title>
<link rel="stylesheet" href="kanri.css">
</head>
<body>
<div class="base">
  <?php if ($error) echo "<span class=\"error\">$error</span>" ?>
  <form action="edit.php" method="post">
    <p>
      ���i��<br>
      <input type="text" name="name" value="<?php echo $name ?>">
    </p>
    <p>
      ���i����<br>
      <textarea name="comment" rows="10" cols="60"><?php echo $comment ?></textarea>
    </p>
    <p>
      ���i<br>
      <input type="text" name="price" value="<?php echo $price ?>">
    </p>
    <p>
      <input type="hidden" name="code" value="<?php echo $code ?>">
      <input type="submit" name="submit" value="�X�V">
    </p>
  </form>
</div>
<div class="base">
  <a href="index.php">�ꗗ�ɖ߂�</a>�@
</div>
</body>
</html>