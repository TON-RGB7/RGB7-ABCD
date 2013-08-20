<?php 

include_once('../../config/connect.php');


$action 				= mysql_real_escape_string($_POST['action']); 
$updateRecordsArray 	= $_POST['recordsArray'];

if ($action == "updateRecordsListings"){
	
	
			
	$listingCounter = 1;
	foreach ($updateRecordsArray as $recordIDValue) {
		
		$query = "update car_album set car_num = " . $listingCounter . " where
		 car_album = " . $recordIDValue;
		mysql_query($query) or die('Error, insert query failed');
		$listingCounter = $listingCounter + 1;	
	}
	
//	echo '<pre>';
//	print_r($updateRecordsArray);
//	print_r($text.$status);
//	echo '</pre>';
//	echo 'If you refresh the page, you will see that records will stay just as you modified.';
}
?>