<?php

class AttendanceController extends Controller {

	public function index()
    {
        $attendance = new Attendance($this->db);
        $this->f3->set('attendances',$attendance->all());
        $this->f3->set('page_head','Attendance List');
        $this->f3->set('message', $this->f3->get('PARAMS.message'));
        $this->f3->set('view','user/attendance_list.htm');
	}

    public function create()
    {
        if($this->f3->exists('POST.create'))
        {
            $attendance = new Attendance($this->db);
            $attendance->add();

            $this->f3->reroute('/attendance/success/Attendance Counted');
        } else
        {
            $user = new User($this->db);
            $this->f3->set('employee_drp_data',$user->all());
            $this->f3->set('page_head','Attendance');
            $this->f3->set('view','user/create_attendance.htm');
        }

    }

    public function update()
    {

        $attendance = new Attendance($this->db);

        if($this->f3->exists('POST.update'))
        {
            $attendance->edit($this->f3->get('POST.id'));
            $this->f3->reroute('/attendance/success/Attendance Updated');
        } else
        {
            $attendance->getById($this->f3->get('PARAMS.id'));
            $user = new User($this->db);
            $this->f3->set('employee_drp_data',$user->all());
            $this->f3->set('attendance',$attendance);
            $this->f3->set('page_head','Update Attendance');
            $this->f3->set('view','user/update_attendance.htm');
        }

    }

    public function delete()
    {
        if($this->f3->exists('PARAMS.id'))
        {
            $attendance = new Attendance($this->db);
            $attendance->delete($this->f3->get('PARAMS.id'));
        }

        $this->f3->reroute('/attendance/success/Attendance Deleted');
    }
}

