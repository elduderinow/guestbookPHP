<?php
//Get date
date_default_timezone_set('Europe/Brussels'); //Set the default timezone to europe/brussels
$currentdate = date("D M j Y"); //express delivery + 2700seconds + 45min


$file = file_get_contents('guestbook.txt', true);
