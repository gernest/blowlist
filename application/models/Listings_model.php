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
    public function get_listings($id=FALSE)
    {
        if ($id===FALSE)
        {
            $query=$this->db->get('listings');
            return $query->result_array();
        }
        $query=$this->db->get_where('listings',array('id'=>$id));
        return$query->row_array();
    }
    public function set_listings()
    {
        $this->load->helper('url');
        $slug=url_title($this->input->post('title'),'dash',TRUE);
        $data=array(
            'title'=>$this->input->post('title'),
            'slug'=>$slug,
            'description'=>$this->input->post('description')
        );
        return $this->db->insert('listings',$data);
    }
}