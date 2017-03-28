<?php

require_once __DIR__ . '/../functions/sql.php';

function toDoList_Insert($arr, $userId)
{
	foreach ($arr as $key) {
		$sql = "
			INSERT INTO list
			(userId, item)
			VALUES
			('" . $userId . "', '" . $key . "')
		";
		sql_Exec($sql);
	}	
}

function toDoList_Select($userId)
{
	$sql = "
		SELECT id, item FROM list
		WHERE userId='" . $userId . "'
	";
	return sql_Query($sql);
}

function toDoList_Delete($itemId)
{
    $sql = "
        DELETE FROM list
        WHERE id='" . $itemId . "'
    ";
    sql_Delete($sql);
}