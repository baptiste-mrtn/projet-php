<?php
function formatPrice($value){
    $euros = round($value) / 100;
    number_format($value,2);
    echo "$euros";
}

function priceExcludingVAT($euros){
    $priceHT = $euros/(1+20/100);
    return $priceHT;
}

function displayDiscountedPrice($euros, $purcent) {
    $remise = $euros*($purcent/100);
    $remise = $euros-$remise;
    return $remise;
}



?>
