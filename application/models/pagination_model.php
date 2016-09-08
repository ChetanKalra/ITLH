<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagination_Model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function record_count() {
        return $this->db->count_all("products");
    }

    public function fetch_countries($limit, $start) {
        //$offset = $start==0? 0: ($start-1)*$limit;

        $this->db->limit($limit, $start);
        $query = $this->db->get("products");

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