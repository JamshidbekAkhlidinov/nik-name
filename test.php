<?php

include_once "./src/NikName.php";
use jamshidbekakhlidinov\NikName;

$text = new NikName();
$text->setText("Jamshidbek Axlidinov");

for ($i=1; $i <=20 ; $i++) 
    echo $text->getText($i)."<br>";



?>