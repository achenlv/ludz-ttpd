<?php
// Change contet type to text 
header('Content-Type: text/plain');

if (isset($_GET['input'])) {
    $inputString = $_GET['input'];

    // Get string length
    $stringLength = strlen($inputString);

    // Loop for ascending part of the pyramid
    for ($i = 1; $i <= $stringLength; $i++) {
        echo substr($inputString, 0, $i) . PHP_EOL;
    }

    // Loop for descending part of the pyramid (excluding the middle row)
    for ($i = $stringLength - 1; $i >= 1; $i--) {
        echo substr($inputString, 0, $i) . PHP_EOL;
    }
} else {
    echo "Please provide an input string using the 'input' parameter in the URL.";
}
?>
