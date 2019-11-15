<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    require_once './vendor/autoload.php';

    use Kreait\Firebase\Factory;
    
    class Event_model extends CI_Model {

        protected $database;
        protected $dbname = 'event';
        
        private $table = 'event';

        public $id;
        public $name;
        public $description;
        public $date;

        public function __construct()
        {
            $firebase = (new Factory)
                ->withServiceAccount('./application/config/ergpanel-ab76d-b6d0577d7f2e.json')
                ->withDatabaseUri('https://ergpanel-ab76d.firebaseio.com/')
                ->create();

            $this->database = $firebase->getDatabase();
        }

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
            $this->db->order_by('id', 'desc');
            return  $this->db->get($this->table);
        }

        public function getPage($perpage,$offset)
        {
            $this->db->order_by('id', 'desc');
            return $this->db->get($this->table,$perpage,$offset)->result();
        }

        public function getFew($number, $offset)
        {
            return $this->db->get($this->table, $number, $offset)->result();
        }
    
        public function getById($id)
        {
            return $this->db->get_where($this->table, ['id' => $id])->row();
        }

        public function save()
        {
            $post = $this->input->post();
            $this->id = uniqid();
            $this->name = $post['name'];
            $this->description = $post['description'];
            $this->date = convert_date($post['date']);    
            $this->db->insert($this->table, $this);
            $data = [$this->id => [
                'name' => $this->name,
                'description' => $this->description,
                'date' => $this->date,
                ]];
            if(!$this->fbinsert($data)){
                die('Error!');
            };
        }

        public function update()
        {
            $post = $this->input->post();
            $this->id = $post['id'];
            $this->name = $post['name'];
            $this->description = $post['description'];
            $this->date = convert_date($post['date']); 
            $this->db->update($this->table, $this, ['id' => $post['id']]);
            $data = [$this->id => [
                'name' => $this->name,
                'description' => $this->description,
                'date' => $this->date,
                ]];
            if(!$this->fbinsert($data)){
                die('Error!');
            };
        }

        public function delete($id)
        {
            if(!$this->fbdelete($id)){
                die('Error!');
            };
            return $this->db->delete($this->table,['id' => $id]);

        }

        public function count()
        {
            return $this->db->get($this->table)->num_rows();   
        }

        //Firebase
        public function fbinsert(array $data)
        {
            if(!isset($data) || empty($data)) return false;
            
            foreach ($data as $key => $value) {
                $this->database->getReference()->getChild($this->dbname)->getChild($key)->set($value);
            }
            
            return true;
        }

        public function fbdelete($userID)
        {
            if(!isset($userID) || empty($userID)) return false;
            
            if($this->database->getReference($this->dbname)->getSnapshot()->hasChild($userID)){
                 $this->database->getReference($this->dbname)->getChild($userID)->remove();
                 return true;
            } else {
                return false;
            }
        }
    }
    
    /* End of file News_model.php */
    