<?php
    function getSundays(){
        $firstSunday = new DateTime("first Sunday of this month");
        $interval = DateInterval::createFromDateString('next Sunday');
        $lastDay =  new DateTime("last day of this month");
        $Sundays = new DatePeriod($firstSunday, $interval, $lastDay);
    return $Sundays;
    }

    foreach(getSundays() as $sunday ){
        echo $sunday->format('jS F, Y')."<br>";
    }
?>