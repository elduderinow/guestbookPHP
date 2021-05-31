<?php

class postLoader
{
    public function __construct($Author, $Title, $Date, $Message)
    {
        echo "<li class='post1'><h5>" . $Title . "</h5>";
        echo "<p>" . $Author . "</p>";
        echo "<p>" . $Date . "</p>";
        echo "<p>" . $Message . "</p>";
        echo "</li>";

    }
}

//create a temporary array to store only 20 posts.
$postArr = [];
/*
for ($i = 0; $i < count($finalDecode); $i++) { //do a for loop
    while (count($postArr) < 5) { //but limit it to the desired posts with a while loop
        array_push($postArr, $finalDecode[$i]); //push it to the temp array
        var_dump($finalDecode[$i]);
        break;
    }
}*/

for ($i = 0; $i < count($finalDecode); $i++) { //do a for loop
    while (count($postArr) < 5) { //but limit it to the desired posts with a while loop
        if (!preg_match($badWords, $finalDecode[$i]["Message"]) && !preg_match($badWords, $finalDecode[$i]["Title"]) && !preg_match($badWords, $finalDecode[$i]["Author"]) > 0) {
            array_push($postArr, $finalDecode[$i]); //push it to the temp array
        }
        if (preg_match($badWords, $finalDecode[0]["Message"]) || preg_match($badWords, $finalDecode[0]["Title"]) || preg_match($badWords, $finalDecode[0]["Author"]) > 0) {
            $_SESSION["Notify"] = "You can not use bad words";
        } else {
            $_SESSION["Notify"] = "Good boy";
        }
        break;
    }
}




