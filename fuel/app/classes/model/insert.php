<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_Insert extends Model{
    
    
    public function add_data(){
         $result = \DB::insert('check')->set(array(
                    'name' => $name['project_name'],
                    'dname' => $dname['developer_name'],
                    'email' => $email['email'],
                ))->execute();
        return $result;
        
    }
    
    
}