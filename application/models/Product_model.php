<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Product_model extends CI_Model {
        
        private $table = 'products';

        public $id;
        public $name;
        public $description;
        public $date;

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
            return $this->db->order_by('id','DESC')->get($this->table);
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
            $this->id = '';
            $this->name = $post['name'];
            $this->description = $post['description'];
            $this->date = $post['date'];    
            $this->db->insert($this->table, $this);
        }

        public function update()
        {
            $post = $this->input->post();
            $this->id = $post['id'];
            $this->name = $post['name'];
            $this->description = $post['description'];
            $this->date = $post['date'];
            $this->db->update($this->table, $this, ['id' => $post['id']]);
        }

        public function delete($id)
        {
            return $this->db->delete($this->table,['id' => $id]);
        }
        
        public function count()
        {
            return $this->db->get($this->table)->num_rows();   
        }
    }
    
    /* End of file Product_model.php */
    