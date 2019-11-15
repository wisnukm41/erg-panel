<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Award_model extends CI_Model {
    
        private $table = 'award ';

        public $id;
        public $topic;
        public $description;
        public $image;
        public $date;
        public $year;

        public function rules()
        {
            return [
                ['field' => 'topic',
                'label' => 'Topic',
                'rules' => 'required'],
            ];
        }

        public function getAll()
        {
            return $this->db->order_by('year','DESC')->get($this->table);
        }

        public function getPage($perpage,$offset)
        {
            return $this->db->get($this->table,$perpage,$offset)->result();
        }
    
        public function getById($id)
        {
            return $this->db->get_where($this->table, ['id' => $id])->row();
        }

        public function save()
        {
            $post = $this->input->post();
            $this->id = uniqid();
            $this->topic = $post['topic'];
            $this->description = $post['description'];
            if(!empty($_FILES["image"]["name"])){
                $this->image = $this->uploadImage();
            } else {
                $this->image = 'default.png';
            }
            $this->date = $post['date'];
            $year = explode('/',$this->date);
            $this->year = $year[2];   
            $this->db->insert($this->table, $this);
        }
        
        public function update()
        {
            $post = $this->input->post();
            $this->id = $post['id'];
            $this->topic = $post['topic'];
            $this->description = $post['description'];
            if(!empty($_FILES["image"]["name"])){
                $this->image = $this->uploadImage();
            } else {
                $this->image = 'default.png';
            }
            $this->date = $post['date'];
            $year = explode('/',$this->date);
            $this->year = $year[2];    
            $this->db->update($this->table, $this, ['id' => $post['id']]);
        }

        public function delete($id)
        {
            $this->deleteImage($id);
            return $this->db->delete($this->table,['id' => $id]);
        }
        
        private function uploadImage()
        {
            $config['upload_path']      = './assets/uploads/awards/';
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
            if($image->image != 'default.png'){
            $filename = explode('.',$image->image)[0];
                return array_map('unlink', glob(FCPATH."assets/uploads/awards/$filename.*"));
            }
        }

    }
    
    /* End of file Award_model.php */
    