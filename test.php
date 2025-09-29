<?php 

$input = file_get_contents('php://input');
$data= json_decode($input, true);

$login = $data['login'];
$password = $data['password'];

if(($login != '') && ($password != '')){
    echo json_encode(['result' => 'aaaaa']);
}
else{
    echo json_encode(['result'=>'Заполните все поля']);
}

?>