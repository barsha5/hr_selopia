<?php

class Attendance extends DB\SQL\Mapper {

    public function __construct(DB\SQL $db) {
        parent::__construct($db,'attendance');

    }

    public function all() {
        $this->employee_name = 'select name from employee where attendance.employee_id=employee.id';
        $this->load();
        return $this->query;
    }

    public function add() {
        $this->copyFrom('POST');
        $this->save();
    }

    public function getById($id) {
        $this->load(array('id=?',$id));
        $this->copyTo('POST');
    }

    public function edit($id) {
        $this->load(array('id=?',$id));
        $this->copyFrom('POST');
        $this->update();
    }

    public function delete($id) {
        $this->load(array('id=?',$id));
        $this->erase();
    }
}
