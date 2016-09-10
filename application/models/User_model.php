<?php

 
class User_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
        
     function gettop10users()
     {
        return $this->db->query("SELECT c_name,SUM(value) as mbuy FROM orders GROUP by c_name ORDER BY mbuy DESC LIMIT 5;")->result_array();
        
     }
     function gettop10mostsold()
     {
        return $this->db->query("SELECT p_name,COUNT(p_name) as msold FROM orders GROUP BY p_name ORDER BY msold DESC LIMIT 5;")->result_array();

     }
    
    function gettop10products()
    {
        return $this->db->query("SELECT p_name,SUM(value) as mprofit FROM orders GROUP BY p_name ORDER BY mprofit DESC LIMIT 5;" )->result_array();
       
     }

    function getgraphdata()
    { 
        return $this->db->query("SELECT SUM(value) as month from orders where EXTRACT(MONTH from order_date)='02';")->result_array(); 



    }


}

