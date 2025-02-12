<?php
$chuoi = "Tôi tên là Kha";
$chuoiDaoNguoc = "";
for ($i = strlen($chuoi) - 1; $i >= 0; $i--) {
    $chuoiDaoNguoc .= $chuoi[$i];
}
echo "Chuỗi đảo ngược của chuỗi '$chuoi' là: '$chuoiDaoNguoc'";
?>

