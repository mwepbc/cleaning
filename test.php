<?php
include('assets/functions/connect.php');

$input = file_get_contents('php://input');
$data = json_decode($input, true);

$login = $data['login'];
$password = $data['password'];

if (($login != '') && ($password != '')) {
    $sql = 'SELECT *
    FROM users WHERE login=? AND password=?';
    $sth = $dbh->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
    $sth->execute([$login, $password]);
    $user = $sth->fetch();

    if ($user) {
        echo json_encode([
            'result' => 'Log in!',
            'id' => $user['id']
        ]);
    } else {
        echo json_encode(['error' => 'Incorrect login or password']);
    }
} else {
    echo json_encode(['error' => 'All inputs must be filled']);
}
