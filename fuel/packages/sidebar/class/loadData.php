<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class loadData{
public function get_city_data()
    {
        $cityname = \DB::select('*')
                ->from('city')
                ->execute();
        return $cityname->as_array();
    }
public function get_city_area()
    {
        $cityArea = \DB::select('*')
                ->from('city_area')
                ->execute();
        return $cityArea->as_array();
    }
public function get_city_locality()
    {
        $locality = \DB::select('*')
                ->from('locality')
                ->execute();
        return $locality->as_array();
    }
}
