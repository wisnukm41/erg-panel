<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Post extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            $this->load->library('upload');
        }
        

    
        public function index()
        {
            
            redirect('/','refresh');
            
        }
        
        function upload_image(){
            if(isset($_FILES["image"]["name"])){
                $config['upload_path'] = './assets/uploads/images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('image')){
                    $this->upload->display_errors();
                    return FALSE;
                }else{
                    $data = $this->upload->data();
                    //Compress Image
                    $config['image_library']='gd2';
                    $config['source_image']='./assets/uploads/images/'.$data['file_name'];
                    $config['create_thumb']= FALSE;
                    $config['maintain_ratio']= TRUE;
                    $config['quality']= '60%';
                    $config['width']= 800;
                    $config['height']= 800;
                    $config['new_image']= './assets/uploads/images/'.$data['file_name'];
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();
                    echo base_url().'assets/uploads/images/'.$data['file_name'];
                }
            }
        }

        function delete_image(){
            $src = $this->input->post('src');
            $file_name = str_replace(base_url(), '', $src);
            if(unlink($file_name))
            {
                echo 'File Delete Successfully';
            }
        }
    
    }
    
    /* End of file Post.php */
    