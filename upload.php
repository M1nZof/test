<?php
$file = fopen("db.csv", "r");
if (!is_dir("upload"))
{
	mkdir("upload");
}
while(!feof($file))
{
	$line = fgets($file);
	$line = explode(",", $line);
	$new_file = fopen("upload/$line[0]", 'a');
	fwrite($new_file, $line[1]);
	fclose($new_file);
}
fclose($file);
?>