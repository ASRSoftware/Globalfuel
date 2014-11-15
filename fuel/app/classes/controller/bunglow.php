<?php

/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.7
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2014 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Bunglow extends Controller {

    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_index() {
        $data = Model_CommonFunction::get_bunglow();
        
        $view = View::forge('layout/bunglow');
        $header = View::forge('layout/header');
        $header->registration = View::forge('layout/registration');
        $view->header = $header;
        $view->sidebar = View::forge('layout/component/sidebar-left');
        $list = View::forge('layout/project_listing');
        $list->bulist = $data;
        $view->project_listing = $list;
        $view->footer = View::forge('layout/footer');
        return $view;
    }

    public function action_details($id = null){
        $view = View::forge('layout/singleview');
        $head = View::forge('layout/header');
        $head->registration = 'asd';
        $view->header = $head;
        $view->footer = View::forge('layout/footer');
        return $view;
    }

    /**
     * The 404 action for the application.
     *
     * @access  public
     * @return  Response
     */
    public function action_404() {
        return Response::forge(Presenter::forge('welcome/404'), 404);
    }

}
