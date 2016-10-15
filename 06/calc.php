<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
    <form>
        <div>
            <input type="number" name="a" value="0" required>
        </div>
        <div>
            <input type="number" name="b" value="0" required>
        </div>
        <div>
            <select name="operation" style="width:100px">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </div>
        <div>
            <input type="submit" name="calc" value="Result">
        </div>
    </form>
    <hr>

    <?php 
        if($_REQUEST['calc']){
            $a = $_REQUEST['a'];
            $b = $_REQUEST['b'];

            switch ($_REQUEST['operation']) {
                case '+':
                    # code...
                    break;
                case '-':
                    # code...
                    break;
                case '*':
                    # code...
                    break;
                case '/':
                    # code...
                    break;
                
                default:
                    echo "Operation not found!";
                    break;
            }
        }
    ?>

    <?php
        var_dump($_REQUEST);
    ?>
</body>
</html>