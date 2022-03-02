<?php
class LogInController extends NoUserController
{
    public function index()
    {
        if($this->f3->exists('POST.login'))
        {
            $login = new LogIn($this->db);
            $loginStatus = $login->login_checker($this->f3->get('POST.email'), $this->f3->get('POST.password'));
            if($loginStatus) {
                new Session();
                $this->f3->set('SESSION.isLoggedIn', TRUE);
                $this->f3->reroute('/employee');
            }
            else {
                $this->f3->reroute('/failed/Login Failed');
            }
        } else {
            $this->f3->set('message', $this->f3->get('PARAMS.message'));
            $this->f3->set('page_head','Login');
            $this->f3->set('view','user/login.html');
        }
    }
    public function logout()
    {
        new Session();
        $this->f3->set('SESSION.isLoggedIn', FALSE);
        $this->f3->clear('SESSION.isLoggedIn');
        $this->f3->reroute('/');
    }

}