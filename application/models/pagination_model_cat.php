<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagination_Model_Cat extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    //MOBILES
    public function record_count1() {
        //return $this->db->count_all("products");
        $this->db->where('category_id',1);
        $this->db->from('products');
        return $this->db->count_all_results();
    }

    public function fetch_records1($limit, $start) {
        //$offset = $start==0? 0: ($start-1)*$limit;

        $this->db->limit($limit, $start);
        //$query = $this->db->get("products");
        $query = $this->db->get_where("products",array(
               'category_id'=>1
              ));
        //$query= $this->db->query("select * from products");
        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        //print_r($query->result());exit;
        return false;
   }
    
    //TABLETS
    public function record_count2() {
        //return $this->db->count_all("products");
        $this->db->where('category_id',2);
        $this->db->from('products');
        return $this->db->count_all_results();
    }

    public function fetch_records2($limit, $start) {
        //$offset = $start==0? 0: ($start-1)*$limit;

        $this->db->limit($limit, $start);
        //$query = $this->db->get("products");
        $query = $this->db->get_where("products",array(
               'category_id'=>2
              ));
        //$query= $this->db->query("select * from products");
        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        //print_r($query->result());exit;
        return false;
   }
    
    //LAPTOPS
    public function record_count3() {
        //return $this->db->count_all("products");
        $this->db->where('category_id',3);
        $this->db->from('products');
        return $this->db->count_all_results();
    }

    public function fetch_records3($limit, $start) {
        //$offset = $start==0? 0: ($start-1)*$limit;

        $this->db->limit($limit, $start);
        //$query = $this->db->get("products");
        $query = $this->db->get_where("products",array(
               'category_id'=>3
              ));
        //$query= $this->db->query("select * from products");
        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        //print_r($query->result());exit;
        return false;
   }
    
    
    //MOTHERBOARDS
    public function record_count4() {
        //return $this->db->count_all("products");
        $this->db->where('category_id',4);
        $this->db->from('products');
        return $this->db->count_all_results();
    }

    public function fetch_records4($limit, $start) {
        //$offset = $start==0? 0: ($start-1)*$limit;

        $this->db->limit($limit, $start);
        //$query = $this->db->get("products");
        $query = $this->db->get_where("products",array(
               'category_id'=>4
              ));
        //$query= $this->db->query("select * from products");
        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        //print_r($query->result());exit;
        return false;
   }
    
    //PROCESSORS
    public function record_count5() {
        //return $this->db->count_all("products");
        $this->db->where('category_id',5);
        $this->db->from('products');
        return $this->db->count_all_results();
    }

    public function fetch_records5($limit, $start) {
        //$offset = $start==0? 0: ($start-1)*$limit;

        $this->db->limit($limit, $start);
        //$query = $this->db->get("products");
        $query = $this->db->get_where("products",array(
               'category_id'=>5
              ));
        //$query= $this->db->query("select * from products");
        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        //print_r($query->result());exit;
        return false;
   }
}
?>