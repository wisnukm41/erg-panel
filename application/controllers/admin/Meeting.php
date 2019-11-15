<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Meeting extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->library(['ion_auth', 'form_validation']);
            $this->load->model('meeting_model');

            if (!$this->ion_auth->logged_in())
            {
            // redirect them to the home page
            redirect('/', 'refresh');
            }
        }
        
        public function list($offset=0)
        {
         $meetings = $this->meeting_model->getAll();
         $per_page = 5;

         //pagination config
         $config['total_rows'] = $meetings->num_rows();
         $config['base_url'] = base_url('admin/meeting/list');
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
                'title' => 'Rapat || ERG',
                'meetings' => $this->meeting_model->getPage($per_page,$offset),
                'actives' => 'meeting',
            ];

            $this->load->view('_partials/header', $data);
            $this->load->view('admin/manage/list_meeting', $data);
            $this->load->view('_partials/footer');
        }

        public function add_meeting()
        {
            if(!$this->ion_auth->in_group(1) && !$this->ion_auth->in_group(7)) redirect('admin/meeting','refresh');
            $data = [
                'title' => 'Tambah Rapat || ERG',
                'actives' => 'meeting',
            ];

            $meeting = $this->meeting_model;
            $validation = $this->form_validation;
            $validation->set_rules($meeting->rules());

            if($validation->run()){
                $meeting->save();
                $this->session->set_flashdata('success','Berhasil Disimpan');
                redirect('admin/meeting','refresh');
            }
            
            $this->load->view('_partials/header',$data);
            $this->load->view('admin/manage/add_meeting');
            $this->load->view('_partials/footer');
        }

        public function edit_meeting($id)
        {
            if(!$this->ion_auth->in_group(1) && !$this->ion_auth->in_group(7)) redirect('admin/meeting','refresh');
            if(!isset($id)) redirect('admin/products','refresh');

            $meeting = $this->meeting_model;
            $validation = $this->form_validation;
            $title = [
                'title' => 'Ubah Rapat || ERG',
                'actives' => 'meeting',
            ];

            $validation->set_rules($meeting->rules());

            if($validation->run()){
                $meeting->update();
                $this->session->set_flashdata('success','Saved Successfully');
            }

            $this->load->view('_partials/header', $title);

            $data['meeting'] = $meeting->getById($id);

            if(!$data['meeting']) show_404();
            
            $this->load->view('admin/manage/edit_meeting', $data);
            
            $this->load->view('_partials/footer');
        }

        public function delete_meeting($id){
            if(!$this->ion_auth->in_group(1) && !$this->ion_auth->in_group(7)) redirect('admin/meeting','refresh');
            if(!isset($id)) show_404();
            if(!$this->ion_auth->in_group('1')) show_404();
            if($this->meeting_model->delete($id)){
                redirect(base_url('admin/meeting'),'refresh');
            }
         }
    
    }
    
    /* End of file Manage.php */
    