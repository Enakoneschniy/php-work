<?php
include_once 'init.php';

$logger = new Logger(new FileLogger());
$animals = new Animals();
$logger->log('Создан объект класса Animals');
$animals->add(new Cat());
$logger->log('Добавили кошку');

$logger->setLogger(new XmlLogger());

$animals->add(new Cat());
$logger->log('Добавили еще кошку');
sleep(1);
$animals->add(new Dog());
$logger->log('Добавили собаку');
$animals->add(new Cat());
$logger->log('Добавили еще кошку');
sleep(2);
$animals->add(new Dog());
$logger->log('Добавили еще собаку');
$animals->add(new Dog());
$logger->log('Добавили еще собаку');
$logger->setLogger(new FileLogger());
$logger->log('Перекличка');
$animals->say();

echo '<hr>';

$db = DataBase::getInstance();
$db->tets();
echo $db->prop,"<br>";
$db->prop = 'LALALALLALA';
$db1 = DataBase::getInstance();
$db2 = DataBase::getInstance();
$db3 = DataBase::getInstance();
echo $db3->prop,"<br>";
echo $db->prop,"<br>";