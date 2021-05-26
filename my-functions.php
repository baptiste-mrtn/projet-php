<?php
function formatPrice($value){
    $euros = $value / 100;
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
