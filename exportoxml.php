<?php
error_reporting(0);
ini_set('display_errors', 0);

function getXmlHeader($s) {
	return preg_replace("/[^A-Za-z]/", '', strtolower($s));
}

function getXmlData($s) {
	return htmlspecialchars($s);
}

$data = print_r($_POST['data'], true);
//$data = file_get_contents('data.txt');

$thSyntax = '"rows":[{"type":"thead","cells":[';
$thSyntaxEnd = ']}';

$p = strpos($data, $thSyntax);
$th = substr($data, $p + strlen($thSyntax));

$p = strpos($th, $thSyntaxEnd);
$th = substr($th, 0, $p);
$th = substr($th, 1);
$th = substr($th, 0, strlen($th)-1);
$th = explode('","', $th);
foreach ($th as &$d) {
	$d = getXmlHeader($d);
}

$tdSyntax = ',{"type":"tbody"';
$tdSyntaxEnd = ',{"type":"tfoot",';
$p = strpos($data, $tdSyntax);
$td = substr($data, $p + 1);

$p = strpos($td, $tdSyntaxEnd);
$td = substr($td, 0, $p);
$td = substr($td, 1);

$td = explode('},{', $td);
foreach ($td as &$d) {
	$start = '"type":"tbody","cells":[';
	$p = strpos($d, $start);
	$d = substr($d, $p + strlen($start));
	$d = substr($d, 1, strlen($d)-3);
	$d = explode('","', $d);
	foreach ($d as &$e) {
		$e = getXmlData($e);
	}
}

$out  = '<?xml version="1.0" encoding="UTF-8"?>';
$out .= "\r\n<items>\r\n";
foreach($td as $d) {
	$out .= "\t<item>\r\n";
	foreach ($d as $index => $e) {
		$out .= sprintf(
			"\t\t<%s>%s</%s>\r\n",
			$th[$index],
			$e,
			$th[$index]
		);
	}
	$out .= "\t</item>\r\n";
}
$out .= "</items>\r\n";

header('Content-disposition: attachment; filename="Datatable Base.xml"');
header('Content-type: "text/xml"; charset="utf8"');
header("Expires: 0");

echo $out;
