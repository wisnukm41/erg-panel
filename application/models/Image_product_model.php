<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Image_product_model extends CI_Model {
    
        private $table = 'products_images';

        public $id;
        public $product_id;
        public $path;
    
        public function rules()
        {
            return [
                ['field' => 'product_id',
                'label' => 'product_id',
                'rules' => 'required'],
            ];
        }

        public function getAllById($id)
        {
            return $this->db->get_where($this->table , ['product_id' => $id])->result();
        }

        public function getById($id)
        {
            return $this->db->get_where($this->table, ['id' => $id])->row();
        }

        public function save()
        {
            $post = $this->input->post();
            $this->product_id = $post['product_id'];
            $this->id = uniqid();
            $this->path = $this->uploadImage();
            $this->db->insert($this->table, $this);
        }

        public function delete($id)
        {
            $this->deleteImage($id);
            return $this->db->delete($this->table,['id' => $id]);
        }

        private function uploadImage()
        {
            $config['upload_path']      = './assets/uploads/product/';
            $config['allowed_types']    = 'gif|jpg|png';
            $config['file_name']        =  $this->id;
            $config['overwrite']        = true;
            $config['max_size']         = 1024;

            $this->load->library('upload', $config);
            
            if($this->upload->do_upload("image")) {
                return $this->upload->data("file_name");
            } else {
                return array('error' => $this->upload->display_errors());
            }
            
        }

        private function deleteImage($id)
        {
            $image = $this->getById($id);
            $filename = explode('.',$image->path)[0];
            return array_map('unlink', glob(FCPATH."assets/uploads/product/$filename.*"));
        }
    }
    
    /* End of file Image_product_model.php */
    