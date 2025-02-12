<?php
$n = 1;
$songuyento = true;
if ($n < 2) {
    $songuyento = false;
}
for ($i = 2; $i <= sqrt($n); $i++) {
    if ($n % $i == 0) {
        $songuyento = false;
        break;
    }
}
if ($songuyento) {
    echo "$n là số nguyên tố";
} else {
    echo "$n không phải là số nguyên tố";
}
?>

