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

    public function action_bungalow($subname = null) {
        if ($subname == null) {
            $view = View::forge('admin/layout/dashboard');
            $view->menu = View::forge('admin/layout/menu');

            $view->container = View::forge('admin/bungalow/bungalowform');
            $view->container->bungalowmaster = View::forge('admin/bungalow/bungalowmaster');
            $aminities = View::forge('admin/bungalow/amenities');
            $view->container->aminities = $aminities;
            $bungalowfeature = View::forge('admin/bungalow/bungalowfeature');
            $view->container->bungalowfeature = $bungalowfeature;
            return $view;
        } else {
            echo 'no ull' . $subname;
        }
    }

    public function action_sell($subname = null) {
        if ($subname == null) {

            if (Input::method() == 'post') {
                $obj = new Model_CommonFunction();
                $inarray = array('user_id'=>'1','city_id'=>'1','city_area'=>'1','propertype_id'=>'1','sub_propertytype'=>'1');
                $is_id = $obj->insertData('property',$inarray);
                echo $is_id;
            } else {
            $obj = new Model_CommonFunction();
            $propertydata = $obj->get_data(array('table' => 'property_type'), array('propertype_id', 'propertype_name'));
            $subpropertydata = $obj->get_data(array('table' => 'property_sub_type'), array('property_subtype_id', 'propertype_id', 'property_name'));
            $unitdata = $obj->get_data(array('table' => 'unit'), array('unit' => 'unit_id', 'unit_name' => 'unit_name'));
            $citydata = $obj->get_data(array('table' => 'city'), array('city_id' => 'city_id', 'city_name' => 'city_name'));
            $cityareadata = $obj->get_data(array('table' => 'city_area'), array('city_id' => 'city_area_id', 'locality_name' => 'locality_name'));
            $numberdata = $obj->get_data(array('table' => 'number'), array('number_id' => 'number_id', 'number_name' => 'number'));
            $view = View::forge('admin/layout/dashboard');
            $view->menu = View::forge('admin/layout/menu');
            $view->container = View::forge('admin/sellproperty/sellproperty');
            $form = View::forge('admin/sellproperty/propertymaster');
            $form->propertytype = $propertydata;
            $form->property_sub_type = $subpropertydata;
            $form->unit = $unitdata;
            $form->citydata = $citydata;
            $form->cityarea = $cityareadata;
            $form->number = $numberdata;
            $view->container->propertymaster = $form;
            
            $aminities = View::forge('admin/sellproperty/amenities');
            $view->container->aminities = $aminities;
            $propertyfeature = View::forge('admin/sellproperty/propertyfeature');
            $view->container->propertyfeature = $propertyfeature;
            $view->container->propertyfeature->number = $numberdata;
            return $view;
             }
        } else {

            echo 'no ull' . $subname;
        }
    }

    public function action_createuser($subname = null) {
        if ($subname == null) {
            $view = View::forge('admin/layout/dashboard');
            $view->menu = View::forge('admin/layout/menu');

            $view->container = View::forge('admin/user/createuser');
            $view->container->createuser = View::forge('admin/user/createuserform');
            $loginform = View::forge('admin/user/loginform');
            $view->container->loginform = $loginform;

            return $view;
        } else {
            echo 'no ull' . $subname;
        }
    }

    public function action_project($subname = null) {
        if ($subname == null) {
            $propety_type = new Model_CommonFunction();

            $propertydata = $propety_type->get_data(array('table' => 'property_type'), array('propertype_id', 'property_id', 'propertype_name'));
            $numberdata = $propety_type->get_data(array('table' => 'number'), array('number_id' => 'number_id', 'number_name' => 'number'));
            $citydata = $propety_type->get_data(array('table' => 'city'), array('city_id', 'city_name'));
            $unitdata = $propety_type ->get_data(array('table' => 'unit'), array('unit' => 'unit_id', 'unit_name' => 'unit_name'));

            $view = View::forge('admin/Project/dashbordproject');
            $view->menu = View::forge('admin/layout/menu');
            $view->container = View::forge('admin/Project/master');
            $form = View::forge('admin/Project/personaldetail');
            $form->propertytype = $propertydata;
            $form->cityname = $citydata;
          
            $view->container->form = $form;
            $aminities = View::forge('admin/Project/propertyamenities');
            $view->container->aminities = $aminities;
            $projectfeature = View::forge('admin/Project/projectfeature');
            $projectfeature->unit = $unitdata;
            $projectfeature->number = $numberdata;
            $view->container->projectfeature = $projectfeature;

            return $view;
        } else {
            echo 'no valid ' . $subname;
        }
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

    public function action_propertyType() {
        $obj = new Model_CommonFunction();
            $propertydata = $obj->get_data(array('table' => 'property_type'), array('propertype_id', 'propertype_name'));
            return json_encode($propertydata);
    }
    public function action_propertySubType($id=null) {
        $obj = new Model_CommonFunction();
            $propertydata = $obj->get_data(array('table' =>'property_sub_type','where'=>'propertype_id','value'=>$id), array('property_subtype_id', 'property_name'));
            return json_encode($propertydata);
    }

}
