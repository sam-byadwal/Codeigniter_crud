<?php

class user extends CI_controller{

function index(){
    $this-> load->model('User_model');
   
    $users = $this ->User_model->all();
    $data = array();
    $data['users'] = $users;
    $this -> load->view('list',  $data );
    

}




//create
function  create(){
    $this-> load->model('User_model');
    $this->form_validation->set_rules('name','NAME','required');
    $this->form_validation->set_rules('email','Email','required|valid_email');
    
    if($this-> form_validation->run() == false){
        $this->load->view('create');
    } else {
        

//save user/data to database 
$formArray = array();
$formArray ['name'] =$this ->input->post('name');
$formArray ['email'] =$this ->input->post('email');
$formArray ['created_at'] = date('Y-m-d');

$this-> User_model -> create($formArray);

$this-> session->set_flashdata('success', 'Record added successfully');
redirect(base_url().'index.php/user/index');

    }
}


//edit 
function edit ($userId){
    $this->load->model('User_model');
    $user = $this->User_model->getUser($userId);
    $data =array();
    $data['user'] = $user;
 $this->load->view('edit' , $data);


}
//edit-updateuser
function updateuser($userId){
$this->load->model('User_model');
    $user = $this->User_model->getUser($userId);
    $data =array();
    $data['user'] = $user;

    $this->form_validation->set_rules('name','NAME','required');
    $this->form_validation->set_rules('email','Email','required|valid_email');


    if( $this->form_validation->run() == false){
        $this->load->view('edit' , $data);
    }
    else{
        //updateuser 
        $formArray = array();
        $formArray['name']  = $this->input->post('name');
        $formArray['email']  = $this->input->post('email');
        $this-> User_model->updateuser($userId , $formArray);
        $this->session -> set_flashdata('success','Record updated successfully');
        redirect(base_url().'index.php/user/index');
    }
 

}


                //delete user 
                function delete($userId)
                {

                $this->load->model('User_model');
                $user=$this-> User_model->getUser($userId);
                if(empty($user)){
                    $this->session -> set_flashdata('failure','Record NOT found in DATABASE successfully');
                    redirect(base_url().'index.php/user/index');
                }
                else
                {
               $this->User_model->deleteuser($userId);
               $this->session -> set_flashdata('success','Record DELETED successfully');
               redirect(base_url().'index.php/user/index');
                }
                }


              
        
    
}
                

?>