<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Tools_model extends CI_Model {
        
        private $table = 'tools';

        public $id;
        public $name;
        public $description;
        public $place;
        public $photo;

        public function rules()
        {
            return [
                ['field' => 'name',
                'label' => 'Name',
                'rules' => 'required'],
            ];
        }

        public function getAll()
        {   
            $this->db->from($this->table);
            return  $this->db->get();
        }
    
        public function getById($id)
        {
            return $this->db->get_where($this->table, ['id' => $id])->row();
        }

        public function getPage($perpage,$offset)
        {
            return $this->db->get($this->table,$perpage,$offset)->result();
        }

        public function save()
        {
            $post = $this->input->post();
            $this->id = '';
            $this->name = $post['name'];
            $this->description = $post['description'];
            $this->place = $post['place'];    
            $this->photo = $this->uploadImage();
            $this->db->insert($this->table, $this);
        }

        public function update()
        {
            $post = $this->input->post();
            $this->id = $post['id'];
            $this->name = $post['name'];
            if(!empty($_FILES["img"]["name"])){
                $this->photo = $this->uploadImage();
            } else {
                $this->photo = $post['old_img'];
            }
            $this->description = $post['description'];
            $this->place = $post['place'];
            $this->db->update($this->table, $this, ['id' => $post['id']]);
        }

        public function delete($id)
        {
            $this->deleteImage($id);
            return $this->db->delete($this->table,['id' => $id]);
        }

        private function uploadImage()
        {
            $id = getId('tools');
            $config['upload_path']      = './assets/uploads/tools/';
            $config['allowed_types']    = 'gif|jpg|png';
            $config['file_name']        =  $id->id;
            $config['overwrite']        = true;
            $config['max_size']         = 1024;

            $this->load->library('upload', $config);
            
            if($this->upload->do_upload('img')) {
                return $this->upload->data("file_name");
            }

            return 'default.png';
        }

        private function deleteImage($id)
        {
            $tools = $this->getById($id);
            if($tools->photo != 'default.png'){
                $filename = explode('.',$tools->photo)[0];
                return array_map('unlink', glob(FCPATH."assets/uploads/tools/$filename.*"));
            }
        }
        
        public function count()
        {
            return $this->db->get($this->table)->num_rows();   
        }
    }
    
    /* End of file Tools_model.php */
    