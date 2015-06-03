<?php 
$files = array();
if(is_array($user_recent_data->data)) { 
	foreach($user_recent_data->data as $feed_data) {

		$files[] = $feed_data->images->standard_resolution->url;
	} 
	# create new zip opbject
	$zip = new ZipArchive();

	# create a temp file & open it
	$tmp_file = tempnam('.','');
	$zip->open($tmp_file, ZipArchive::CREATE);

	# loop through each file
	foreach($files as $file){
		# download file
		$download_file = file_get_contents($file);
		#add it to the zip
		$zip->addFromString(basename($file),$download_file);
	}

	# close zip
	$zip->close();

	# send the file to the browser as a download
	header('Content-disposition: attachment; filename='.$user_data->data->username.'.zip');
	header('Content-type: application/zip');
	readfile($tmp_file);
	unlink($tmp_file);
}