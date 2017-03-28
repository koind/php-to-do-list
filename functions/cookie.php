<?php

function cookies()
{
	$id = rand(1, 255);
	setcookie('user', $id, time()+86400);
	return $id;
}