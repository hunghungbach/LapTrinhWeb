<?php
require 'Bai_4_2.php';

$array = [];
$valueToCheck = '';
if (isset($_POST['array']) && $_POST['array'] !== '') {
    // Chuyển chuỗi nhập thành mảng số
    $array = array_map('trim', explode(',', $_POST['array']));
    $array = array_map('intval', $array); // ép kiểu thành số
}

if (isset($_POST['value'])) {
    $valueToCheck = intval($_POST['value']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Array Functions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Array Functions</h1>

    <form method="post" style="text-align:center; margin-bottom:20px;">
        <label>Nhập mảng (các số cách nhau bằng dấu ,):</label><br>
        <input type="text" name="array" value="<?php echo isset($_POST['array']) ? htmlspecialchars($_POST['array']) : ''; ?>" size="50"><br><br>
        <label>Nhập giá trị cần kiểm tra:</label><br>
        <input type="text" name="value" value="<?php echo htmlspecialchars($valueToCheck); ?>"><br><br>
        <button type="submit">Tính toán</button>
    </form>

    <?php if (!empty($array)) : ?>
    <div class="result-box">
        <p>Mảng ban đầu: <?php echo implode(", ", $array); ?></p>
        <p>Giá trị lớn nhất trong mảng: <?php echo findMax($array); ?></p>
        <p>Giá trị nhỏ nhất trong mảng: <?php echo findMin($array); ?></p>
        <p>Tổng các phần tử trong mảng: <?php echo sumArray($array); ?></p>
        <p>Mảng sau khi sắp xếp: <?php echo implode(", ", sortArray($array)); ?></p>
        <p>
            <?php 
            echo $valueToCheck . (checkElement($array, $valueToCheck) ? " có trong mảng" : " không có trong mảng");
            ?>
        </p>
    </div>
    <?php endif; ?>
    <link rel="stylesheet" href="Bai_4.css">
</body>
</html>