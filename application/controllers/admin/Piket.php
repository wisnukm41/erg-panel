<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Piket extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(['ion_auth', 'form_validation']);
        $this->load->model('piket_model');
        $this->load->model('member_model');
        $this->load->helper('form');

        // $this->load->model('product_image');

        if (!$this->ion_auth->logged_in())
        {
        // redirect them to the home page
            redirect('/', 'refresh');
        }
    }

     public function index()
     {
         $day = Date('w')-1;
         $data = [
             'piket' => $this->piket_model->getAll(),
             'title' => 'Berita || ERG',
             'actives' => 'piket',
             'days' => ['Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'],
             'pikets' => 'piket-'.$day
         ];

         $this->load->view('_partials/header', $data);
         $this->load->view('admin/piket/list', $data);
         $this->load->view('_partials/footer');
     }

     public function add()
     {
        if(!$this->ion_auth->in_group(1) && !$this->ion_auth->in_group(7)) redirect('admin/piket','refresh');
         
         $data['title'] = 'Tambah Data Piket || ERG';
         $data['actives'] = 'piket';

         $data['drop_option_d'] = [
             'class' => 'custom-select',
             'id' => 'day'
         ];
         $data['drop_option_m'] = [
             'class' => 'custom-select input-group',
             'id' => 'member_dropdown',
         ];

         $data['drop_option_p'] = [
            'class' => 'custom-select',
            'id' => 'place'
         ];

         $data['days'] = ['Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'];

         $members = $this->member_model->getPiket();
         $allmembers = [];
         foreach ($members as $m) {
             $allmembers[$m->id] = $m->username;
         };
         $data['members'] = $allmembers;

         $data['places'] = ['Lab Atas', 'Lab Bawah'];

         $piket = $this->piket_model;
         $validation = $this->form_validation;
         $validation->set_rules($piket->rules());

         if($validation->run()){
             $piket->save();
             $this->session->set_flashdata('success','Berhasil Disimpan');
             redirect('/admin/piket','refresh');
         }
         
         $this->load->view('_partials/header',$data);
         $this->load->view('admin/piket/add',$data);
         $this->load->view('_partials/footer');
     }

     public function edit($id = null)
     {
        if(!$this->ion_auth->in_group(1) && !$this->ion_auth->in_group(7)) redirect('admin/piket','refresh');
        if(!isset($id)) redirect('admin/piket','refresh');

        $data['title'] = 'Edit Data Piket || ERG';
        $data['actives'] = 'piket';
        $data['p_member'] = $this->piket_model->getOne($id);

        $data['drop_option_d'] = [
            'class' => 'custom-select',
            'id' => 'day'
        ];
        $data['drop_option_m'] = [
            'class' => 'custom-select input-group',
            'id' => 'member_dropdown',
        ];

        $data['drop_option_p'] = [
           'class' => 'custom-select',
           'id' => 'place'
        ];

        $data['days'] = ['Senin','Selasa','Rabu','Kamis','Jum\'at','Sabtu'];

        $members = $this->member_model->getPiket();
        $allmembers = [];
        foreach ($members as $m) {
            $allmembers[$m->id] = $m->username;
        };
        $data['members'] = $allmembers;

        $data['places'] = ['Lab Atas', 'Lab Bawah'];

        $piket = $this->piket_model;
        $validation = $this->form_validation;
        $validation->set_rules($piket->rules());

        if($validation->run()){
            $piket->update();
            $this->session->set_flashdata('success','Berhasil Disimpan');
            redirect('/admin/piket','refresh');
        }

        $this->load->view('_partials/header', $data);
        
        $this->load->view('admin/piket/edit', $data);
        
        $this->load->view('_partials/footer');
     }

     public function delete($id=null){
        if(!$this->ion_auth->in_group(1) && !$this->ion_auth->in_group(7)) redirect('admin/news','refresh');
        
        if(!isset($id)) show_404();
        
        if($this->piket_model->delete($id)){
            redirect(base_url('admin/piket'),'refresh');
        }
     }

     private function getCurrent(Type $var = null)
     {
         # code...
     }

    //  public function image($id=null)
    //  {
    //     if(!isset($id)) show_404();
    //  }
 
 }
 
 /* End of file News.php */
 