<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendemail extends CI_Controller {

    function send()
    {
        $data = [
            $name = 'Whiz'
        ];

        $message=$this->load->view('emailtemp', $data, TRUE);
        
        $this->load->library('email');
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'ergunikom.noreply@gmail.com',
            'smtp_pass' => 'ERGunikom1!',
            'newline' => "\r\n",
            'smtp_crypto' => 'ssl',
            'mailtype' => 'html'
          );

        $this->email->initialize($config);

        $this->email->from('ergunikom.noreply@gmail.com','admin-erg-panel');
        $this->email->to('wisnukm41@gmail.com'); 
        $this->email->subject('Akun ERG Panel Telah di Konfirmasi');
        $this->email->message($message);  

            $send = $this->email->send();
            if($send) {
                echo json_encode("send");
            } else {
                $error = $this->email->print_debugger(array('headers'));
                echo json_encode($error);
            }

    }
    public function index()
    {
        $this->sendMail();
    }
}