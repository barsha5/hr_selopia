<?php
class LogIn extends DB\SQL\Mapper
{
    public function __construct(DB\SQL $db) {
        parent::__construct($db,'login');
    }

    public function login_checker($username, $password) {
        $auth = new Auth($this, array('id'=>'email','pw'=>'password'));
        return $auth->login($username, md5($password));
    }

}