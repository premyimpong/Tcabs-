<?php
       include_once 'db.php';

if(isset($_POST['projectdesc']))
{
$data=$_POST['projectdesc'];
$pid=$_POST['pid'];
$text = "Project ID :- " . $pid . "\n" . "Description :- " . $data . "\n";
$fp = fopen('data.txt', 'a+');
fwrite($fp, $text);
echo 'Description saved';
fclose($fp);
	header("Location: Projects.html?descriptionsaved=success");
}

?>