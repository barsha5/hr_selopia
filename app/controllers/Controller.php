<?php

class Controller {

	protected $f3;
	protected $db;

	function beforeroute() {
        new Session();
        if( !($this->f3->exists('SESSION.isLoggedIn') && $this->f3->get('SESSION.isLoggedIn') == TRUE ) ) {
            $this->f3->reroute('/');
        }
		$this->f3->set('message','');
	}

	function afterroute() {
		echo Template::instance()->render('layout.htm');
        $this->f3->set( 'SESSION.validator_errors', '' );
	}

	function __construct() {

        $f3=Base::instance();

        $db=new DB\SQL(
            $f3->get('db_dns') . $f3->get('db_name'),
            $f3->get('db_user'),
            $f3->get('db_pass')
        );	

		$this->f3=$f3;
		$this->db=$db;
	}

    protected function validator(array $data = [], array $rules = []) {

        $validator = \Validator::instance();
        return count($rules) <=0 ? $validator : $validator->validate($data, $rules);
    }

}
