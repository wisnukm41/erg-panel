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

     public function index($year = NULL , $month = NULL)
     {

         $data = [
             'title' => 'Berita || ERG',
             'actives' => 'event',
             'calender' => $this->event_model->getcalender($year , $month),
             'caldata' => $this->event_model->getCalendarData($year, $month)
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
 