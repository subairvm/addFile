<?php

$file_name =$_FILES['myfile']['name'];
$temp =$_FILES['myfile']['tmp_name'];

$new_file_name =time().$file_name;

 move_uploaded_file($temp, "uploads/".$new_file_name);

?>
