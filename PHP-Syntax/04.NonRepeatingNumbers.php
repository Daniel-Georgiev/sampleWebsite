<?php
$input = 243;
if($input>101&&$input<=989){
    $numbers = array();
    for($i=100;$i<$input;$i++){
        $firstDigit = $i%10;
        $secondDigit = floor($i/10) %10;
        $thirdDigit = floor($i/100)%10;
        if($firstDigit!=$secondDigit && $firstDigit != $thirdDigit && $secondDigit != $thirdDigit) {
        array_push($numbers,$i);

        }
    }
    echo join(', ' ,$numbers);
}
else{
    echo "no";

}

?>