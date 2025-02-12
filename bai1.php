<?php
function mayTinh($a, $b, $phepTinh) {
if ($phepTinh == '+') {
    return $a + $b;
} elseif ($phepTinh == '-') {
    return $a - $b;
} elseif ($phepTinh == '*') {
    return $a * $b;
} elseif ($phepTinh == '/') {
    if ($b == 0) {
    return "Lỗi không thể chia cho 0.";
}
    return $a / $b;
} else {
    return "Lỗi phép tính không hợp lệ.";
    }
}
echo "a + b = " . mayTinh(10, 5, '+') . "\n";
echo "a - b = " . mayTinh(10, 5, '-') . "\n";
echo "a * b = " . mayTinh(10, 5, '*') . "\n";
echo "a / b = " . mayTinh(10, 0, '/') . "\n";
?>
