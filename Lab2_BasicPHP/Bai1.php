<h6>Bài 1:</h6>
<div style="width: auto;">
<?php

    function checkSNT($num) {
        if ($num < 2) {
            return false;
        }
        $sqrtNum = sqrt($num);
        for ($i = 2; $i <= $sqrtNum; $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    $numRand = rand(10,1000);
    echo "- Số nguyên ngẫu nhiên: $numRand <br>";
    // Câu a:
    echo "<b>a)</b> Các số nguyên tố nhỏ hơn $numRand là: <br>";

    for ($i = 3; $i < $numRand; $i+=2) {
        if (checkSNT($i)) {
            echo " " . $i;
        }
    }

    // Câu b:    
    $somu = 10;
    for ($i = 1; $i < $numRand; $i++) { 
        $somu = $somu * 10;
        $k = (int)($numRand/$somu);
        if($k == 0){
            $chuso = $i + 1;
            echo "<br><b>b)</b> Số $numRand có $chuso chữ số.";
            break;
        }
    }

    // Câu c:
    function numMax($num){
        if($num == 0){
            return false;
        }
        $num = abs($num);
        $max = 0;
        while($num > 0){
            $temp = $num % 10;
            $num /= 10;
            if($temp > $max){
                $max = $temp;
            }
        }
        return $max;
    }

    echo "<br><b>c)</b> Chữ số lớn nhất trong $numRand là: ".numMax($numRand);
?>
</div>
<br>