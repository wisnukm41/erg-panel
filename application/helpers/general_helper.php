<?php
    if (! defined('BASEPATH')) exit('No direct script access allowed');
 
    if (! function_exists('getId')) {
        function getId($table)
        {
            // get main CodeIgniter object
            $ci = get_instance();
           
            // Write your logic as per requirement
            $ci->db->select_max('id');
            $query = $ci->db->get($table);
            return $query->row();
        }
    }
    
    if (! function_exists('register_count')) {
        function register_count($group)
        {
            $ci = get_instance();

           $query = $ci->db->get_where('users_groups', ['group_id' => $group])->num_rows();

           return $query;
        }
    }

    if (! function_exists('username')) {
        function username()
        {
            $ci = get_instance();

            $user = $ci->ion_auth->user()->row();

            return $user->username;
        }
    }
    
    if (! function_exists('actUser')) {
        function actUser()
        {
            $ci = get_instance();

            $user = $ci->ion_auth->user()->row();

            return $user;
        }
    }

    if (! function_exists('gettotals')) {
        function gettotals($types)
        {   
            $total = 0; 
            foreach ($types as $type) {
                $total = $total + $type->value;
            }
            return $total;
        }
    }

    if (! function_exists('total')) {
        function total($total)
        {   
		    $total = explode('.',$total);
            $length = strlen($total[0])-1;
            $length = intdiv($length, 3);

            if($total[0] < 0){
                $total[0] = str_replace('-','',$total[0]);
            }
            for ($i=1; $i <= $length; $i++) { 
                if($i==1){
                $total[0] = substr_replace($total[0], '.',-3*$i,0);
                }else{
                    $total[0] = substr_replace($total[0], '.',-3*$i-($i-1),0);
                }
            }

            if(isset($total[1])){
            $totals = 'Rp.'.$total[0].','.substr($total[1],0,2);
			} else {
            $totals = 'Rp.'.$total[0].',00';
            }
            
            return $totals;
        }
    }

    if (! function_exists('convertdate')) {
        function convert_date($date)
        {
            $date = explode('/',$date);

            $final = $date[2].'-'.$date[1].'-'.$date[0];

            return $final;
        }
    }

    if (! function_exists('convertdate')) {
        function reconvert_date($date)
        {
            $date = explode('-',$date);

            $final = $date[2].'/'.$date[1].'/'.$date[0];

            return $final;
        }
    }
    
    if (! function_exists('timeNow')) {
        function timeNow()
        {
            $time = date("h:i a");
            $time = explode(':',$time);
            $hours = $time[0]+7;

            $date = date("m/d");
            $date = explode('/',$date);
            $month = ['','Jan','Feb','Mar','Apr','Mei','Jun','Jul','Aug','Sep','Okt','Nov','Des'];

            return $date[1].' '.$month[intval($date[0])].' '.$hours.':'.$time[1];
        }
    }
    
    if (! function_exists('getRiset')) {
        function getRiset($sub_riset)
        {
            $riset = ['','Website','Android','Desktop','IoT','Hardware'];
            return $riset[$sub_riset];
        }
    }

    if (! function_exists('slugify')) {
        function slugify($text){
            // replace non letter or digits by -
            $text = preg_replace('~[^\pL\d]+~u', '-', $text);
        
            // transliterate
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        
            // remove unwanted characters
            $text = preg_replace('~[^-\w]+~', '', $text);
        
            // trim
            $text = trim($text, '-');
        
            // remove duplicated - symbols
            $text = preg_replace('~-+~', '-', $text);
        
            // lowercase
            $text = strtolower($text);
        
            if (empty($text)) {
              return 'n-a';
            }
        
            return $text;
        }
    }

    if (! function_exists('getPiket')) {
        function getPiket($arr,$day,$place,$admin = 0){

            $e1='<span class="piket-tools"><a href='.base_url('admin/piket/edit/');
            $e2='><i class="fas fa-pen"></i></a></span>';
            $d1='<span class="piket-tools"><a href='.base_url('admin/piket/delete/');
            $d2='><i class="fa fa-times p-del"></i></a></span></div>';

            $member = '';
            
            if($admin == 0)
            {
                foreach ($arr as $e) {
                    if($e['day'] == $day && $e['place'] == $place){
                        $member = '<div>'.$member.$e['username'].'</div>'; 
                    }
                }
            } else {
                foreach ($arr as $e) {
                    if($e['day'] == $day && $e['place'] == $place){
                        $member = '<div>'.$member.$e['username'].$e1.$e['id'].$e2.$d1.$e['id'].$d2;
                    }
                }
            }
            return $member;
        }
    }
    
    
    if (! function_exists('checkPiket')) {
        function checkPiket(){
            
            $out = false;
            $ci = get_instance();
            $user = actUser();
            $piket = $ci->load->model('piket_model');
            $actPiket = $ci->piket_model->actPiket($user->id);

            if($actPiket != null){
                $out = true;
            }

            return $out;
        }
    }
    
    if (! function_exists('deleteTags')) {
        function deleteTags($text){
            $updated = $text;
            preg_replace("/<.*?>/", "", $updated);
            return $updated;
        }
    }



    