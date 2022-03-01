<?php


class DepartmentController extends Controller
{
    public function index()
    {
        $department = new Department($this->db);
        $this->f3->set('departments',$department->all());
        $this->f3->set('page_head','Selopia Department List');
        $this->f3->set('message', $this->f3->get('PARAMS.message'));
        $this->f3->set('view','user/department_list.html');
    }

    public function create()
    {
        if($this->f3->exists('POST.create'))
        {
            $department = new Department($this->db);
            $department->add();

            $this->f3->reroute('/success/Department Added');
        } else
        {
            $user = new User($this->db);
            $this->f3->set('employee_drp_data',$user->all());
            $this->f3->set('page_head','Department');
            $this->f3->set('view','user/create_department.html');
        }

    }

    public function update()
    {

        $department = new Department($this->db);

        if($this->f3->exists('POST.update'))
        {
            $department->edit($this->f3->get('POST.id'));
            $this->f3->reroute('/success/Department Data Updated');
        } else
        {
            $user = new User($this->db);
            $this->f3->set('employee_drp_data',$user->all());
            $department->getById($this->f3->get('PARAMS.id'));
            $this->f3->set('department',$department);
            $this->f3->set('page_head','Update Department');
            $this->f3->set('view','user/update_department.html');
        }

    }

    public function delete()
    {
        if($this->f3->exists('PARAMS.id'))
        {
            $department = new Department($this->db);
            $department->delete($this->f3->get('PARAMS.id'));
        }

        $this->f3->reroute('/success/Department Deleted');
    }
}