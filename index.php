<?php

$inputFormat = 'Y-m-d h:i A';
$outputFormat = 'M d Y A h:i';
$intervalFormat = '%y years, %m months, %h hours, %i minutes and %s seconds';
$secondsPerMinute = 60;
$timePerLiter = 10000;

$presentTime = DateTime::createFromFormat($inputFormat, '2015-10-21 04:06 PM');
$destinationTime = DateTime::createFromFormat($inputFormat, '2016-10-21 04:29 PM');
$to_time = strtotime("2008-12-13 10:42:00");
$from_time = strtotime("2008-12-13 10:21:00");
?>

<div>
    <p><?= 'Present time : ' . $presentTime->format($outputFormat); ?></p>
    <p><?= 'Destination time : ' . $destinationTime->format($outputFormat); ?></p>
    <p><?= $presentTime->diff($destinationTime)->format('Time difference : ' . $intervalFormat . '.') ?></p>
    <p><?= round((abs($destinationTime->getTimestamp() - $presentTime->getTimestamp()) / $secondsPerMinute) / $timePerLiter, 2) . "L of fuel are required to travel from the present to the chosen time." ?></p>
</div>