<?php


class TaDa extends DB\SQL\Mapper
{
    public function __construct(DB\SQL $db) {
        parent::__construct($db,'ta_da');
    }

    public function all() {
        $this->employee_name = 'select name from employee where ta_da.employee_id=employee.id';
        $this->allowanceCategory = 'select category_name from employee_allowance_category where ta_da.category=employee_allowance_category.id';
        $this->approval_provider = 'select name from employee where ta_da.approved_by=employee.id';
        $this->load();
        return $this->query;
    }

    public function add($image_url) {
        $this->copyFrom('POST');
        $this->image_url = $image_url;
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