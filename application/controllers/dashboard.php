<?php

 
class dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    } 

    
    function admin()
    {
        $data['users'] = $this->User_model->gettop10users();
        $data['mostprofitable'] = $this->User_model->gettop10products();
         $data['mostsold'] = $this->User_model->gettop10mostsold();
         $data['graphdata'] = $this->User_model->getgraphdata();
         
        
        $this->load->view('index',$data);
    }

    
    
}

   