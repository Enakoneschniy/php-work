<?php
$host = 'localhost';
$db = 'test';
$user = 'root';
$password = '35865103';
$charset = 'utf8';


echo "Start script<br>";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$opt = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
try{
    $pdo = new PDO($dsn, $user, $password, $opt);
    $pdo->query('SET NAMES utf8');
    $pdo->query('SET CHARSET utf8');
    $stmt = $pdo->query('SELECT id, name, email FROM users');
    $arUsers = [];
    while($row = $stmt->fetch()){
        $arUsers[] = $row;
    }
    //var_dump($arUsers);

}catch(PDOException $e){
    die('Подключение не удалось: ' . $e->getMessage());
}
if(count($arUsers) > 0){
    ?>
    <table border="1" cellspacing="0">
        <thead>
            <tr>
                <th>#</th>
                <th>Имя</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($arUsers as $user):?>
                <tr>
                    <td><?=$user['id']?></td>
                    <td><?=$user['name']?></td>
                    <td><?=$user['email']?></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>

    <?php
}

if(isset($_REQUEST['uid'])){
    //не безопасно!!!!! так не писать
    $stmt = $pdo->query('SELECT id, name, email FROM users WHERE id='.$_REQUEST['uid']);
    $arUsers = [];
    $user = $stmt->fetch();
    var_dump($user);

    //безопасный вариант
    $sql = 'SELECT id, name, email FROM users WHERE id=?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_REQUEST['uid']]);
    $user = $stmt->fetch(PDO::FETCH_OBJ);
    var_dump($user);
    echo $user->name,"<br>";
}
$sql = 'INSERT INTO users (name, email, age, password) VALUES(:name, :email, :age, :password);';
try{

$stmt = $pdo->prepare($sql);
$stmt->execute([
    'age' => 234,
    'name' => 'Наполеон',
    'email' => 'tortsdik@mail.ru',
    'password' => 'secret',
 ]);
}catch(PDOException $e){
    die($e->getMessage());
}

var_dump($stmt);
echo "End script<br>";
