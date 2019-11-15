<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Erg extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
		    $this->load->library(['ion_auth', 'form_validation']);
            $this->load->helper(['url']);
            $this->load->model('image_model');
            $this->load->model('product_model');
            $this->load->model('news_model');
            $this->load->model('member_model');
            $this->load->model('chat_model');

            if (!$this->ion_auth->logged_in())
		    {
			// redirect them to the home page
			    redirect('/', 'refresh');
		    }
        }
        
        public function index()
        {
            $data = [
                'title' => 'Dashboard || ERG',
                'news_count' => $this->news_model->count(),
                'product_count' => $this->product_model->count(),
                'image_count' => $this->image_model->count(),
                'member_count' => $this->member_model->count(),
                'chats' => $this->chat_model->getAll(),
                'list_members' => $this->member_model->getList(),
            ];
            $this->load->view('_partials/header', $data);
            $this->load->view('admin/dashboard', $data);
            $this->load->view('_partials/footer');
        }
        
        public function Not_Found404()
        {
           $data = [
               'title'=>'Not Found || ERG'
            ];

            $this->load->view('_partials/header', $data);
            $this->load->view('_partials/not_found404');
            $this->load->view('_partials/footer');
        }

        public function add_chat()
        {
            if($this->ion_auth->in_group(1)||$this->ion_auth->in_group(3)||$this->ion_auth->in_group(7)){
                    $this->chat_model->save();
                    redirect('admin','refresh');
            }
        }

        public function delete($id)
        {
            if($this->ion_auth->in_group(1)||$this->ion_auth->in_group(3)||$this->ion_auth->in_group(7)){
                    $this->chat_model->delete($id);
                    redirect('admin','refresh');
            }
        }
    }
    
    /* End of file Erg.php */
    