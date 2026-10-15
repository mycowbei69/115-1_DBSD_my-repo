<?php
function printHeader(){
    echo"<h3>SID : C113181144</h3>";
    echo"<h3>Name : 郭晉銘</h3>";
    echo"<h3>EX02</h3>";
    
}
function rateExchange($amount, $rate){
    $result = $amount * $rate;
    return $result; 
    
    
}
$result = rateExchange(1000,32.5);


printHeader();
echo "Money : ".$result;

?>