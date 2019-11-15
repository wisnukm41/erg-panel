<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Award extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
		    $this->load->library(['ion_auth', 'form_validation']);
            $this->load->model('award_model');

            if (!$this->ion_auth->logged_in())
		    {
			// redirect them to the home page
			    redirect('/', 'refresh');
		    }
        }
            
    
        public function list($offset=0)
        {
         $awards = $this->award_model->getAll();
         $per_page = 5;

         //pagination config
         $config['total_rows'] = $awards->num_rows();
         $config['base_url'] = base_url('admin/award/list');
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
                'awards' => $this->award_model->getPage($per_page,$offset),
                'title' => 'Prestasi || ERG',
                'actives' => "award",
            ];
   
            $this->load->view('_partials/header', $data);
            $this->load->view('admin/award/list', $data);
            $this->load->view('_partials/footer');
        }

        public function add()
        {
        if(!$this->ion_auth->in_group(1) && !$this->ion_auth->in_group(7)) redirect('admin/award','refresh');
            
         $data['title'] = 'Tambah Prestasi || ERG';
         $data['actives'] = "award";

         $award = $this->award_model;
         $validation = $this->form_validation;
         $validation->set_rules($award->rules());

         if($validation->run()){
             $award->save();
             $this->session->set_flashdata('success','Berhasil Disimpan');
         }
         
         $this->load->view('_partials/header',$data);
         $this->load->view('admin/award/add');
         $this->load->view('_partials/footer');
        }

        public function edit($id)
        {
        if(!isset($id)) redirect('admin/award','refresh');
        if(!$this->ion_auth->in_group(1) && !$this->ion_auth->in_group(7)) redirect('admin/award','refresh');

        $award = $this->award_model;
        $validation = $this->form_validation;
        $title['title'] = 'Edit Award || ERG';
        $title['actives'] = "award";
        $validation->set_rules($award->rules());

        if($validation->run()){
            $award->update();
            $this->session->set_flashdata('success','Berhasil Disimpan');
            redirect('admin/award','refresh');
        }
        $this->load->view('_partials/header', $title);

        $data['award'] = $award->getById($id);
        if(!$data['award']) show_404();
        
        $this->load->view('admin/award/edit', $data);
        
        $this->load->view('_partials/footer');
        }

        public function delete($id=null){
        
            if(!isset($id)) show_404();
            if(!$this->ion_auth->in_group(1) && !$this->ion_auth->in_group(7)) redirect('admin/award','refresh');
            
            if($this->award_model->delete($id)){
                redirect(base_url('admin/award'),'refresh');
            }
         }
    
    }
    
    /* End of file Award.php */
    