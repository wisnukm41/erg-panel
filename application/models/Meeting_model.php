<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Meeting_model extends CI_Model {
    
        private $table = 'meetings';

        public $id;
        public $topic;
        public $description;
        public $date;
        public $writer;

        public function rules()
        {
            return [
                ['field' => 'description',
                'label' => 'Description',
                'rules' => 'required'],
            ];
        }

        public function getAll()
        {
            return $this->db->order_by('date','DESC')->get($this->table);
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
            $this->date = $post['dates'];   
            $this->writer = $post['user'];
            $this->db->insert($this->table, $this);
        }

        public function update()
        {
            $post = $this->input->post();
            $this->id = $post['id'];
            $this->topic = $post['topic'];
            $this->description = $post['description'];
            $this->date = $post['dates'];   
            $this->writer = $post['user'];
            $this->db->update($this->table, $this, ['id' => $post['id']]);
        }

        public function delete($id)
        {
            return $this->db->delete($this->table,['id' => $id]);
        }
    
    }
    
    /* End of file Meeting_model.php */
    