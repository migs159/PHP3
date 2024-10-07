<?php
function computeFare($fareAmount, $discount){
    $totalDiscount = $fareAmout * ($discount/100);
    $totalfare = $fareAmout - $totalDiscount;
    return $totalfare;
}

echo computeFare(200,20);

//echo $displayValue;
//echo $color
?>
