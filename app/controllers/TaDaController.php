<?php


class TaDaController extends Controller
{
    private $image_name = "";

    public function index()
    {
        $tada = new TaDa($this->db);
        $this->f3->set('tada',$tada->all());
        $this->f3->set('page_head','Selopia Allowance List');
        $this->f3->set('message', $this->f3->get('PARAMS.message'));
        $this->f3->set('view','user/tada_list.html');
    }

    function uploader() {
        $this->f3->set('UPLOADS','ui/assets/tada_image/');
        $overwrite = false;
        $files = Web::instance()->receive(function($file,$formFieldName){
            return true;
        }, $overwrite, function($fileBaseName, $formFieldName){
                $file_data = pathinfo($fileBaseName);
                $this->image_name = "tada"  . "_" . time() . "_" . rand(10000,99999) . "." . $file_data['extension'] ;
                return $this->image_name;
            }
        );
    }

    public function create()
    {
        if($this->f3->exists('POST.create'))
        {
            $tada = new TaDa($this->db);
            $this->image_name = "defaultImage.jpg";
            $this->uploader();
            $tada->add($this->image_name);
            $this->f3->reroute('/tada/success/Added');
        } else {
            $user = new User($this->db);
            $this->f3->set('employee_drp_data',$user->all());
            $allowanceCategory = new AllowanceCategory($this->db);
            $this->f3->set('category_drp_data',$allowanceCategory->all());
            $this->f3->set('page_head','Enter Allowance');
            $this->f3->set('view','user/create_tada.html');
        }

    }

    public function update()
    {

        $tada = new TaDa($this->db);

        if($this->f3->exists('POST.update'))
        {
            $tada->edit($this->f3->get('POST.id'));
            $this->f3->reroute('/tada/success/Allowance Data Updated');
        } else
        {
            $user = new User($this->db);
            $this->f3->set('employee_drp_data',$user->all());
            $allowanceCategory = new AllowanceCategory($this->db);
            $this->f3->set('category_drp_data',$allowanceCategory->all());
            $tada->getById($this->f3->get('PARAMS.id'));
            $this->f3->set('tada',$tada);
            $this->f3->set('page_head','Update Allowance');
            $this->f3->set('view','user/update_tada.html');
        }

    }

    public function delete()
    {
        if($this->f3->exists('PARAMS.id'))
        {
            $tada = new TaDa($this->db);
            $tada->delete($this->f3->get('PARAMS.id'));
        }

        $this->f3->reroute('/tada/success/Allowance Deleted');
    }


}