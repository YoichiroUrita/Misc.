<?php
/*
 * Simple Example which output to browser from read XLSX file by PhpSpreadsheet.
 * Y.Urita 2018/12/20
 */
require_once "/usr/local/bin/vendor/autoload.php";//modify by your environment

//specify file
$xlsFile ='/var/www/html/test/taste_test.xlsx';

//load xlsx file
$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($xlsFile);

//convert to html
$writer = new \PhpOffice\PhpSpreadsheet\Writer\Html($spreadsheet);
	
//output to browser
$writer->save('php://output');
?>
