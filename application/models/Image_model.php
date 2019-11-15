<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Image_model extends CI_Model {
        
        private $table = 'image';

        public $id;
        public $name;
        public $carousel;
        public $img;
        public $description;
    
        public function rules()
        {
            return [
                ['field' => 'name',
                'label' => 'Topik',
                'rules' => 'required'],
            ];
        }

        public function getAll()
        {
            return $this->db->order_by('','DESC')->get($this->table);
        }

        public function getPage($perpage,$offset)
        {
            return $this->db->order_by('','DESC')->get($this->table,$perpage,$offset)->result();
        }

        public function getById($id)
        {
            return $this->db->get_where($this->table, ['id' => $id])->row();
        }

        public function getCarouselActive()
        {
            $this->db->select('*');
            $this->db->from($this->table);
            $this->db->where('carousel', 1);
            $this->db->limit(1,5);
            return $this->db->get()->row();
        }

        public function getCarousel()
        {
            $this->db->select('*');
            $this->db->from($this->table);
            $this->db->where('carousel', 1);
            $this->db->limit(5);
            $this->db->order_by('','desc');
            return $this->db->get()->result();
        }
        public function save()
        {
            $post = $this->input->post();
            $this->description = $post['description'];
            $this->name = $post['name'];
            $this->carousel = 0;
            if(isset($post['carousel'])){
                $this->carousel = 1;
            }
            $this->id = uniqid();
            $this->img = $this->uploadImage();
            $this->db->insert($this->table, $this);
        }

        public function update()
        {
            $post = $this->input->post();
            $this->id = $post['id'];
            $this->description = $post['description'];
            $this->name = $post['name'];

            if(!empty($_FILES["image"]["name"])){
                $this->img = $this->uploadImage();
            } else {
                $this->img = $post['old_img'];
            }
            $this->carousel = 0;
            if(isset($post['carousel'])){
                $this->carousel = 1;
            }
            $this->db->update($this->table, $this, ['id' => $post['id']]);
        }

        public function delete($id)
        {
            $this->deleteImage($id);
            return $this->db->delete($this->table,['id' => $id]);
        }

        private function uploadImage()
        {
            $config['upload_path']      = './assets/uploads/images/';
            $config['allowed_types']    = 'gif|jpg|png';
            $config['file_name']        =  $this->name;
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
            $filename = explode('.',$image->img)[0];
            return array_map('unlink', glob(FCPATH."assets/uploads/images/$filename.*"));
        }
        
        public function count()
        {
            return $this->db->get($this->table)->num_rows();   
        }
    }
    
    /* End of file Image_model.php */