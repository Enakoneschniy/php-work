<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tour calc</title>
</head>
<body>
    <?php
        $countries = [
            [
                'name' => 'Египет',
                'price' => 100
            ],
            [
                'name' => 'Турция',
                'price' => 90
            ],
            [
                'name' => 'Испания',
                'price' => 200
            ],
            [
                'name' => 'Италия',
                'price' => 150
            ]
        ];
    ?>
    <form method="post">
        <div>
            <label for="days">Days count:</label>
            <input id="days" name="days" type="number" required value="10">
        </div>
        <div>
            <label for="country">Country</label>
            <select id="country" name="country">
                <?php foreach($countries as $key => $country):?>
                    <option value="<?=$key?>"><?=$country['name']?></option>
                <?php endforeach?>
            </select>
        </div>
        <div>
            <input type="submit" name="calc" value="Calculate">
        </div>
    </form>
    <hr>
    <?php
        $index = $_REQUEST['country'];
        echo "Country: ",$countries[$index]['name'], "<br>";
        echo "Price: ",$countries[$index]['price'] * $_REQUEST['days'], "грн.";

        // var_dump($_REQUEST);
        // var_dump($countries[$index]);
    ?>
</body>
</html>