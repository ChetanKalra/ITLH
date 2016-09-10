<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productdetails extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
    public function __construct() {
        parent:: __construct();
        $this->load->helper("url");
        $this->load->model("pagination_model");
        $this->load->library("pagination");
    }
    
    
	public function index()
	{
        $this->load->helper('url');
        
        $this->load->helper('html');
		$this->load->view('indexc');
	}
    
    public function productdetail($id)
    {
        $this->load->model('sitedetails');
        $res=$this->sitedetails->getmodeldetails($id);
		$res1=$this->sitedetails->getmodelImages($id);
        
          $data=array(
        
            'res'=> $res,
			'res1'=> $res1
        );
        //print_r($data);exit;
        $this->load->view('indexc',$data);
    }
    
    public function ProductListing($id,$page)
    {
        
        if($id=="Mobiles"||$id=="mobiles"||$id=="MOBILES")
        {
            $id=1;
        }
        else if($id=="Tablets"||$id=="tablets"||$id=="TABLETS")
        {
            $id=2;
        }
        else if($id=="Laptops"||$id=="laptops"||$id=="LAPTOPS")
        {
            $id=3;
        }
        else if($id=="Motherboards"||$id=="motherboards"||$id=="MOTHERBOARDS")
        {
            $id=4;
        }
        else if($id=="Processors"||$id=="processors"||$id=="PROCESSORS")
        {
            $id=5;
        }
        
        $page= $page*5-4;
        
        
        $this->load->model('sitedetails');
        $res=$this->sitedetails->getProductdetails($id,$page);
        $maxid= $this->sitedetails->getMaxId($id,$page);
        //$this->sitedetails->deleteproduct($id, $page, $productid);
        
        $data=array(
        
            'res'=>$res,
            'cat_id'=>$id,
            'maxID'=>$maxid,
            'page'=>$page
        );
        
        //print_r($data);exit;
        
        $this->load->view('ProductListing',$data);
        
    }
    
    public function ReassignAllProducts($id)
    {
        $catID= $this->input->post("catID");
        $this->load->model('sitedetails');
        //echo "ID=".$id;
        //echo "Reassign to=".$catID;exit;
        $this->sitedetails->ReassignAll($catID,$id);
        redirect('../../../../../../pagination_controller_cat/getdetails1/');
    }
    
    public function ReassignOne($id)
    {
        $catID= $this->input->post("catID");
        echo $catID; echo "<br>";
       // echo $id;exit;
        $this->load->model('sitedetails');
        $this->sitedetails->ReassignOne($catID,$id);
        redirect('../../../../../ProductListing/Mobiles/1');
    }
    
    public function deleteproduct($did)
    {
        $this->load->model('sitedetails');
        //echo $did;
        //exit;
        $this->sitedetails->deleteproduct($did);
        //redirect('../../../../../ProductListing/Mobiles/1');
		redirect('../../../../../../pagination_controller/getdetails/');
    }
    
     public function Editpage($did)
    {
    
        $this->load->model('sitedetails');
        $res= $this->sitedetails->Editproductdetails($did);
        //print_r($res);exit;
        $data=array(
        
            'res'=>$res,
            'id'=> $did
        );
        $this->load->view('productEdit',$data);
    }
    
    public function getalldetails($page)
    {
        $this->load->model('sitedetails');
        $page= $page*5-4;
        $res= $this->sitedetails->getdetails($page);
        $maxid= $this->sitedetails->getMax();
        
        //print_r($res);exit;
        
        $data = array(
        
            'res'=> $res,
            'maxID'=>$maxid,
            'page'=>$page
        
        );
        //print_r($data);exit;
        $this->load->view('ProductListing',$data);
    }
    
    public function AddProduct()
    {
        $this->load->view('productAdd');
    }
	public function add()
	{
		$Name= $this->input->post("name");
		$Quantity= $this->input->post("quantity");
		$Price= $this->input->post("price");
		$Category= $this->input->post("category");
		$Description= $this->input->post("description");
		$this->load->model('sitedetails');
		//echo $Name;echo $Quantity;echo $Price;echo $Category;echo $Description;
		//exit;
		$this->sitedetails->AddProduct($Name,$Quantity,$Price,$Category,$Description);
		redirect('../../../../../pagination_controller/getdetails/');
		
		
	}
	
	public function Edit($id)
	{
		$Name= $this->input->post("name");
		$Quantity= $this->input->post("quantity");
		$Price= $this->input->post("price");
		$Category= $this->input->post("category");
		$Description= $this->input->post("description");
		$this->load->model('sitedetails');
		//echo $Name. "<br>";echo $Quantity. "<br>";echo $Price. "<br>";echo $Category. "<br>";echo $Description. "<br>";echo $id;
		//exit;
		$this->sitedetails->Update($Name,$Quantity,$Price,$Category,$Description,$id);
		redirect('../../../../../../pagination_controller/getdetails/');
		
		
	}
	
	

}

