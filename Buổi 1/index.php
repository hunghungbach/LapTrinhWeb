<?php
echo "<div style='text-align: center; margin-top: 120px;'>
        <span style='font-size: 90px; font-weight: bold; '>
            Buổi 1 - Lập trình WEB N2
        </span>
      </div>";

echo "<div style='display: flex; justify-content: center; margin-top: 130px;'>";
$nut = [
    "Bài 1" => "Bai_1.php",
    "Bài 2" => "Bai_2.php",
    "Bài 3" => "Bai_3_1.php",
    "Bài 4" => "Bai_4_1.php",
];
foreach ($nut as $ten => $link) {
    echo "<a href='$link'>
            <button style='margin:5px; padding:8px 15px; border-radius:5px; cursor:pointer;'>
                $ten
            </button>
          </a>";
}
echo "</div>";
?>