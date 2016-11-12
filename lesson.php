<?php
$lesson = rand(02, 12);
echo $lesson;
if($lesson < 10) $lesson = '0'.$lesson;

header('Location: /'.$lesson);
