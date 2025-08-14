<?php
require 'Bai_3_2.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Phép tính trên hai số</title>
    <style>
        body {
            font-family: Arial;
        }
        .container {
            border: 1px solid black;
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            text-align: center;
        }
        h2 {
            color: navy;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
    <form method="post">
        <label><b>Chọn phép tính :</b></label>
        <input type="radio" name="pheptinh" value="cong" checked> Cộng
        <input type="radio" name="pheptinh" value="tru"> Trừ
        <input type="radio" name="pheptinh" value="nhan"> Nhân
        <input type="radio" name="pheptinh" value="chia"> Chia
        <br><br>
        Số thứ nhất: <input type="number" name="so1" required><br><br>
        Số thứ nhì: <input type="number" name="so2" required><br><br>
        <input type="submit" name="tinh" value="Tính">
    </form>

    <?php
    if (isset($_POST['tinh'])) {
        $a = $_POST['so1'];
        $b = $_POST['so2'];
        $pheptinh = $_POST['pheptinh'];

        switch ($pheptinh) {
            case "cong": $kq = tong($a, $b); break;
            case "tru": $kq = hieu($a, $b); break;
            case "nhan": $kq = tich($a, $b); break;
            case "chia": $kq = thuong($a, $b); break;
        }

        echo "<hr>";
        echo "<h3>Kết quả: $kq</h3>";

        // Kiểm tra tính chất số
        echo "<p>Số $a: " . chanLe($a) . " - " . (soNguyenTo($a) ? "Nguyên tố" : "Không nguyên tố") . "</p>";
        echo "<p>Số $b: " . chanLe($b) . " - " . (soNguyenTo($b) ? "Nguyên tố" : "Không nguyên tố") . "</p>";
        if (is_numeric($kq)) {
            echo "<p>Kết quả: " . chanLe($kq) . " - " . (soNguyenTo($kq) ? "Nguyên tố" : "Không nguyên tố") . "</p>";
        }
    }
    ?>
</div>

</body>
</html>