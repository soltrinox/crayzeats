<?php

header('Content:application/json');

if(isset($_REQUEST['q'])){
	
	$output = shell_exec('python crayzeats.py --searchterm "'.  $_REQUEST['q']  .'"');
	//print_r($output);
	
	$terms = urldecode($_REQUEST['q']);
	$nf = str_replace(" ","%20", $terms);
	//$nf2 = str_replace("+","_", $nf);
	//$nf3 = str_replace("%20","_", $nf2);
	$filename = "/home/webs/crayzeats/" . $nf . ".json";
	$handle = fopen($filename, "r");
	$contents = fread($handle, filesize($filename));
	echo $contents;
	fclose($handle);
}


?>