<?php
$chuoi = "chuyển qua chữ in hoa.!";
function chuyenDoiInHoa($chuoi) {
    return mb_strtoupper($chuoi, 'UTF-8');
}
echo chuyenDoiInHoa($chuoi);
?>
