<?php

class Sitedetails extends CI_Model
{

    public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
    
  /*  function getmodeldetails(){
    

        $this->db->select('name,price,quantity,description');
         $this->db->from('products');
         $this->db->where('id', $id);
         $query = $this->db->get(''); 
        
        
         //print_r($query->result_array());exit;
         return $query->result(); 
        
        $query= $this->db->query("select  p.name,p.price,p.quantity,p.description,i.img_path from products p inner join product_images i on p.id=i.Product_id where id= "$id");
        //print_r($query->result_array());exit;
        return $query->result();
        
 } */
    
    function getProductdetails($page){
        
        
        $offset= $page-1;
        $query=$this->db->query("select name,category_id,price,quantity,id from products LIMIT 5 OFFSET $offset");
        //print_r($query->result_array());exit;
        return $query->result();
        
    }
    
    function getMaxId($id,$page){
        
        $query=$this->db->query("select count(id) as id from products where category_id=$id");
        //print_r($query->result_array());exit;
        //$page= $page*5;
        return $query->result();
        //return $page;
    }    
    function Editproduct($name,$price,$quantity,$id)
    {
        $query= $this->db->query("update products set name=$name,price=$price,quantity=$quantity where category_id= $id");
    }
    
    function deleteproduct($did)
    {
        $query= $this->db->query("delete from products where id=$did");
    }
    
    function getdetails($page){

        $offset= $page-1;
        $query= $this->db->query("select name,category_id,id , price, quantity from products limit 5 offset $offset");
        //print_r($query->result());exit;
        return $query->result();
    }
    
    function getMax(){
        
        $query=$this->db->query("select count(id) as id from products");
        //print_r($query->result());exit;
        //$page= $page*5;
        return $query->result();
        //return $page;
    }   
    
    function ReassignAll($catID,$id)
    {
        $query= $this->db->query("update products set category_id= $catID where category_id= $id");
    }
    
    
    function Editproductdetails($did)
    {
        $query= $this->db->query("select name, price, quantity, description from products where id=$did");
       // print_r($query->result_array());exit;
        return $query->result();
    }
}

?>