<?php
echo "<div style='text-align: center; margin-top: 120px;'>
        <span style='font-size: 90px; font-weight: bold; '>
            Buổi 2 - Lập trình WEB N2
        </span>
      </div>";

echo "<div style='display: flex; justify-content: center; margin-top: 130px;'>";
$nut = [
    "Bài tập slide 8 Get" => "Slide_8_GET.php",
    "Bài tập slide 8 Post" => "Slide_8_POST.php",
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