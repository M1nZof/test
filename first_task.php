<?php
$a = [];

for($i = 1; $i < 1000; $i++)
{
	for($k = 0; $k < strlen($i); $k++)
	{
		$i = strval($i);
		if ($i[$k] == 2)
		{
			$a[] = $i;
			break;
		}
	}
}
foreach($a as $elem) echo $elem.'<br>';
?>