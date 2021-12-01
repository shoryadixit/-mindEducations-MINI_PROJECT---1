<?php

$file_name = $_GET['file']."pdf";
$file_path = "uploadcourses/pdf/".$file_name;

header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="'.$file_name.'"');
header('Accept-Ranges: bytes');
@readline($file_path);  

?>