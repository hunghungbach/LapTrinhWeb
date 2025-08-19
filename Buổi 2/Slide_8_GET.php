<?php
$ten_sach     = $_GET['ten_sach']     ?? '';
$tac_gia      = $_GET['tac_gia']      ?? '';
$nha_xuat_ban = $_GET['nha_xuat_ban'] ?? '';
$nam_xuat_ban = $_GET['nam_xuat_ban'] ?? '';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Form GET - Thông tin sách</title>
</head>
<body>
  <h2>Form (GET)</h2>
  <form method="get" action="">
    <label>Tên sách: <input type="text" name="ten_sach" value="<?= htmlspecialchars($ten_sach) ?>"></label><br>
    <label>Tác giả: <input type="text" name="tac_gia" value="<?= htmlspecialchars($tac_gia) ?>"></label><br>
    <label>Nhà xuất bản: <input type="text" name="nha_xuat_ban" value="<?= htmlspecialchars($nha_xuat_ban) ?>"></label><br>
    <label>Năm xuất bản: <input type="text" name="nam_xuat_ban" value="<?= htmlspecialchars($nam_xuat_ban) ?>"></label><br>
    <button type="submit">Gửi (GET)</button>
  </form>

  <?php if (!empty($_GET)): ?>
    <h3>Kết quả nhận được (GET)</h3>
    <p>Tên sách: <?= htmlspecialchars($ten_sach) ?></p>
    <p>Tác giả: <?= htmlspecialchars($tac_gia) ?></p>
    <p>Nhà xuất bản: <?= htmlspecialchars($nha_xuat_ban) ?></p>
    <p>Năm xuất bản: <?= htmlspecialchars($nam_xuat_ban) ?></p>
  <?php endif; ?>
</body>
</html>