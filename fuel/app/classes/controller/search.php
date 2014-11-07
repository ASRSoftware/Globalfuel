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
            
       $view = View::Forge('layout/search');
        $view->header = View::Forge('layout/header');
        $sidebar = View::forge('layout/component/sidebar');
        $view->sidebar = $sidebar;
         $sidebar->size = 'small';
        $view->footer = View::Forge('layout/footer');
        return $view;
        
    }
}