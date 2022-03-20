<?php

include '../../class/User.class.php';
if (isset($_POST['login']))
{
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $user = new User();

    $user   -> setEmail($email)
            -> setPassword($password);

    $result    = $user->login();

    if ($result)
    {
        $_SESSION['userName'] = $user->getName();
        $_SESSION['userID']   = $user->getID();

        header('REFRESH:2;URL=index.php');
    }

}