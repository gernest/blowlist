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
    }

    public function index()
    {
        $data['listings']=$this->listings_model->get_listings();
        $data['title']='shit listings';

        $this->load->view('templates/header',$data);
        $this->load->view('listings/index',$data);
        $this->load->view('templates/footer',$data);
    }

    public function view($slug=Null)
    {
        $data['listing_item']=$this->listings_model->get_listings($slug);

        if (empty($data['listing_item']))
        {
            show_404();
        }
        $data['title']=$data['listing_item']['title'];

        $this->load->view('templates/header',$data);
        $this->load->view('listings/view',$data);
        $this->load->view('templates/footer',$data);
    }
}