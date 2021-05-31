<?php
//Get date
date_default_timezone_set('Europe/Brussels'); //Set the default timezone to europe/brussels
$currentdate = date("D M j Y H:i"); //express delivery + 2700seconds + 45min

//Creating a class for the post
class Message
{
    private string $Author = "";
    private string $Title = "";
    private string $Date = "";
    private string $Message = "";

    //create a construct to store the POST input from the user
    public function __construct($Author, $Title, $Date, $Message)
    {
        $this->Author = $Author;
        $this->Title = $Title;
        $this->Date = $Date;
        $this->Message = $Message;
    }

    //create a public function to get the data out of the private classes
    public function jsonSerialize()
    {
        return [
            'Author' => $this->Author,
            'Title' => $this->Title,
            'Date' => $this->Date,
            'Message' => $this->Message,
        ];
    }


}

if (!isset($_POST['author'])) {
    $_POST['author'] = "Author";
}

if (!isset($_POST['title'])) {
    $_POST['title'] = "Title";
}

if (!isset($_POST['date'])) {
    $_POST['date'] = "Date";
}

if (!isset($_POST['message'])) {
    $_POST['message'] = "Message";
}

$MasterArray = [];
//$MessageObj = new Message($_POST['author'], $_POST['title'], $_POST['date'], $_POST['message']);
$MessageObj = new Message($_POST['author'], $_POST['title'], $_POST['date'], $_POST['message']);



$tempobj = $MessageObj->jsonSerialize();
array_push($MasterArray, $tempobj);
$encode = json_encode($tempobj);
$file_get = file_get_contents('resources/messages.json');
$encode = "[".$encode."]";
if ($file_get == null) {
    file_put_contents("resources/messages.json", $encode);
} else {
    $tempArray = json_decode($file_get, true);
    foreach ($tempArray as $array) {
        array_push($MasterArray, $array);
    }
    $jsondata = json_encode($MasterArray);
    file_put_contents("resources/messages.json", $jsondata);
}
$final_get = file_get_contents('resources/messages.json');
$finalDecode = json_decode($final_get, true);
