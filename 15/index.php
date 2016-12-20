<?php
include_once 'init.php';
var_dump($_COOKIE);
$user1 = new User('Vasya', 'vasya@gmail.com', '+380958976543');
echo $user1->email, '<br>';
echo $user1->phone, '<br>';

$user1->phone = '+380983498765';

echo $user1->email, '<br>';
echo $user1->phone, '<br>';

$user1->phone = '+38098349876s';//error
$user1->email = '+38098349876s';//error
$user1->email = 'e.nakoneschniy@gmail.com';//success

echo $user1->email, '<br>';
echo $user1->phone, '<br>';
//echo $user1;
$arUsers = [
    new User('Vasya','vs@gmail.com','+380974576543'),
    new User('Olya','ol@gmail.com','+380976776589'),
    new User('Vanya','van@gmail.com','+380979876578'),
    new User('Petya','pet@gmail.com','+380979876523')
];
echo "<hr>";
?>
<table border="1" cellspacing="0">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    <?php foreach ($arUsers as $user){
        echo $user;
    }?>
</table>
<?php
$user1('Dima','dimas@gmail.com','+380974578763');
echo $user1,"<br>";

Route::get('/15/', function (){
    echo 'Hello ... WTF?';
});
Route::get('/15/', 'User@index');