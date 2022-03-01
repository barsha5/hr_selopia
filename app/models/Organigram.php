<?php


class Organigram extends DB\SQL\Mapper
{
    public function __construct(DB\SQL $db) {
        parent::__construct($db,'organigram');
    }

    public function all() {
        $this->employee_name = 'select name from employee where organigram.employee_id=employee.id';
        $this->dept_initial = 'select department_initial from department where organigram.department_id=department.id';
        $this->department_name = 'select department_name from department where organigram.department_id=department.id';
        $this->manager_name = 'select name from employee where organigram.manager_id=employee.id';
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