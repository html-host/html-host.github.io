<?php
	if($_POST)
	{
		$name = rand(100000, 999999);
		$htmltext = $_POST['htmltext'];
		file_put_contents('/'.$name.'/index.html', $htmltext);
	}