<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 06 - form</title>
</head>
<body>
    <style>
        textarea{
            resize: none;
        }
    </style>
    <form action="" method="post">
        Имя <br><input type="text" name="name" value="<?=$_REQUEST['name']?>"><br>
        Возраст <br><input type="text" name="age" value="<?=$_REQUEST['age']?>"><br>
        <textarea name="description" rows="5" cols="31"><?=$_REQUEST['description']?></textarea>
        <br>
        <input id="remember" type="checkbox" name="remember">
        <label for="remember">Remember me</label>
        <br>
        <div>
            <br>
            Are You smoke?
            <br>
            <input id="s1" type="radio" name="smoke" value="yes">
            <label for="s1">Yes</label>

            <input id="s2" type="radio" name="smoke" value="no">
            <label for="s2">No</label>
        </div>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <hr>
    <?php
        // var_dump($_GET);
        // var_dump($_POST);
         var_dump($_REQUEST);

        if($_REQUEST['submit']):?>
            <p>Меня зовут: <?=$_REQUEST['name']?></p>
            <p>Мой возраст: <?=$_REQUEST['age']?></p>
            
        <?php endif?>
</body>
</html>