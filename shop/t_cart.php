<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>�J�[�g | Noodle Shop</title>
    <link rel="stylesheet" href="shop.css">
  </head>
  <body>
    <h1>�J�[�g</h1>
    <table>
      <tr><th>���i��</th><th>�P��</th><th>����</th><th>���v</th></tr>
      <?php foreach($rows as $r) { ?>
      	<tr>
      	  <td><?php echo $r['name'] ?></td>
      	  <td><?php echo $r['price'] ?></td>
      	  <td><?php echo $r['num'] ?></td>
      	  <td><?php echo $r['price'] * $r['num']?>�~</td>
      	</tr>
      <?php } ?>
      <tr><td colspan='2'> </td><td><strong>���v</strong></td><td><?php echo $sum ?>�~</td></tr>
    </table>
    <div class="base">
      <a href="index.php">��������</a>
      <a href="cart_empty.php">�J�[�g����ɂ���</a>
      <a href="buy.php">�w������</a>
    </div>
  </body>
</html>