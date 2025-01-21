<?php

namespace App\Controllers;
use App\Models\ProjectModel;
use CodeIgnitor\Controller;
class ProjectController extends BaseController
{
    public function AddRecord(): string
    {
        return view('addrecord');
    }
    public function Index()
    {
        $um=new ProjectModel();
        $data['users']=$um->orderBy("id","DESC")->findAll();
        return view('projectlist',$data);
    }
    public function CreateRecord(){
    $userdata=new ProjectModel();
    $date=date("Y-m-d");
    $data=[
'projectname'=>$this->request->getvar('projectname'),
'description'=>$this->request->getvar('description'),
'status'=>$this->request->getvar('status'),
        ];
$userdata->insert($data);
return $this->response->redirect(site_url('/'));
    }
    public function EditShow($id){
        $um=new ProjectModel();
        $data['users']=$um->Where("id",$id)->first();
        
        return view('editdata',$data);
    }



    public function DeleteRecord($id){
        $um=new ProjectModel();
        $data['users']=$um->Where("id",$id)->delete();
        return $this->response->redirect(site_url('/'));
    }

public function UpdateRecord(){
$value=new ProjectModel();
$id=$this->request->getvar("pid");
$data=[
'projectname'=>$this->request->getvar('projectname'),
'description'=>$this->request->getvar('description'),
'status'=>$this->request->getvar('status'),
];
$value->update($id,$data);
return $this->response->redirect(base_url('/'));

}
}
