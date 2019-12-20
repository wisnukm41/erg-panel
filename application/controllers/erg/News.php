<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class News extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('news_model');
    }
    
    public function index($slug=null)
    {
        $data = [
            'title' => 'ERG | Berita',
            'news' => $this->news_model->getAll()->result(),
            'content' => $this->news_model->getBySlug($slug),
            'slug' => $slug
        ];
        $this->load->view('erg/header3', $data);
         $this->load->view('erg/details', $data);
         $this->load->view('erg/footer2');
    }
 
     public function list($offset=null)
     {  
        $news = $this->news_model->getAll();
        $per_page = 5;

        //pagination config
        $config['total_rows'] = $news->num_rows();
        $config['base_url'] = base_url('news/list');
        $config['per_page'] = $per_page;
        
        //boostrapp config
        $config['full_tag_open'] = "<ul class='pagination' style='position:relative;top=-25px'>";
        $config['full_tag_close'] = "</ul>";

        $config['num_tag_open'] = "<li class='page-item'>";
        $config['num_tag_close'] = "</li>";

        $config['cur_tag_open'] = "<li class='page-item active'><a class='page-link'>";
        $config['cur_tag_close'] = "<span class='sr-only'>(current)</span></a></li>";
        
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = "<li class='page-item'>";
        $config['next_tag_close'] = "</li>";
        
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = "<li class='page-item'>";
        $config['prev_tag_close'] = "</li>";
        
        $config['first_link'] = 'First';
        $config['first_tag_open'] = "<li class='page-item'>";
        $config['first_tag_close'] = "</li>";
        
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = "<li class='page-item'>";
        $config['last_tag_close'] = "</li>";

        $config['attributes'] = array('class' => 'page-link');
        
        $this->pagination->initialize($config);

           $data = [
               'page' => $this->pagination->create_links(),
               'offset' => $offset,
               'news' => $this->news_model->getPage($per_page,$offset),
               'title' => 'ERG | Berita'
           ];
        
         $this->load->view('erg/header3', $data);
         $this->load->view('erg/news', $data);
         $this->load->view('erg/footer3');
     }
 
 }
 
 /* End of file News.php */
 