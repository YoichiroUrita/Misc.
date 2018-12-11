<?php
//simple and easy collection of POST operation .
$file='PostCollection.txt';//file name to memorize
$strings;//extract row
foreach($_POST as $key =>$value)
{
	$strings.=$key."=".$value."\t";
}
$strings.="\n";

//append writing and lock while you are writing.
file_put_contents($file, $strings, FILE_APPEND | LOCK_EX);
?>
