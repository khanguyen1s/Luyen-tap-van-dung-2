<?php
$chuoi = "Em ten Kha hoc lop 23tcth11-B";
$kyTu = "t";
function soKyTuTrongChuoi($chuoi, $kyTu) {
    $dem = 0;
    $doDai = strlen($chuoi);
    for ($i = 0; $i < $doDai; $i++) {
        if ($chuoi[$i] === $kyTu) {
            $dem++;
        }
    }
    return $dem;
}
echo "Số lần xuất hiện của ký tự '$kyTu' trong chuỗi là: " . soKyTuTrongChuoi($chuoi, $kyTu);
?>
