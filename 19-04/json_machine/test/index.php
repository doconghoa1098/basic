<?php
require('./vendor/autoload.php');
use JsonMachine\Items;
header('Content-type: text/plain');

echo "JSON DECODE \n";
$json_decode = json_decode(file_get_contents('fruits.json'));
foreach ($json_decode as $name => $data) {
    print_r($data);
}

echo "\n\nJSON MACHINE \n";
$json_machine = Items::fromFile('fruits.json');

foreach ($json_machine as $name => $data) {
    print_r($data);
}




































// namespace JSON;

// require('./vendor/autoload.php');
// use JsonMachine\Items;
// use JsonMachine\JsonDecoder\DecodingError;
// use JsonMachine\JsonDecoder\ErrorWrappingDecoder;
// use JsonMachine\JsonDecoder\ExtJsonDecoder;

// $fileSize = filesize('fruits.json');
// $fruits = Items::fromFile('fruits.json',  ['decoder' => new ErrorWrappingDecoder(new ExtJsonDecoder())]);

// foreach ($fruits as $key => $value) {
//     if ($key instanceof DecodingError || $value instanceof DecodingError) {
//         // handle error of this malformed json item
//         continue;
//     }
//     echo "<pre>";
//     print_r($value);
//     echo "</pre>";
// }

?> 