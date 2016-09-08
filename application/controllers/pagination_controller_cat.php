<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pagination_Controller_Cat extends CI_Controller {

public function __construct() {
        parent:: __construct();
        $this->load->helper("url");
        $this->load->model("pagination_model_cat");
        $this->load->library("pagination");
    }

    public function getdetails1() {
        $config = array();
        
        $config["total_rows"] = $this->pagination_model_cat->record_count1();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        $config["base_url"] = base_url() . "pagination_controller/../../../../";
        $this->pagination->initialize($config);
        //echo $page;exit;

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->pagination_model_cat->
        fetch_records1($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $data["Category"]=1;
        //echo $config["uri_segment"];exit;
        //print_r($data);exit;

        $this->load->view("Cat_Products", $data);
    }
    
    public function getdetails2() {
        $config = array();
        
        $config["total_rows"] = $this->pagination_model_cat->record_count2();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        $config["base_url"] = base_url() . "pagination_controller/../../../../";
        $this->pagination->initialize($config);
        //echo $page;exit;

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->pagination_model_cat->
        fetch_records2($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        //echo $config["uri_segment"];exit;
        //print_r($data);exit;
        $data["Category"]=2;

        $this->load->view("Cat_Products", $data);
    }
    
    public function getdetails3() {
        $config = array();
        
        $config["total_rows"] = $this->pagination_model_cat->record_count3();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        $config["base_url"] = base_url() . "pagination_controller/../../../../";
        $this->pagination->initialize($config);
        //echo $page;exit;

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->pagination_model_cat->
        fetch_records3($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        //echo $config["uri_segment"];exit;
        //print_r($data);exit;
        $data["Category"]=3;

        $this->load->view("Cat_Products", $data);
    }
    
    public function getdetails4() {
        $config = array();
        
        $config["total_rows"] = $this->pagination_model_cat->record_count4();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        $config["base_url"] = base_url() . "pagination_controller/../../../../";
        $this->pagination->initialize($config);
        //echo $page;exit;

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->pagination_model_cat->
        fetch_records4($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        //echo $config["uri_segment"];exit;
        //print_r($data);exit;
        $data["Category"]=4;

        $this->load->view("Cat_Products", $data);
    }
    
    public function getdetails5() {
        $config = array();
        
        $config["total_rows"] = $this->pagination_model_cat->record_count5();
        $config["per_page"] = 5;
        $config["uri_segment"] = 3;
        $config["base_url"] = base_url() . "pagination_controller/../../../../";
        $this->pagination->initialize($config);
        //echo $page;exit;

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->pagination_model_cat->
        fetch_records5($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        //echo $config["uri_segment"];exit;
        $data["Category"]=5;
		//print_r($data);
		//if($data->results=="") echo "Y";
		//exit;
		
        $this->load->view("Cat_Products", $data);
    }
}
?>