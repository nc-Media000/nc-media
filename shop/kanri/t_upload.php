<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>���i�摜�A�b�v���[�h</title>
<link rel="stylesheet" href="kanri.css">
</head>
<body>
<div class="base">
  <?php if ($error) echo "<span class=\"error\">$error</span>" ?>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <p>
      ���i�摜�iJPEG�̂݁j<br>
      <input type="file" name="pic">
    </p>
    <p>
      <input type="hidden" name="code" value="<?php echo $code ?>">
      <input type="submit" name="submit" value="�ǉ�">
    </p>
  </form>
</div>
<div class="base">
  <a href="index.php">�ꗗ�ɖ߂�</a>�@
</div>
</body>
</html>