<?php
$url = 'https://ftp.drupal.org/files/projects/views-7.x-3.13.tar.gz';
$file = 'downloads/file.tar.gz';
$a = file_get_contents($url);
$download = file_put_contents($file,$a);

if($download){
	echo "Download successful";
}
else {
	echo "Download failed";
}
?>
