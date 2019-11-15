<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class News extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('news_model');
    }
    
 
     public function index()
     {
        $per_page = 6;
        $from = $this->uri->segment(3);
        $totals = $this->news_model->count();
        $config['base_url'] = base_url('news/');
        $config['total_rows'] = $totals;
        $config['per_page'] = $per_page;
        
         $data = [
             'title' => 'News || ERG UNIKOM',
             'news' => $this->news_model->getFew($per_page,$from),
         ];
         $this->load->view('erg/header', $data);
         $this->load->view('erg/news', $data);
         $this->load->view('erg/footer');
         
     }
 
 }
 
 /* End of file News.php */
 