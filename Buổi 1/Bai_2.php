<?php
$soDong = 10;

$sach = [];
for ($i = 1; $i <= 100; $i++) {
    $sach[] = [
        "soThuTu" => $i,
        "tenSach" => "Tensach" . $i,
        "noiDung" => "Noidung" . $i
    ];
}

$tongSoTrang = ceil(count($sach) / $soDong);

$soTrangHienTai = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($soTrangHienTai < 1) $soTrangHienTai = 1;
if ($soTrangHienTai > $tongSoTrang) $soTrangHienTai = $tongSoTrang;

$khoiDiem = ($soTrangHienTai - 1) * $soDong;
$duLieubang = array_slice($sach, $khoiDiem, $soDong);

echo "<table border='1' cellpadding='15' width= '700' cellspacing='0' style='margin:60px auto; border-collapse:collapse;'>";
echo "<tr><th>STT</th><th>Tên Sách</th><th>Nội Dung Sách</th></tr>";
foreach ($duLieubang as $hang) {
    echo "<tr>";
    echo "<td style= 'text-align: center;'>{$hang['soThuTu']}</td>";
    echo "<td>{$hang['tenSach']}</td>";
    echo "<td>{$hang['noiDung']}</td>";
    echo "</tr>";
}
echo "</table>";

echo "<div style='text-align:center;'>";
for ($i = 1; $i <= $tongSoTrang; $i++) {
    if ($i == $soTrangHienTai) {
        echo "<strong>$i</strong> ";
    } else {
        echo "<a href='?page=$i'>$i</a> ";
    }
}
echo "</div>";
?>