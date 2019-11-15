<?php
 
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Member extends CI_Controller {

    public function __construct()
    {   
        parent::__construct();
        $this->load->database();
        $this->load->library(['ion_auth', 'form_validation']);
        $this->load->model('member_model');

        if (!$this->ion_auth->logged_in())
        {
        // redirect them to the home page
            redirect('/', 'refresh');
        }
    }
 
     public function index()
     {
         $data = [
             'title' => 'Anggota || ERG',
             'members' => $this->member_model->getAll(),
             'riset' => $this->sub_riset(),
             'active' => "member",
         ];

         $this->load->view('_partials/header', $data);
         $this->load->view('admin/member/list_member', $data);
         $this->load->view('_partials/footer');
     }

     public function edit($id)
     {
        if(!isset($id)) redirect('admin/member','refresh');

        $member = $this->member_model;
        $validation = $this->form_validation;
        $validation->set_rules($member->rules());
        $title['title'] = 'Edit Anggota || ERG';

        if($validation->run()){
            $member->update();
            $this->session->set_flashdata('success','Berhasil Disimpan');
        }

         $this->load->view('_partials/header', $title);

         $data['member'] = $member->getById($id);

         $data['groups'] = [
             1 => 'Admin',
             4 => 'Alumni',
             2 => 'Anggota',
             6 => 'Baru',
             3 => 'Dosen',
             5 => 'Kader',
             7 => 'Pengurus',
            ];

        $data['riset'] = $this->sub_riset();

         $data['user_group'] = [
             'class'=>'form-control',
             'id'=>'level'
         ];

         $data['sub_riset'] = [
            'class'=>'form-control',
            'id'=>'sub_riset'
        ];

        $data['active'] ="member";

         if(!$data['member']) show_404();
        
         $this->load->view('admin/member/edit', $data);
         $this->load->view('_partials/footer');
     }

     public function delete($id)
     {
       $this->member_model->delete($id);

       redirect('admin/member','refresh');
     }

     public function lecturer()
     {
        $data = [
            'title' => 'Dosen || ERG',
            'members' => $this->member_model->getAll(),
            'active' => "lecturer",
        ];

        $this->load->view('_partials/header', $data);
        $this->load->view('admin/member/list_lecturer', $data);
        $this->load->view('_partials/footer');
     }

     public function trainee()
     {
        $data = [
            'title' => 'Kader || ERG',
            'members' => $this->member_model->getAll(),
            'riset' => $this->sub_riset(),
             'active' => "trainee",
        ];

        $this->load->view('_partials/header', $data);
        $this->load->view('admin/member/list_trainee', $data);
        $this->load->view('_partials/footer');
     }

     public function admin()
     {
        if(!$this->ion_auth->is_admin()){
            
            redirect('admin/','refresh');
            
        }
        $data = [
            'title' => 'Admins || ERG',
            'members' => $this->member_model->getAll(),
            'riset' => $this->sub_riset(),
             'active' => "admin",
        ];

        $this->load->view('_partials/header', $data);
        $this->load->view('admin/member/list_admin', $data);
        $this->load->view('_partials/footer');
     }

     public function new()
     {
        if(!$this->ion_auth->is_admin()){
            redirect('admin/','refresh');
        }
        
        $data = [
            'title' => 'Member Baru || ERG',
            'members' => $this->member_model->getAll(),
            'riset' => $this->sub_riset(),
             'active' => "new",
        ];

        $this->load->view('_partials/header', $data);
        $this->load->view('admin/member/list_new', $data);
        $this->load->view('_partials/footer');
     }

     public function graduated()
     {
        $data = [
            'title' => 'Alumni || ERG',
            'members' => $this->member_model->getAll(),
            'riset' => $this->sub_riset(),
             'active' => "graduated",
        ];

        $this->load->view('_partials/header', $data);
        $this->load->view('admin/member/list_graduated', $data);
        $this->load->view('_partials/footer');
     }

     public function chief()
     {
        $data = [
            'title' => 'Pengurus || ERG',
            'members' => $this->member_model->getAll(),
            'riset' => $this->sub_riset(),
             'active' => "chief",
        ];

        $this->load->view('_partials/header', $data);
        $this->load->view('admin/member/list_chief', $data);
        $this->load->view('_partials/footer');
     }

     public function profile($username)
     {
         if(username() !== $username) show_404();;
         
         $data= [
             'username' => $this->member_model->username($username),
             'title' => 'Profile || ERG',
             'riset' => $this->sub_riset(),
             'actives' => 'profile',
            ];
         
        $this->load->view('_partials/header', $data);
        $this->load->view('admin/member/profile', $data);
        $this->load->view('_partials/footer');
     }

     public function edit_profile($username)
     {
        if(username() !== $username) redirect('admin/','refresh');

        $this->form_validation->set_rules($this->member_model->rules());

        $data= [
            'username' => $this->member_model->username($username),
            'title' => 'Edit Profile || ERG',
            'riset' => $this->sub_riset(),
             'sub_riset' => [
                'class'=>'form-control',
                'id'=>'sub_riset'
             ],
             'actives' => 'profile',
           ];

           if($this->form_validation->run()){
            $this->member_model->update_profile();
            $this->session->set_flashdata('success','Berhasil Disimpan');
            redirect("admin/profile/$username",'refresh');
        }
        
       $this->load->view('_partials/header', $data);
       $this->load->view('admin/member/edit_profile', $data);
       $this->load->view('_partials/footer');
     }

     public function change_password($username)
     {
        if(username() !== $username) redirect('admin/','refresh');

        $this->form_validation->set_rules($this->member_model->change_password_rules());

        $data= [
            'member' => $this->member_model->username($username),
            'title' => 'Ubah Password || ERG',
            'actives' => 'profile',
           ];

           if($this->form_validation->run()){
            
            if($this->member_model->change_password()){

            $this->session->set_flashdata('success','Saved Successfully');
            
            } else {
                $this->session->set_flashdata('danger','Old Password Doesn\'t Match!');
            }
            
        }
        
       $this->load->view('_partials/header', $data);
       $this->load->view('admin/member/change_password', $data);
       $this->load->view('_partials/footer');
     }

     public function clear_trainee()
     {
         if(!$this->ion_auth->in_group('1')) redirect('admin/trainee','refresh');
         
        $trainees = $this->member_model->getAll();
         
        foreach ($trainees as $trainee) {
            if($trainee->group_id == '5' ){
                $this->member_model->delete($trainee->id);
            }
        }
        
        redirect('admin/trainee','refresh');

     }

     public function sub_riset()
     {
         return [
            0 => '',
            1 => 'Website',
            2 => 'Android',
            3 => 'Desktop',
            4 => 'IoT',
            5 => 'Hardware',
         ];
     }
 }
 
 /* End of file Member.php */
 