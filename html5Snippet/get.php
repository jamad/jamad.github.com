<?php

header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Origin: http://echo.html5snippet.net');

if (isset($_GET['file']))
{
    switch($_GET['file'])
	{

		case 'blenderMonkey3.js':
			die (file_get_contents("blenderMonkey3.js"));
		break;
	}
}
