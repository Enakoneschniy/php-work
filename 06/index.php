<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 06 - form</title>
</head>
<body>
    <form action="" method="post">
        Имя <br><input type="text" name="name" value="<?=$_REQUEST['name']?>"><br>
        Возраст <br><input type="text" name="age" value="<?=$_REQUEST['age']?>"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <hr>
    <?php
        // var_dump($_GET);
        // var_dump($_POST);
        // var_dump($_REQUEST);

        if($_REQUEST['submit']):?>
            <p>Меня зовут: <?=$_REQUEST['name']?></p>
            <p>Мой возраст: <?=$_REQUEST['age']?></p>
        <?php endif?>
</body>
</html>