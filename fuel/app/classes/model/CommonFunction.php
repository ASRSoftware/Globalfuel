<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CommonFunction
 *
 * @author ASR1
 */
class Model_CommonFunction extends Model {
    /*     * *******************************************
     * 
     * 
     * 
     * 
      $result =  new Model_CommonFunction();
      $array = array('id','name','email','pass'); TABLE FIELDS.
      $table=array('table'=>'tablename','value'=>$value);
      return $result->get_data($table,$array);
     * 
     * 
     * 
     * 
     * ********************************************** */

    public function get_data($table = array(), $select = array()) {
        if (!isset($table['id'])) {
            $result = \DB::select_array($select)
                    ->from($table['table'])
                    ->execute();
        } else {
            $result = \DB::select_array($select)
                    ->from($table['table'])
                    ->where($table['where'], '=', $table['value'])
                    ->execute();
        }
        return $result->as_array();
    }

    /*

      $model =  new Model_CommonFunction();
      $table='administrator';
      $data = array('name'=>$name['name'],'user_name'=>$name['username'],'password'=>$name['password'],'email'=>$name['email'],'insertion_date'=>date("d m Y h:i:s"),'modify_date'=>'');
      return $model->insertData($table,$data);

     */

    public function insertData($table, $data) {
        $result = \DB::insert($table)->set($data)->execute();
        return $result;
    }

    /*

      $model =  new Model_CommonFunction();
      $table='tablename';
      $data = array('name'=>$name['name'],'user_name'=>$name['username'],'password'=>$name['password'],'email'=>$name['email'],'insertion_date'=>date("d m Y h:i:s"),'modify_date'=>'');
      return $model->insertData($table,$data);

     */

    public function updateData($table, $data, $where, $value) {
        $result = \DB::insert($table)
                ->set($data)
                ->where($where, '=', $value)
                ->execute();
        return $result;
    }

    /*
     * $model =  new Model_CommonFunction();
     * $table='tablename';
     * $where =''where field'
     * $value = where value.
     */

    public function delete($table, $where, $value) {
        $query = DB::delete($table)->where($where, 'like', $value)->execute();
    }

    public function search($table, $where, $value) {
        
        $search = array('mode'=>'mode');
        
        
        
        $result = \DB::select_array($select)
                ->from($table['table']);
        
        
                if(){
                    
                $result->where($where['mode'], '=', $value['mode']);
                }else{
                $result->where($where['mode'], '=', $value['mode']);
                $result->where($where['mode'], '=', $value['mode']);
                    
                }
                
                
           
                $result->execute()->as_array();
    }

}
