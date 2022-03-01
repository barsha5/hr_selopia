<?php


class LeaveManagementController extends Controller
{

    public function index()
    {
        $leave_management = new LeaveManagement($this->db);
        $this->f3->set('leaveList',$leave_management->all());
        $this->f3->set('page_head','Selopia Leave Record List');
        $this->f3->set('message', $this->f3->get('PARAMS.message'));
        $this->f3->set('view','user/leave_management_list.html');
    }

    public function create()
    {
        if($this->f3->exists('POST.create'))
        {
            $leave_management = new LeaveManagement($this->db);
            $leave_management->add();

            $this->f3->reroute('/leaveManagement/success/New Leave Added');
        } else
        {
            $user = new User($this->db);
            $this->f3->set('employee_drp_data',$user->all());
            $this->f3->set('page_head','Leave Management');
            $this->f3->set('view','user/create_leave_management.html');
        }

    }

    public function update()
    {

        $leave_management = new LeaveManagement($this->db);

        if($this->f3->exists('POST.update'))
        {
            $leave_management->edit($this->f3->get('POST.id'));
            $this->f3->reroute('/leaveManagement/success/Leave Data Updated');
        } else
        {
            $user = new User($this->db);
            $this->f3->set('employee_drp_data',$user->all());
            $leave_management->getById($this->f3->get('PARAMS.id'));
            $this->f3->set('leaveList',$leave_management);
            $this->f3->set('page_head','Update Leave Information');
            $this->f3->set('view','user/update_leave_management.html');
        }

    }

    public function delete()
    {
        if($this->f3->exists('PARAMS.id'))
        {
            $leave_management = new LeaveManagement($this->db);
            $leave_management->delete($this->f3->get('PARAMS.id'));
        }

        $this->f3->reroute('/leaveManagement/success/Leave Record Deleted');
    }




}