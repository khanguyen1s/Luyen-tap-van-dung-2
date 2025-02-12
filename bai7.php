<?php
$chuoi = "Đếm số từ";
function demSoTu($chuoi) {
    return str_word_count($chuoi);
}
echo "chuỗi có " . demSoTu($chuoi) . " từ";
?>
