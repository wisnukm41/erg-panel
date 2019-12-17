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

    if (! function_exists('checkData')) {
        function checkData(){

            $ci = get_instance();

            $user = $ci->ion_auth->user()->row();

            $check = true;
            
            if( $user->phone == null || $user->sub_riset == 0 || $user->year == null || $user->major == null ) {
                $check = false;
            }

            return $check;
        }
    }

    if (! function_exists('checkPhoto')) {
        function checkPhoto(){

            $ci = get_instance();

            $user = $ci->ion_auth->user()->row();

            $check = true;
            
            if( $user->photo == 'default.png' ) {
                $check = false;
            }

            return $check;
        }
    }
    
    