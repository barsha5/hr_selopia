<?php


class AllowanceCategoryController extends Controller
{
    public function index()
    {
        $allowance_category = new AllowanceCategory($this->db);
        $this->f3->set('categories', $allowance_category->all());
        $this->f3->set('page_head','Employee Allowance Category List');
        $this->f3->set('message', $this->f3->get('PARAMS.message'));
        $this->f3->set('view','user/allowance_category_list.html');
    }

    public function create()
    {
        if($this->f3->exists('POST.create'))
        {
            $allowance_category = new AllowanceCategory($this->db);
            $allowance_category->add();

            $this->f3->reroute('/allowanceCategory/success/New Category Added');
        } else
        {
            $this->f3->set('page_head','Allowance Category');
            $this->f3->set('view','user/create_allowance_category.html');
        }

    }

    public function update()
    {

        $allowance_category = new AllowanceCategory($this->db);

        if($this->f3->exists('POST.update'))
        {
            $allowance_category->edit($this->f3->get('POST.id'));
            $this->f3->reroute('/allowanceCategory/success/Category Updated');
        } else
        {
            $allowance_category->getById($this->f3->get('PARAMS.id'));
            $this->f3->set('allowance_category',$allowance_category);
            $this->f3->set('page_head','Update Category');
            $this->f3->set('view','user/update_allowance_category.html');
        }

    }

    public function delete()
    {
        if($this->f3->exists('PARAMS.id'))
        {
            $allowance_category = new AllowanceCategory($this->db);
            $allowance_category->delete($this->f3->get('PARAMS.id'));
        }

        $this->f3->reroute('/allowanceCategory/success/Allowance Category Deleted');
    }
}