<?php
include_once 'init.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Отзывы</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <form  method="post" class="center-block form-review">
        <h2 class="center-block">Оставить отзыв</h2>
        <div class="form-group">
            <label for="name">Ф.И.О.</label>
            <input type="text" class="form-control" name="name" id="name"  required>
        </div>
        <div class="form-group">
            <label for="review">Текст Озыва</label>
            <textarea class="form-control" name="review" id="review" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Отправить</button>
    </form>

    <div class="reviews">
        <h2 class="center-block">Все отзывы:</h2>
        <div class="panel panel-primary">
            <div class="panel-heading">#1 Евгений Геннадиевич</div>
            <div class="panel-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias amet asperiores at blanditiis culpa cupiditate dolores fugiat harum ipsam molestias nesciunt odio, perspiciatis quo rerum suscipit veniam voluptatibus voluptatum. Provident?
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">#2 Евгений Геннадиевич</div>
            <div class="panel-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias amet asperiores at blanditiis culpa cupiditate dolores fugiat harum ipsam molestias nesciunt odio, perspiciatis quo rerum suscipit veniam voluptatibus voluptatum. Provident?
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">#4 Евгений Геннадиевич</div>
            <div class="panel-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias amet asperiores at blanditiis culpa cupiditate dolores fugiat harum ipsam molestias nesciunt odio, perspiciatis quo rerum suscipit veniam voluptatibus voluptatum. Provident?
            </div>
        </div>
    </div>
    <nav>
        <ul class="pagination">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>