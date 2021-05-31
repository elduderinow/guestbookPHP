<?php
session_start();

if (isset($_POST["message"])) {
    $haystack = $_POST["message"];
}


$badWords = ["fuck","fucking","shit","piss","dick","asshole","bastard","bitch","cunt","wanker"];
$badWords = implode("|", $badWords);
$badWords = "%\b(".$badWords.")\b%i";

/*
if (preg_match($badWords, $haystack) > 0) {
   echo "no bad words please";
} else {
    echo "good boy";
}*/
