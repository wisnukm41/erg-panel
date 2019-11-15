<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Finence extends CI_Controller {

        
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
		    $this->load->library(['ion_auth', 'form_validation']);
            $this->load->model('finence_model');

            if (!$this->ion_auth->logged_in())
		    {
			// redirect them to the home page
			    redirect('/', 'refresh');
		    }
        }
        
    
        public function index()
        {
            $in = $this->finence_model->gettype('in');
            $out = $this->finence_model->gettype('out');

            $inTotals = gettotals($in); 
            $outTotals = gettotals($out);

            $totals = $inTotals - $outTotals;
            if($totals < 0) {
                $sign ='-';
            } else {
                $sign ='+';
            };
            $totals = total($totals);

            $data = [
                'title' => 'Keuangan || ERG',
                'in' => $in,
                'out' => $out,
                'totals' => $totals,
                'sign' => $sign,
                'actives' => "finence",
            ];

            $this->load->view('_partials/header', $data);
            $this->load->view('admin/finence/list', $data);
            $this->load->view('_partials/footer');
        }
    
        public function add()
        {
            if(!$this->ion_auth->in_group(1) && !$this->ion_auth->in_group(7)) redirect('admin/finence','refresh');
            $data = [
                'title' => 'Tambah Data || ERG',
                'actives' => "finence",
            ];

            $finence = $this->finence_model;
            $validation = $this->form_validation;
            $validation->set_rules($finence->rules());

            if($validation->run()){
                $finence->save();
                $this->session->set_flashdata('success','Berhasil Disimpan');
            }

            $this->load->view('_partials/header', $data);
            $this->load->view('admin/finence/add');
            $this->load->view('_partials/footer');
        }

        public function edit($id)
        {
            if(!$this->ion_auth->in_group(1) && !$this->ion_auth->in_group(7)) redirect('admin/finence','refresh');
            $exist = $this->finence_model->getById($id);

            if(!$exist) redirect('admin/finence/','refresh');

            $this->form_validation->set_rules($this->finence_model->rules());

            $data = [
                'title' => 'Edit Data || ERG',
                'value' => $exist,
                'type' => [
                    'in' => 'Pemasukan',
                    'out' => 'Pengeluaran' 
                ], 
                'type_style' => [
                    'class'=>'form-control',
                    'id'=>'type'
                ],
                'actives' => "finence",
            ];

            if($this->form_validation->run()){
                $this->finence_model->update();
                $this->session->set_flashdata('success','Berhasil Disimpan');
                
                redirect("admin/finence/",'refresh');
                
            }
            $this->load->view('_partials/header', $data);
            $this->load->view('admin/finence/edit', $data);
            $this->load->view('_partials/footer');
        }

        public function delete($id)
        {
            if(!$this->ion_auth->in_group(1) && !$this->ion_auth->in_group(7)) redirect('admin/finence','refresh');
            $exist = $this->finence_model->getById($id);

            if(!$exist) redirect('admin/finence/','refresh');

            $this->finence_model->delete($id);
            
            $this->session->set_flashdata('warning','Berhasil Dihapus');
            
            redirect('admin/finence','refresh');
            
        }
    }
    
    /* End of file Finence.php */
    