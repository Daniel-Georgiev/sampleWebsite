<?php
$recipient=	'info@softuni.bg';
$subject= 	'SoftUniConf <2014>';
$body=	'SoftUniConf <2014> is coming.
<a href="https://softuni.bg/SoftUniConf">Learn more</a>';
$key=	's3cr3t!';
$key = str_split($key);
$body = str_split($body);
var_dump($key);
var_dump($body);
for($i=0; $i<count($body); $i++){
       for($z=0; $z<count($key); $z++){
            echo $i*$z;

       }
}
?>