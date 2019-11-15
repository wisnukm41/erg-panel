<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Products extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(['ion_auth', 'form_validation']);
        $this->load->model('product_model');
        $this->load->model('image_product_model');
        
        // $this->load->model('product_image');

        if (!$this->ion_auth->logged_in())
        {
        // redirect them to the home page
            redirect('/', 'refresh');
        }
    }

     public function list($offset=0)
     {
         $products = $this->product_model->getAll();
         $per_page = 10;

         //pagination config
         $config['total_rows'] = $products->num_rows();
         $config['base_url'] = base_url('admin/products/list');
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
             'products' =>$this->product_model->getPage($per_page,$offset),
             'title' => 'Produk || ERG',
             'actives' => 'product',
         ];

         $this->load->view('_partials/header', $data);
         $this->load->view('admin/product/list', $data);
         $this->load->view('_partials/footer');

     }

     public function add()
     {
        if(!$this->ion_auth->in_group('1') && !$this->ion_auth->in_group(7)) redirect('admin/products','refresh');
         $data['title'] = 'Tambah Data || ERG';
         $data['actives'] = 'product';

         $product = $this->product_model;
         $validation = $this->form_validation;
         $validation->set_rules($product->rules());

         if($validation->run()){
             $product->save();
             $this->session->set_flashdata('success','Berhasil Disimpan');
         }
         
         $this->load->view('_partials/header',$data);
         $this->load->view('admin/product/add');
         $this->load->view('_partials/footer');
     }

     public function edit($id = null)
     {
        if(!$this->ion_auth->in_group('1') && !$this->ion_auth->in_group(7)) redirect('admin/products','refresh');
        if(!isset($id)) redirect('admin/products','refresh');

        $product = $this->product_model;
        $validation = $this->form_validation;
        $title['title'] = 'Edit Produk || ERG';
        $title['actives'] = 'product';
        $validation->set_rules($product->rules());

        if($validation->run()){
            $product->update();
            $this->session->set_flashdata('success','Berhasil Disimpan');
        }
        $this->load->view('_partials/header', $title);

        $data['products'] = $product->getById($id);
        if(!$data['products']) show_404();
        
        $this->load->view('admin/product/edit', $data, FALSE);
        
        $this->load->view('_partials/footer');
     }

     public function delete($id=null){
        
        if(!isset($id)) show_404();
        if(!$this->ion_auth->in_group('1') && !$this->ion_auth->in_group(7)) redirect('admin/products','refresh');
        if($this->product_model->delete($id)){
            redirect(base_url('admin/products'),'refresh');
        }
     }

     public function image($id=null)
     {
        if(!isset($id)) show_404();
        
        $data = [
            'image' => $this->image_product_model->getAllById($id),
            'product' => $this->product_model->getById($id),
            'title' => 'Gambar Produk || ERG',
            'actives' => 'product',            
        ];

        $this->load->view('_partials/header', $data);
        $this->load->view('admin/product/image', $data);
        $this->load->view('_partials/footer');
     }

     public function add_image($id=null)
     {
        if(!$this->ion_auth->in_group('1')) redirect('admin/products','refresh');
        $image = $this->image_product_model;
        $validation = $this->form_validation;
        $validation->set_rules($image->rules());
        if (empty($_FILES['image']['name']))
            {
                $this->form_validation->set_rules('image', 'File', 'required');
            } 
        
         if($validation->run()){
             $image->save();
             $this->session->set_flashdata('success','Berhasil Disimpan');
         }
            
         $data = [
            'product' => $this->product_model->getById($id),
            'title' => 'Tambah Gambar Produk || ERG',
            'actives' => 'product',
        ];

         $this->load->view('_partials/header',$data);
         $this->load->view('admin/product/add_image',$data);
         $this->load->view('_partials/footer');
     }
     
     public function imagedelete($id=null,$product){
        if(!$this->ion_auth->in_group('1') && !$this->ion_auth->in_group(7)) redirect('admin/products','refresh');
        if(!isset($id)) show_404();
        
        if($this->image_product_model->delete($id)){
            redirect(base_url("admin/products/image/$product"),'refresh');
        }
     }
 }
 
 /* End of file Products.php */
 