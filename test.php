<?php

include_once "./src/NikName.php";
use jamshidbekakhlidinovl\NikName;

$text = new NikName();
$text->setText("Jamshidbek");

for ($i=1; $i <=20 ; $i++) 
    echo $text->getText($i)."<br>";



?>