<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class convertName{
public function get_data($select,$table,$where,$id)
    {
        $name = \DB::select($select)
                ->from($table)
                ->where($where,'=',$id)
                ->execute();
        return $name->as_array();
    }
}