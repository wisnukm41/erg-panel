<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Finence_model extends CI_Model {
    
        private $table = 'finence';

        public $id;
        public $username;
        public $date;
        public $type;
        public $value;
        public $description;

        public function rules()
        {
            return [
                ['field' => 'username',
                'label' => 'Username',
                'rules' => 'required'],

                ['field' => 'date',
                'label' => 'Date',
                'rules' => 'required'],

                ['field' => 'value',
                'label' => 'Value',
                'rules' => 'required'],

                ['field' => 'description',
                'label' => 'Description',
                'rules' => 'required'],
            ];
        }

        public function getAll()
        {   
            $this->db->from($this->table);
            $this->db->order_by('id', 'desc');
            return  $this->db->get()->result();
        }
    
        public function getById($id)
        {
            return $this->db->get_where($this->table, ['id' => $id])->row();
        }

        public function save()
        {
            $post = $this->input->post();
            $this->id = uniqid();
            $this->username = $post['username'];
            $this->description = $post['description'];
            $this->date = $post['date'];
            $this->type = $post['type'];
            $this->value = $post['value'];    
            $this->db->insert($this->table, $this);
        }

        public function update()
        {
            $post = $this->input->post();
            $this->id = $post['id'];
            $this->username = $post['username'];
            $this->description = $post['description'];
            $this->date = $post['date'];
            $this->type = $post['type'];
            $this->value = $post['value']; 
            $this->description = $post['description'];

            $this->db->update($this->table, $this, ['id' => $this->id]);
        }

        public function delete($id)
        {
            return $this->db->delete($this->table,['id' => $id]);
        }
        
        public function count()
        {
            return $this->db->get($this->table)->num_rows();   
        }
        
        public function getType($type)
        {
            return $this->db->get_where($this->table, ['type' => $type])->result();
        }
    }
    
    /* End of file Finence_model.php */
    