<?php
//Get date
date_default_timezone_set('Europe/Brussels'); //Set the default timezone to europe/brussels
$currentdate = date("D M j Y"); //express delivery + 2700seconds + 45min

//Creating a class for the post
class Message
{
    private string $Author = "";
    private string $Title = "";
    private string $Date = "";
    private string $Message = "";

    public function __construct($Author,$Title,$Date,$Message ) {
        $this->Author = $Author;
        $this->Title = $Title;
        $this->Date = $Date;
        $this->Message = $Message;
    }

    public function jsonSerialize() {
        return [
            'Author' => $this->Author,
            'Title' => $this->Title,
            'Date' => $this->Date,
            'Message' => $this->Message,
        ];
    }
}

//$MessageObj = new Message($_POST['author'], $_POST['title'], $_POST['date'],$_POST['message']);
$MessageObj = new Message("yarrut", "title", "date","message");
$temparr = $MessageObj->jsonSerialize();
var_dump($temparr);

//encode the serialize funciton to an array.
$file = file_get_contents('resources/messages.json');
var_dump($file);


//write it to the json file
file_put_contents("resources/messages.json", $output);

$file = file_get_contents('resources/messages.json');
$decode = json_decode($file);
