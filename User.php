<?php

class User
{

    private $username = null;
    private $password = null;
    private $email = null;
    private $connected = 0;

    public function __construct($username, $password, $email)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getConnected()
    {
        return $this->connected; 
    }

}