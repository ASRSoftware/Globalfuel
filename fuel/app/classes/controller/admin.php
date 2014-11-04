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
class Controller_Admin extends Controller {

    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_index() {
        $view = View::forge('admin/layout/dashboard');
        $view->menu = View::forge('admin/layout/menu');
        $view->container = 'this is container';
        return $view;
    }

    /**
     * A typical "Hello, Bob!" type example.  This uses a Presenter to
     * show how to use them.
     *
     * @access  public
     * @return  Response
     */
    public function action_form() {

        $view = View::forge('admin/layout/dashboard');
        $view->menu = View::forge('admin/layout/menu');
        $view->container = View::forge('admin/form/form');
        return $view;
        //return Response::forge(Presenter::forge('welcome/hello'));
    }

    /*   */

    public function action_login() {

        $view = View::forge('admin/layout/dashboard');
        $view->menu = View::forge('admin/layout/menu');
        $view->container = View::forge('admin/form/form');
        return $view;
        //return Response::forge(Presenter::forge('welcome/hello'));
    }

    public function action_about() {
        $view = View::Forge('layout/aboutus');
        $view->header = View::Forge('layout/header');
        $view->sidebar = View::forge('layout/sidebar-left');
        $view->footer = View::Forge('layout/footer');
        return $view;
    }

    public function action_contact() {
        $view = View::Forge('layout/contactus');
        $view->header = View::Forge('layout/header');
        $view->sidebar = View::Forge('layout/sidebar-left');
        $view->footer = View::Forge('layout/footer');
        return $view;
    }

    public function action_sellrentproperty() {
        $view = View::Forge('layout/property');
        $view->header = View::Forge('layout/header');
        $view->sidebar = View::Forge('layout/sidebar-left');
        $view->form = View::Forge('layout/postproperty');
        $propertytype = View::Forge('layout/propertytype');
        $view->form->propertytype = $propertytype;
        $view->footer = View::Forge('layout/footer');
        return $view;
    }

    public function action_bunglow($subname = null) {
        if ($subname == null) {
            $view = View::forge('admin/layout/dashboard');
            $view->menu = View::forge('admin/layout/menu');
            
            $view->container = View::forge('admin/bunglow/bunglowform');
            $view->container->bunglowmaster=View::forge('admin/bunglow/bunglowmaster');
            $aminities=View::forge('admin/bunglow/amenities');
            $view->container->aminities =$aminities;
            $bungalowfeature = View::forge('admin/bunglow/bungalowfeature');
            $view->container->bungalowfeature =$bungalowfeature;
            return $view;
        } else {
            echo 'no ull' . $subname;
        }
    }

    
     public function action_project() {

        $view = View::forge('admin/layout/dashboard');
        $view->menu = View::forge('admin/layout/menu');
        $view->container = View::forge('admin/Project/Propertypost');
        return $view;
        //return Response::forge(Presenter::forge('welcome/hello'));
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
