<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Event extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(['ion_auth', 'form_validation']);
        $this->load->model('event_model');
        // $this->load->model('product_image');

        if (!$this->ion_auth->logged_in())
        {
        // redirect them to the home page
            redirect('/', 'refresh');
        }
    }

     public function list($offset=0)
     {
        $event = $this->event_model->getAll();
        $per_page = 10;

        //pagination config
        $config['total_rows'] = $event->num_rows();
        $config['base_url'] = base_url('admin/event/list');
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
             'event' => $this->event_model->getPage($per_page,$offset),
             'title' => 'Berita || ERG',
             'actives' => 'event',
         ];

         $this->load->view('_partials/header', $data);
         $this->load->view('admin/event/list', $data);
         $this->load->view('_partials/footer');

     }

     public function add()
     {
        if(!$this->ion_auth->in_group('1') && !$this->ion_auth->in_group(7)) redirect('admin/event','refresh');
        
         $data['title'] = 'Tambah Berita || ERG';
         $data['actives'] = 'event';
         $event = $this->event_model;
         $validation = $this->form_validation;
         $validation->set_rules($event->rules());

         if($validation->run()){
             $event->save();
             $this->session->set_flashdata('success','Berhasil Disimpan');
         }
         
         $this->load->view('_partials/header',$data);
         $this->load->view('admin/event/add');
         $this->load->view('_partials/footer');
     }

     public function edit($id = null)
     {
        if(!$this->ion_auth->in_group('1') && !$this->ion_auth->in_group(7)) redirect('admin/event','refresh');
        if(!isset($id)) redirect('admin/event','refresh');

        $event = $this->event_model;
        $validation = $this->form_validation;
        $validation->set_rules($event->rules());
        $title['title'] = 'Edit Berita || ERG';
        $title['actives'] = 'event';

        if($validation->run()){
            $event->update();
            $this->session->set_flashdata('success','Berhasil Disimpan');
            redirect('admin/event','refresh');
        }
        $this->load->view('_partials/header', $title);

        $data['event'] = $event->getById($id);
        if(!$data['event']) show_404();
        
        $this->load->view('admin/event/edit', $data);
        
        $this->load->view('_partials/footer');
     }

     public function delete($id=null){
        if(!$this->ion_auth->in_group('1') && !$this->ion_auth->in_group(7)) redirect('admin/event','refresh');
        if(!isset($id)) show_404();
        
        if($this->event_model->delete($id)){
            redirect(base_url('admin/event'),'refresh');
        }
     }

    //  public function image($id=null)
    //  {
    //     if(!isset($id)) show_404();
    //  }
 
 }
 
 /* End of file Event.php */
 