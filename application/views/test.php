<!DOCTYPE html>
<html lang = "en">

<head>
	<meta charset = "utf-8">
	<title>CodeIgniter View Example</title>
</head>

<body>

<p><?php print_r($records[0]->roll_no)?></p>
<p><?php print_r($records[0]->name)?></p>
<p><?php print_r(count($records))?></p>


<p><?php
	/** @var  $i */
	$i = 0;
	do {
		print($records[$i]->roll_no ."&nbsp;&nbsp;&nbsp;" .$records[$i]->name." <br>");
		print("<br>");
		$i++;
	} while ($i < count($records));
	?></p>

</body>

</html>
