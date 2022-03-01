<?php


class OrganigramController extends Controller
{

    public function index()
    {
        $organigram = new Organigram($this->db);
        $this->f3->set('organigram',$organigram->all());
        $this->f3->set('page_head','Selopia Organigram');
        $this->f3->set('message', $this->f3->get('PARAMS.message'));
        $this->f3->set('view','user/organigram_list.html');
    }

    public function create()
    {
        if($this->f3->exists('POST.create'))
        {
            $organigram = new Organigram($this->db);
            $organigram->add();

            $this->f3->reroute('/organigram/success/Added');
        } else
        {
            $user = new User($this->db);
            $this->f3->set('employee_drp_data',$user->all());
            $department = new Department($this->db);
            $this->f3->set('department_drp_data',$department->all());
            $this->f3->set('page_head','Organigram');
            $this->f3->set('view','user/create_organigram.html');
        }

    }

    public function update()
    {

        $organigram = new Organigram($this->db);

        if($this->f3->exists('POST.update'))
        {
            $organigram->edit($this->f3->get('POST.id'));
            $this->f3->reroute('/organigram/success/Organigram Data Updated');
        } else
        {
            $user = new User($this->db);
            $this->f3->set('employee_drp_data',$user->all());
            $department = new Department($this->db);
            $this->f3->set('department_drp_data',$department->all());
            $organigram->getById($this->f3->get('PARAMS.id'));
            $this->f3->set('organigram',$organigram);
            $this->f3->set('page_head','Update Organigram');
            $this->f3->set('view','user/update_organigram.html');
        }

    }

    public function delete()
    {
        if($this->f3->exists('PARAMS.id'))
        {
            $organigram = new Organigram($this->db);
            $organigram->delete($this->f3->get('PARAMS.id'));
        }

        $this->f3->reroute('/organigram/success/Organigram Record Deleted');
    }

}