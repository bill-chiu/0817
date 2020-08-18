<?php
$myArray['myName'] = 'Jeremy';
$myArray['myHeight'] = 191;
$myArray['myWeight'] = 91;
$myArray['myWeight'] = 92;
echo "Hello! My weight is <br>";

foreach ($myArray as $key => $value){
    echo $key. "=>". $value. "<br>";
}
?>