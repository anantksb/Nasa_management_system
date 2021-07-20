<?php

$blob_id = $_REQUEST['blob_id']; //gets the request variable from the url that contains the id of the blob that we want to retrieve from the database
mysql_connect('database host-name', 'database user-name', 'password') OR DIE('Unable to connect to database! Please try again later.');
mysql_select_db('database-name');
$sql = "SELECT blob_name, blob_binary FROM tblBlob WHERE blob_id = '$blob_id'";
$result = mysql_query($sql) or exit("QUERY FAILED!");
list($blob_name, $blob_url, $blob_binary) = mysql_fetch_array($result);
header("Content-type: image/jpeg");
header("Content-Disposition: attachment; filename= $blob_name");
if ($_REQUEST['resize'] != "" && $_REQUEST['resize'] != null) { //resizes the images if the url contains
    $dimensions = explode(",", $_REQUEST['resize']);
    echo resize($blob_binary, $dimensions[0], $dimensions[1]);
} else {
    echo $blob_binary;
}

function resize($blob_binary, $desired_width, $desired_height) { // simple function for resizing images to specified dimensions from the request variable in the url
    $im = imagecreatefromstring($blob_binary);
    $new = imagecreatetruecolor($desired_width, $desired_height) or exit("bad url");
    $x = imagesx($im);
    $y = imagesy($im);
    imagecopyresampled($new, $im, 0, 0, 0, 0, $desired_width, $desired_height, $x, $y) or exit("bad url");
    imagedestroy($im);
    imagejpeg($new, null, 85) or exit("bad url");
    echo $new;
}

?>