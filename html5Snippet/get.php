<?php

header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Origin: http://echo.html5snippet.net');


if (isset($_GET['file']))
{
    switch($_GET['file'])
	{
		case 'texture.jpg':
			header('Content-Type: image/jpg');
			die (file_get_contents("texture.jpg"));
		break;
		
		case 'model.js':
			die (file_get_contents("blenderMonkey3.js"));
		break;
	}
}
