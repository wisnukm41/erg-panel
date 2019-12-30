<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Piket_model extends CI_Model {
        
        private $table = 'piket';

        public $id;
        public $user_id;
        public $day;
        public $place;

        public function rules()
        {
            return [
                ['field' => 'user_id',
                'label' => 'User',
                'rules' => 'required'],
            ];
        }

        public function getAll()
        {   
            $this->db->select('username,piket.id, user_id, day, place');
            $this->db->from($this->table);
            $this->db->join('users', 'users.id = piket.user_id','left');
            $q = $this->db->get();
            return $q->result_array(); 
        }

        public function getOne($id)
        {   
            $this->db->select('*');
            $this->db->from($this->table);
            $this->db->where('id',$id);
            $q = $this->db->get();
            return $q->row(); 
        }

        public function save()
        {
            $post = $this->input->post();
            $this->user_id = $post['user_id'];
            $this->day = $post['day'];
            $this->place = $post['place'];
            $this->db->insert($this->table, $this);
        }

        public function update()
        {
            $post = $this->input->post();
            $this->id = $post['id'];
            $data = [
            'user_id' => $post['user_id'],
            'day' => $post['day'],
            'place' => $post['place']
            ];
            
            $this->db->update($this->table, $data, ['id' => $this->id]);

        }

        public function delete($id)
        {
            return $this->db->delete($this->table,['id' => $id]);
        }

        public function actPiket($id)
        {
            $day = date('w') - 1 ;
            $q = $this->db->get_where($this->table,['user_id'=>$id, 'day' => $day]);
            return $q->result();
        }
    }
    
    /* End of file Tools_model.php */
    