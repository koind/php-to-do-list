<?php

require_once __DIR__ . '/models/ToDoList.php';
require_once __DIR__ . '/functions/config.php';

if (!empty($_COOKIE)) {

	if (!empty($_COOKIE['user'])) {
		$userId = $_COOKIE['user'];
		$res = toDoList_Select($userId);

		if (false !== $res) {
            require_once __DIR__ . '/functions/config.php';
            include_once __DIR__ . '/views/form.php';
        } else {
            setcookie('user', '', time()-((86400*30)*12));
            header('Location: ' . $siteUrl . 'index.php');
            die;
        }

	}

} else {
	header('Location: ' . $siteUrl . 'index.php');
	die;
}