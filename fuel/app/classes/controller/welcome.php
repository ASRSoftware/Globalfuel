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
class Controller_Welcome extends Controller {

    /**
     * The basic welcome message
     *
     * @access  public
     * @return  Response
     */
    public function action_index() {
        $view = View::Forge('layout/index');
        $header = View::Forge('layout/header');
        $header->registration = View::Forge('layout/registration');
        $view->header = $header;
        $sidebar = View::forge('layout/component/sidebar');
        $sidebar->size = 'max';
        $view->sidebar = $sidebar;
        $view->recent_listing = View::forge('layout/component/recent_listing');
        $view->best_offer = View::forge('layout/component/best_offer');
        $view->footer = View::Forge('layout/footer');
        return $view;
    }

    public function action_registration() {

        $result = new Model_CommonFunction();
        $data = array(
                        'name' => Input::post('name'),
                        'contact' => Input::post('phone'),
                        'user_name' => Input::post('username'),
                        'email' => Input::post('email'),
                        'password' => Input::post('name'),
                        'user_type' => 'user'
                      );
        $result->insertData('user', $data);
        $view = View::Forge('layout/index');
        $header = View::Forge('layout/header');
        $header->registration = View::Forge('layout/registration');
        $view->header = $header;
        $sidebar = View::forge('layout/component/sidebar');
        $sidebar->size = 'max';
        $view->sidebar = $sidebar;
        $view->recent_listing = View::forge('layout/component/recent_listing');
        $view->best_offer = View::forge('layout/component/best_offer');
        $view->footer = View::Forge('layout/footer');
        return $view;
    }

    public function action_checkUser($userName) {
        $result = new Model_CommonFunction();
        $data = $result->get_data(array('table' => 'user', 'where' => 'user_name', 'value' => $userName), array('user_name'));
        if ($data) {
            return 'no';
        }
        return 'yes';
    }

    public function action_checkEmail($email) {
        $result = new Model_CommonFunction();
        $newstring = str_replace("@dot@", ".", $email);  
        $emailData = $result->get_data(array('table' => 'user', 'where' => 'email', 'value' => $newstring), array('email', 'name'));
        if (empty($emailData)) {
            return 'yes';
        }
        return 'no';
    }

    /**
     * A typical "Hello, Bob!" type example.  This uses a Presenter to
     * show how to use them.
     *
     * @access  public
     * @return  Response
     */
    public function action_about() {
        $view = View::Forge('layout/aboutus');
        $header = View::Forge('layout/header');
        $header->registration = View::Forge('layout/registration');
        $view->header = $header;
        $sidebar = View::forge('layout/component/sidebar');
        $sidebar->size = 'small';
        $view->sidebar = $sidebar;
        $view->footer = View::Forge('layout/footer');
        return $view;
    }

    public function action_contact() {
        $view = View::Forge('layout/contactus');
        $header = View::Forge('layout/header');
        $header->registration = View::Forge('layout/registration');
        $view->header = $header;
        $view->sidebar = View::Forge('layout/component/sidebar-left');
        $view->footer = View::Forge('layout/footer');
        return $view;
    }

    public function action_sellrentproperty($subname = null) {
        if ($subname == null) {
            if (Input::method() == 'POST') {
                $obj = new Model_CommonFunction();
                $unitdata = $obj->get_data(array('table' => 'unit'), array('unit_id' => 'unit_id', 'unit' => 'unit_name'));
                $numberdata = $obj->get_data(array('table' => 'number'), array('number' => 'number_id', 'number_name' => 'number'));
                $view = View::Forge('layout/property');
                $header = View::Forge('layout/header');
                $header->registration = View::Forge('layout/registration');
                $view->header = $header;
                $view->sidebar = View::Forge('layout/component/sidebar-left');
                $view->postproperty = View::Forge('layout/postproperty');
                $propertyfeature = View::forge('admin/sellproperty/propertyfeature');
                $aminities = View::forge('admin/sellproperty/amenities');
                $form = View::forge('admin/sellproperty/propertymaster');
                $form->msg = 'success';
                $form->unit = $unitdata;
                $form->number = $numberdata;
                $view->postproperty->propertymaster = $form;
                $view->postproperty->propertyfeature = $propertyfeature;
                $view->postproperty->aminities = $aminities;
                $view->postproperty->propertyfeature->number = $numberdata;
                $view->footer = View::Forge('layout/footer');
                return $view;
            } else {


                $obj = new Model_CommonFunction();
                $unitdata = $obj->get_data(array('table' => 'unit'), array('unit_id' => 'unit_id', 'unit' => 'unit_name'));
                $numberdata = $obj->get_data(array('table' => 'number'), array('number' => 'number_id', 'number_name' => 'number'));
                $view = View::Forge('layout/property');
                $header = View::Forge('layout/header');
                $header->registration = View::Forge('layout/registration');
                $view->header = $header;
                $view->sidebar = View::Forge('layout/component/sidebar-left');
                $view->postproperty = View::Forge('layout/postproperty');
                $propertyfeature = View::forge('admin/sellproperty/propertyfeature');
                $aminities = View::forge('admin/sellproperty/amenities');
                $form = View::forge('admin/sellproperty/propertymaster');
                $form->msg = '';
                $form->unit = $unitdata;
                $form->number = $numberdata;
                $view->postproperty->propertymaster = $form;
                $view->postproperty->propertyfeature = $propertyfeature;
                $view->postproperty->aminities = $aminities;
                $view->postproperty->propertyfeature->number = $numberdata;
                $view->footer = View::Forge('layout/footer');
                return $view;
            }
        } else {
            echo 'no ull' . $subname;
        }
    }

    public function action_bunglow() {
        $view = View::Forge('layout/bunglow');
        $header = View::Forge('layout/header');
        $header->registration = View::Forge('layout/registration');
        $view->header = $header;
        $view->sidebar = View::Forge('layout/component/sidebar-left');
        $view->project_listing = View::Forge('layout/project_listing');
        $view->footer = View::Forge('layout/footer');
        return $view;
    }

    public function action_newproject() {

        $view = View::Forge('layout/property');
        $header = View::Forge('layout/header');
        $header->registration = View::Forge('layout/registration');
        $view->header = $header;

        $view = View::Forge('layout/newproject');
        $view->header = View::Forge('layout/header');

        $view->sidebar = View::Forge('layout/component/sidebar-left');
        $view->projectlist = View::Forge('layout/project_listing');
//        $view->postproperty->propertytype = View::Forge('layout/propertytype');
//        $view->project_listing = View::Forge('layout/project');
        $view->footer = View::Forge('layout/footer');
        return $view;
    }

    public function action_login() {
        $view = View::Forge('layout/login');
        $header = View::Forge('layout/header');
        $header->registration = View::Forge('layout/registration');
        $view->header = $header;
        // $view->sidebar = View::Forge('layout/component/sidebar-left');
        // $view->project_listing = View::Forge('layout/project');
        $view->footer = View::Forge('layout/footer');
        return $view;
    }

    public function action_getcity($id = null) {

        $result = new Model_CommonFunction();
        $propertydata = $result->get_data(array('table' => 'city_area', 'where' => 'city_id', 'value' => $id), array('city_area_id', 'locality_name'));
        return json_encode($propertydata);
    }

    public function action_getcityarea($id = null) {

        $result = new Model_CommonFunction();
        $propertydata = $result->get_data(array('table' => 'locality', 'where' => 'city_area_id', 'value' => $id), array('locality_id', 'name'));
        return json_encode($propertydata);
    }

    public function action_getcityproject($id = null) {
        $result = new Model_CommonFunction();
        $data = $result->get_data(array('table' => 'project_society', 'where' => 'locality_id', 'value' => $id), array('project_society_id', 'Project_society_name'));
        return json_encode($data);
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
