<?php
function tachChuoi($chuoi, $kyTuCach) {
    return explode($kyTuCach, $chuoi);
}
$chuoi = "Nguyen-Le-Tan-Kha-11A6";
$kyTuCach = "-";
$KetQua = tachChuoi($chuoi, $kyTuCach);
print_r($KetQua);
?>