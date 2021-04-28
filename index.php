<?php
$array = [0, 100, -4, 8, 143, 5, 99, 100];

$max = null;
$max2= null;
// Tìm giá trị lớn thứ 1 trong mảng
for ($i = 0; $i < count($array); $i++) {
    if ($max === null) {
        $max = $array[$i];
    } else {
        if ($array[$i] > $max) {
            $max = $array[$i];
        }
    }
}
// Tìm giá trị lớn thứ 2 trong mảng
for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] < $max) {
            $max2 = $array[$i];
        }
   
}
$total= $max+ $max2;
echo "Mảng ban đầu [0, 100, -4, 8, 143, 5, 99, 100]";
echo "<br>";
//output: 243
echo  "Tổng lớn nhất được tạo thành từ 2 phần tử trong
mảng: ". $total;