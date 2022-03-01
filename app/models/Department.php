<?php


class Department extends DB\SQL\Mapper
{
    public function __construct(DB\SQL $db) {
        parent::__construct($db,'department');
    }

    public function all() {
        $this->employee_name = 'select name from employee where department.department_head_id=employee.id';
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