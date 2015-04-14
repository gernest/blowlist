<?php
/**
 * Created by PhpStorm.
 * User: gernest
 * Date: 4/11/15
 * Time: 6:11 AM
 */

class Listings extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('listings_model');
        $this->load->helper('form');
    }

    public function index()
    {
        $data['listings']=$this->listings_model->get_listings();
        $data['title']='shit listings';
        $this->load->view('listings/index',$data);
    }
    public function all(){
        $data=$this->listings_model->get_listings();
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($data));
    }
    public function view($id=Null)
    {
        $data['list']=$this->listings_model->get_listings($id);
        $this->load->view('listings/view',$data);
    }

    public function create()
    {
        $data=array(
            'title'=>$this->input->post('title'),
            'description'=>$this->input->post('description')
        );
        $data=$this->listings_model->set_listings();
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($data));
    }
}