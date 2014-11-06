<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Search extends Controller {

    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_index() {
        $minprice = $_POST['amount-min'];
        $maxprice = $_POST['amount-max'];
        $bedroom = $_POST['bedrooms'];
        $buyrent = $_POST['buyrent'];
        $city = $_POST['city'];
        $location = $_POST['location'];
        $area = $_POST['area'];
        
        
        $search =  new Model_CommonFunction();
      
        
        
        $view = View::Forge('layout/index');
        $view->header = View::Forge('layout/header');
        $sidebar = View::forge('layout/component/sidebar');
        $sidebar->size = 'max';
        $view->sidebar = $sidebar;
        $view->recent_listing = View::forge('layout/component/recent_listing');
        $view->best_offer = View::forge('layout/component/best_offer');
        $view->footer = View::Forge('layout/footer');
        return $view;
    }
}