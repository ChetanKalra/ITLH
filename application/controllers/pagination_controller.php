<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pagination_Controller extends CI_Controller {

public function __construct() {
        parent:: __construct();
        $this->load->helper("url");
        $this->load->model("pagination_model");
        $this->load->library("pagination");
    }

    public function getdetails() {
        $config = array();
        
        $config["total_rows"] = $this->pagination_model->record_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
        $config["base_url"] = base_url() . "pagination_controller/../../../../";
        $this->pagination->initialize($config);
        //echo $page;exit;

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->pagination_model->
        fetch_countries($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        //echo $config["uri_segment"];exit;
        //print_r($data);exit;

        $this->load->view("AllProducts", $data);
    }
}
?>