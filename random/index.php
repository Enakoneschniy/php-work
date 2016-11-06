<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random</title>
</head>
<body>
    <?php
        $students = [
            'Поддубный Александр',
            'Черкашин Николай',
            'Овчаренко Виктор',
            'Парамзина Елена',
            'Пономаренко Максим',
            'Лемеш Александр',
            'Нарожный  Илья',
            'Хлестков Алексей',
            'Островский Александр',
            'Курцев Юрий',
            'Курцев Максим',
            'Ачкасов Никита',
            'Сердюк Евгений',
            'Капелько Евгений', 
            'Костенко Михаил'
        ];
    ?>
    <form method="post">
        <input type="submit" name="start" value="Start">
    </form>
    <?php
        if($_REQUEST['start']){
            shuffle($students);
            $num = rand(0, 14);
            printf("<h2>%s</h2><strong>Count:</strong> %d", $students[$num], rand(1, 4));
        }
    ?>
</body>
</html>