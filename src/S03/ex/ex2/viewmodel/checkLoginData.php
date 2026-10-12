<?php

require_once "../model/User.php";

function checkLoginData(User $user, string $username, string $password)
{
    $checkedName = $user->name;
    $checkedPassword = $user->password;

    if ($checkedName == $username && $checkedPassword == $password) {
        return $user;
    }
    return;
}
