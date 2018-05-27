<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cetak</title>
</head>
<body>
<h3><u>After Dice Rolled</u></h3>
	<p><b>Player 1</b> =
	<?php
		foreach ($pertama_rolled as $value_1)
		{
			echo $value_1.',';
		}
	?>
	</p>
	<p><b>Player 2</b> =
	<?php
		foreach ($kedua_rolled as $value_2)
		{
			echo $value_2.',';
		}
	?>
	</p>
	<p><b>Player 3</b> =
	<?php
		foreach ($ketiga_rolled as $value_3)
		{
			echo $value_3.',';
		}
	?>
	</p>
	<p><b>Player 4</b> =
	<?php
		foreach ($keempat_rolled as $value_4)
		{
			echo $value_4.',';
		}
	?>
	</p>
</br>
<h3><u>After Dice Moved/Removed</u></h3>
	<p><b>Player 1</b> =
	<?php
		foreach ($pertama_after as $value_1)
		{
			echo $value_1.',';
		}
	?>
	</p>
	<p><b>Player 2</b> =
	<?php
		foreach ($kedua_after as $value_2)
		{
			echo $value_2.',';
		}
	?>
	</p>
	<p><b>Player 3</b> =
	<?php
		foreach ($ketiga_after as $value_3)
		{
			echo $value_3.',';
		}
	?>
	</p>
	<p><b>Player 4</b> =
	<?php
		foreach ($keempat_after as $value_4)
		{
			echo $value_4.',';
		}
	?>
	</p>
</body>
</html>