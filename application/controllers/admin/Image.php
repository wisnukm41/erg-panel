<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Image extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->library(['ion_auth', 'form_validation']);
            $this->load->model('image_model');
            if (!$this->ion_auth->logged_in())
            {
            // redirect them to the home page
                redirect('/', 'refresh');
            }
        }
    
        public function list($offset=0)
        {
         $image = $this->image_model->getAll();
         $per_page = 3;

         //pagination config
         $config['total_rows'] = $image->num_rows();
         $config['base_url'] = base_url('admin/image/list');
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
                'images' => $this->image_model->getPage($per_page,$offset),
                'title' => 'Gallery || ERG',
                'actives' => 'image',
            ];
   
            $this->load->view('_partials/header', $data);
            $this->load->view('admin/image/list', $data);
            $this->load->view('_partials/footer');
        }
        
        public function add()
        {
            if(!$this->ion_auth->in_group(1) && !$this->ion_auth->in_group(7)) redirect('admin/image','refresh');
            $data['title'] = 'Tambah Gambar || ERG';
            $data['actives'] = 'image';

            $image = $this->image_model;
            $validation = $this->form_validation;
            $validation->set_rules($image->rules());
            if (empty($_FILES['image']['name']))
            {
                $this->form_validation->set_rules('image', 'File', 'required');
            }  
            if($validation->run()){
                $image->save();
                $this->session->set_flashdata('success','Berhasil Disimpan');
            } else {
                
            }
            
            $this->load->view('_partials/header',$data);
            $this->load->view('admin/image/add');
            $this->load->view('_partials/footer');
        }

        public function edit($id = null)
        {
            if(!$this->ion_auth->in_group(1) && !$this->ion_auth->in_group(7)) redirect('admin/image','refresh');
            if(!isset($id)) redirect('admin/image','refresh');

            $image = $this->image_model;
            $validation = $this->form_validation;
            $title['title'] = 'Edit Gambar || ERG';
            $title['actives'] = 'image';

            $validation->set_rules($image->rules());

            if($validation->run()){
                $image->update();
                $this->session->set_flashdata('success','Berhasil Disimpan');
                
            }
            $this->load->view('_partials/header', $title);

            $data['image'] = $image->getById($id);
            if(!$data['image']) show_404();
            
            $this->load->view('admin/image/edit', $data, FALSE);
            
            $this->load->view('_partials/footer');
        }

        public function delete($id=null){

            if(!$this->ion_auth->in_group(1) && !$this->ion_auth->in_group(7)) redirect('admin/image','refresh');
            if(!isset($id)) show_404();
            
            if($this->image_model->delete($id)){
                redirect(base_url('admin/image'),'refresh');
            }
        }

    }
    
    /* End of file Image.php */
    