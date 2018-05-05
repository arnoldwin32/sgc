<?php 
session_start();
$login = $_POST['loginname'];
$senha = $_POST['password'];

if( $login == 'arnojunio@hotmail.com')
{
$_SESSION['loginname'] = $login;
$_SESSION['password'] = $senha;
header('location:paginalogada.php');
}
else{
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    header('location:index.php');
    }
 
?>