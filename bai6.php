<?php
$nam = 2025;
function NamNhuan($kq) {
    return ($kq % 400 == 0) || ($kq% 4 == 0 && $kq % 100 != 0);
}
if (NamNhuan($nam)) {
    echo "$nam là năm nhuận.";
} else {
    echo "$nam không phải là năm nhuận.";
}
?>
