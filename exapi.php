<?php
$type = $_GET['type']; 
if($type == 'php'){
	echo $data = file_get_contents('arphi_json.php');
	echo $data2; 
}
?>