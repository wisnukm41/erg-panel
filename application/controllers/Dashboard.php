<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Dashboard extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('image_model');
            $this->load->model('award_model');
            $this->load->model('news_model');
        }
        
    
        public function index()
        {
            $data = [
                'title' => 'ERG - Develop To Contribute',
                'slides' => $this->image_model->getCarousel(),
                'active_slide' => $this->image_model->getCarouselActive(),
                'awards' => $this->award_model->getAll()->result(),
                'news' => $this->news_model->getAll()->result(),
            ];
            
            $this->load->view('erg/secure', $data);
            $this->load->view('erg/header2', $data);
            $this->load->view('erg/home', $data);
            $this->load->view('erg/footer2');
        }
    
    }
    
    /* End of file Dashboard.php */
    