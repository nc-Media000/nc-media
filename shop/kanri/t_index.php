<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>���i�ꗗ</title>
<link rel="stylesheet" href="kanri.css">
</head>
<body>
<table>
  <?php foreach ($goods as $g) { ?>
    <tr>
      <td>
        <?php echo img_tag($g['code']) ?>
      </td>
      <td>
        <p class="goods"><?php echo $g['name'] ?></p>
        <p><?php echo nl2br($g['comment']) ?></p>
      </td>
      <td width="80">
        <p><?php echo $g['price'] ?> �~</p>
        <p><a href="edit.php?code=<?php echo $g['code'] ?>">�C��</a></p>
        <p><a href="upload.php?code=<?php echo $g['code'] ?>">�摜</a></p>
        <p><a href="delete.php?code=<?php echo $g['code'] ?>" onclick="return confirm('�폜���Ă�낵���ł����H')">�폜</a></p>
      </td>
    </tr>
  <?php } ?>
</table>
<div class="base">
  <a href="insert.php">�V�K�ǉ�</a>�@
  <a href="../index.php" target="_blank">�T�C�g�m�F</a>
</div>
</body>
</html>