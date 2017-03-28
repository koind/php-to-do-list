<?php

require_once __DIR__ . '/functions/cookie.php';
require_once __DIR__ . '/functions/config.php';
require_once __DIR__ . '/models/ToDoList.php';

if (!empty($_COOKIE)) {
    header('Location: ' . $siteUrl . 'list.php');
} else {
    if (!empty($_POST)) {

        if (!empty($_POST['list']) && $_POST['list'] !== ' ') {
            $list = trim(strip_tags($_POST['list']));
            $data = explode("\n", $list);

            if (empty($_COOKIE['user'])) {
                $cookies = cookies();
            }

            if (isset($data) && isset($cookies)) {
                toDoList_Insert($data, $cookies);
                header('Location: ' . $siteUrl . 'list.php');
                die;
            }
        }

    }
}

include_once __DIR__ . '/views/index.php';