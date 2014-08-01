<?php
/**
 * Created by PhpStorm.
 * User: bigstone
 * Date: 8/1/14
 * Time: 2:34 PM
 */


$stringLine = $_POST['value'];

$file = '/var/www/html/content/restaurants.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= $stringLine;
// Write the contents back to the file
file_put_contents($file, $current);