<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>ToDoList</title>
	<link rel="stylesheet" href="<?php if (isset($siteUrl)) { echo $siteUrl; } ?>views/css/style.css">
</head>
<body>
	<div class="wrapper">
		<section class="form">
			<h3>Напишите свой список задач в поле ниже.</h3>
			<form action="index.php" method="post">
				<textarea name="list" required></textarea>
				<button class="btn4 btn-4 btn-4c" type="submit">Продолжить</button>
			</form>
		</section>
	</div>		
</body>
</html>