<?php

class User {

    protected $username;
    public $password;
    public $id;

    public function __construct($id = null, $username = null, $password = null)
    {
        $this->$id = $id;
        $this->$username = $username;
        $this->$password = $password;
    }

    public static function loginUser($user, $base) {
       if($base[0]['username'] == $user->username && 
        $base[0]['password'] == $user->password)
            return true;
        return false;
    }
}