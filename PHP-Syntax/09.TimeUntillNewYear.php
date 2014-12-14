<?php
    $now = new DateTime();
    $newYear = new DateTime('2015-01-01 00:00:00');
    $interval = $newYear->diff($now);
    $hours = $interval->days * 24 + $interval->h;
    $minutes = $hours*60 + $interval->i;
    $seconds = $minutes*60 + $interval->s;
    echo "Hours until new year : $hours <br>";
    echo "Minutes until new year : $minutes <br>";
    echo "Seconds until new year : $seconds <br>";
    echo  $interval->format("Days:Hours:Minutes:Seconds %d:%h:%i:%s");

?>