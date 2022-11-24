<?php 
session_start();

$database = file_get_contents('data.json');
$database = json_decode($database, TRUE);

$user = [
    'username' => $_POST['username'],
    'password' => $_POST['password'],
];

$not_found = false;

foreach($database as $key => $registered_user){
    if($registered_user['username'] == $user['username']){
        if($registered_user['password'] == $user['password']){
            $_SESSION['login'] = true;
            $_SESSION['username'] = $user['username'];
            $_SESSION['message'] = 'Berhasil login!';

            header("Location: index.php");
            break;
        }else{
            $_SESSION['error'] = "Password salah";
            $not_found = true;
        }
    }else{
        $_SESSION['error'] = "Password salah";
    }
}
if($not_found == true){
    header("Location: login.php");
}
?>