<?php
/**
 * Created by PhpStorm.
 * User: gernest
 * Date: 4/11/15
 * Time: 5:46 AM
 */

class Listings_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_listings($slug=FALSE)
    {
        if ($slug===FALSE)
        {
            $query=$this->db->get('listings');
            return $query->result_array();
        }
        $query=$this->db->get_where('listings',array('slug'=>$slug));
        return$query->row_array();
    }
}