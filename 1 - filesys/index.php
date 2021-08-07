<?php

// // magic constant
// echo __DIR__.'<br>';
// echo __FILE__.'<br>';
// echo __LINE__.'<br>';

// make a folder

//mkdir('berkig');

// remove a folder
// rmdir('berkig');


$data = ['message' => 'ok', 'status' => 200];

$data['data'] = (file_get_contents('lorem.txt'));

$res = json_encode($data);

echo $res;