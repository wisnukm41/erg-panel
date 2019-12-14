<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Member_model extends CI_Model {
    
       private $table1 = 'users';
       private $table2 = 'users_groups';
       private $table3 = 'groups';

       public $id;
       public $phone;
       public $sub_riset;
       public $year;
       public $major;
       public $position;
       public $group_id;
       
       public function rules()
        {
            return [
                ['field' => 'username',
                'label' => 'Username',
                'rules' => 'required'],
            ];
        }

       public function getAll()
       {
           $this->db->select('users.id, username, sub_riset, major, year, phone, position, group_id, riset_group.name');
           $this->db->from('users');
           $this->db->join('users_groups','users.id = users_groups.user_id','left');
           $this->db->join('riset_group','users.sub_riset = riset_group.id','left');
           $query = $this->db->get();
           return $query->result();
       }

       public function getById($id)
        {
           $this->db->select('users.id, username, sub_riset, major, year, phone, position, group_id, email');
           $this->db->from('users');
           $this->db->join('users_groups','users.id = users_groups.user_id','left');
           $this->db->where('users.id', $id);
           $query = $this->db->get();
           return $query->row();
        }

        public function getGroups()
        {
            return $this->db->get('groups')->result();   
        }

        public function update()
        {
            $post = $this->input->post();
            $this->id = $post['id'];
            $data = [
            'phone' => '',
            'sub_riset' => '',
            'year' =>'',
            'major' => '',
            'position' => '',
            ];

            $user_id = [
                'group_id' => $post['level'],
            ];

            $this->db->update($this->table1, $data, ['id' => $this->id]);
            $this->db->update($this->table2, $user_id, ['user_id' => $this->id]);
        }

        public function delete($id)
        {
            $this->db->delete($this->table1,['id'=> $id]);
            return $this->db->delete($this->table2,['user_id'=> $id]);
        }

        public function username($username)
        {
           $this->db->select('users.id, username, sub_riset, major, year, phone, position, group_id, email, photo');
           $this->db->from('users');
           $this->db->join('users_groups','users.id = users_groups.user_id','left');
           $this->db->where('username', $username);
            return $this->db->get()->row();
        }
        
        public function update_profile()
        {
            $post = $this->input->post();
            $this->id = $post['id'];

            if(!empty($_FILES["image"]["name"])){
                $photo =  $this->uploadImage($this->id);
            } else {
                $photo = $post['old_img'];
            }
            
            $data = [
            'photo' => $photo,
            'username' => $post['username'],
            'phone' => $post['phone'],
            'sub_riset' => $post['sub_riset'],
            'year' => $post['year'],
            'major' => $post['major'],
            'position' => $post['position'],
            ];

            $user_id = [
                'group_id' => $post['level'],
            ];

            $this->db->update($this->table1, $data, ['id' => $this->id]);
            $this->db->update($this->table2, $user_id, ['user_id' => $this->id]);
    
        }

        public function change_password_rules()
        {
            return [
                [
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'required'
                ],
                [
                    'field' => 'old_password',
                    'label' => 'Old Password',
                    'rules' => 'required',
                    'error' => [
                        'required' => 'Old Password Is Required!'
                    ],
                ],
                [
                    'field' => 'new_password',
                    'label' => 'New Password',
                    'rules' => 'required',
                    'error' => [
                        'required' => 'New Password Is Required!'
                    ],
                ],
                [
                    'field' => 'conf_password',
                    'label' => 'New Password Confirmation',
                    'rules' => 'required|matches[new_password]',
                    'error' => [
                        'required' => 'Confirmation Password Is Required!',
                        'matches' => 'Confirmation Not Match With New Password!'
                    ],
                ],

            ];
        }

        public function change_password()
        {
            $post = $this->input->post();
            $email = $post['email'];
            $oldPassword = $post['old_password'];
            $id = $post['id'];
            $newPassword = $post['new_password'];

            if($this->ion_auth->login($email, $oldPassword)){
                $data = [
                    'password' => $newPassword
                ];
                
                $this->ion_auth->update($id, $data);
                return true; 
            } else {
                return false;
            }
        }

        private function uploadImage($id)
        {
            $config['upload_path']      = './assets/uploads/profile/';
            $config['allowed_types']    = 'gif|jpg|png';
            $config['file_name']        =  $id;
            $config['overwrite']        = true;
            $config['max_size']         = 1024;

            $this->load->library('upload', $config);
            
            if(!$this->upload->do_upload('image')) {
                return 'default.png';
             }else {
                $data = $this->upload->data();
                $config['image_library']='gd2';
                $config['source_image']='./assets/uploads/profile/'.$data['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= TRUE;
                $config['quality']= '60%';
                $config['width']= 800;
                $config['height']= 800;
                $config['new_image']= './assets/uploads/profile/'.$data['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                return $data['file_name'];
            }
        }

        private function deleteImage($id)
        {
            $profile = $this->getById($id);
            if($profile->photo != 'default.png'){
                $filename = explode('.',$profile->photo)[0];
                return array_map('unlink', glob(FCPATH."assets/uploads/profile/$filename.*"));
            }
        }

        public function count()
        {
            $this->db->from('users_groups');
            $all =  $this->db->get()->num_rows();
            $this->db->from('users_groups');
            $this->db->where('group_id',5);
            $kader =  $this->db->get()->num_rows();
            $this->db->from('users_groups');
            $this->db->where('group_id',1);
            $admin =  $this->db->get()->num_rows();
            return $all-$kader-$admin;
        }

        public function getList()
        {
           $this->db->select('users.id, username, year, group_id, photo, sub_riset');
           $this->db->from('users');
           $this->db->join('users_groups','users.id = users_groups.user_id','left');
            return $this->db->get()->result();
        }
    }
    
    /* End of file Member_model.php */
    