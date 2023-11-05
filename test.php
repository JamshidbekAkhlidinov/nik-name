<?php

include_once "vendor/autoload.php";
use ustadev\text\NikName;

$text = new NikName();
$text->setText("Jamshidbek Axlidinov");

for ($i=1; $i <=20 ; $i++) 
    echo $text->getText($i)."<br>";
