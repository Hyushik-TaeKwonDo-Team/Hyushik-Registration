<?php

// Check if session is not registered, redirect back to main page. 
session_start();
if(!session_is_registered(myusername)){
	header("location:main_login.php");
}


$path_parts = pathinfo($_GET['download_file']);
$file_name  = $path_parts['basename'];
$file_path  = 'data/' . $file_name;



if ($fd = fopen ($file_path, "r")) {
    $fsize = filesize($file_path);
    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=\"".$file_name."\"");
	
    header("Content-length: $fsize");
    header("Cache-control: private"); //use this to open files directly
    while(!feof($fd)) {
        $buffer = fread($fd, 2048);
        echo $buffer;
    }
}
fclose ($fd);
exit;
// example: place this kind of link into the document where the file download is offered:
// <a href="download.php?download_file=some_file.pdf">Download here</a>
?>