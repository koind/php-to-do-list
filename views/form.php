<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>ToDoList</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php if (isset($siteUrl)) { echo $siteUrl; } ?>views/css/style.css">
</head>
<body>
<div class="wrapper">
    <section class="form item">
        <h3><?php echo $res['item']; ?></h3>
        <form action="loading.php" method="post">
            <input type="hidden" name="itemId" value="<?php echo $res['id']; ?>">
            <button type="submit" class="btn btn-2 btn-2c">Выполнил</button>
        </form>
    </section>
</div>
</body>
</html>