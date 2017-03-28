<?php

require_once __DIR__ . '/models/ToDoList.php';
require_once __DIR__ . '/functions/config.php';

if (!empty($_POST['itemId'])) {
    $itemId = (int)trim(strip_tags($_POST['itemId']));
    toDoList_Delete($itemId);
    header('Location: ' . $siteUrl . 'list.php');
    die;
} else {
    header('Location: ' . $siteUrl . 'list.php');
    die;
}