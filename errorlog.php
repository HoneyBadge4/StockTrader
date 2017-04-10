#!/usr/bin/php
<?php
$txt = $argv[1]."\n";

function writeToErrorlog($txt){

$destination = fopen("test.txt", "a+");
fwrite($destination, $txt);
}
//writeToErrorlog($txt);
?> 