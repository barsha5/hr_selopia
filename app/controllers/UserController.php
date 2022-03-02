<?php

class UserController extends Controller {

	public function index()
    {
        $user = new User($this->db);
        $this->f3->set('users',$user->all());
        $this->f3->set('page_head','Employee List');
        $this->f3->set('message', $this->f3->get('PARAMS.message'));
        $this->f3->set('view','user/employee_list.htm');
	}

    public function create()
    {
        if($this->f3->exists('POST.create'))
        {
            $user = new User($this->db);
            $user->add();

            $this->f3->reroute('/employee/success/New User Created');
        } else
        {
            $this->f3->set('page_head','Add New Employee');
            $this->f3->set('view','user/create.htm');
        }

    }

    public function update()
    {

        $user = new User($this->db);

        if($this->f3->exists('POST.update'))
        {
            $user->edit($this->f3->get('POST.id'));
            $this->f3->reroute('/employee/success/User Updated');
        } else
        {
            $user->getById($this->f3->get('PARAMS.id'));
            $this->f3->set('user',$user);
            $this->f3->set('page_head','Update Employee Info');
            $this->f3->set('view','user/update.htm');
        }

    }

    public function delete()
    {
        if($this->f3->exists('PARAMS.id'))
        {
            $user = new User($this->db);
            $user->delete($this->f3->get('PARAMS.id'));
        }

        $this->f3->reroute('/employee/success/User Deleted');
    }
}
