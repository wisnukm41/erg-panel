<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Calendar extends CI_Controller {
    
        public function index($year = NULL , $month = NULL)
        {
            $this->load->model('Calendar_model');
            $data['calender'] = $this->Calendar_model->getcalender($year , $month);
            $this->load->view('admin/calendar/list', $data);
        }
    
    }
    
    /* End of file Calendar.php */
    