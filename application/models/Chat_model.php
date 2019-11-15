<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Chat_model extends CI_Model {
        
        public function __construct()
        {
            $this->load->library('ion_auth');
        }
        
        private $table = 'chat';

        public $id;
        public $description;
        public $user_id;
        public $time;
        
        public function getAll()
        {
            $this->db->select('chat.id,time,description,photo,username,user_id');
            $this->db->from($this->table);
            $this->db->join('users','chat.user_id = users.id','left');
            return $this->db->get()->result();
        }

        public function save()
        {
            $post = $this->input->post();
            $this->id=uniqid();
            $this->description=$post['description'];
            $this->user_id = $this->ion_auth->user()->row()->id;
            $this->time = timeNow();
            $this->db->insert($this->table, $this);
        }

        public function delete($id)
        {
            return $this->db->delete($this->table,['id'=>$id]);   
        }
    }
    
    /* End of file Chat_model.php */
    