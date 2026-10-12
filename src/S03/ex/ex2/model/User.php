<?php

/**
 * User class
 */
class User
{
    public int $user_id;
    public string $name;
    public string $password;

    function __construct(int $user_id, string $name, string $password)
    {
        $this->user_id = $user_id;
        $this->name = $name;
        $this->password = $password;
    }

}
