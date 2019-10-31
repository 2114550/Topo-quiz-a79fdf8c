<?php
echo "> Fill in the blanks" . PHP_EOL;
$goed = array();
$plaatsen = array(
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "Washington D.C.",
    "India" => "New Delhi",
    "Zuid-Korea" => "Seoul",
    "China" => "Peking",
    "Nigeria" => "Abuja",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London"
);

//
foreach($plaatsen as $quiz => $answer) {
    echo "> What is $quiz's capital" . PHP_EOL;
    $input = readline("> ");
    if ($input === $answer){
        echo "> $input is correct!" . PHP_EOL;
        $goed[] = $answer;
    }
    else{
        echo "> $input is not $quiz's capital, because it's $answer!" . PHP_EOL;
    }
}
echo "That's a " .count($goed) ." out of 10!".PHP_EOL;