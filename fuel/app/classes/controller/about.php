<?php

 
class Controller_about extends Controller
{

	
	public function action_index()
	{
           $view = View::Forge('layout/aboutus');
           $view->header =  View::Forge('layout/header');
          
           $view->footer=View::Forge('layout/footer');
           return $view;
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_hello()
	{
	echo 'this is hello';
		//return Response::forge(Presenter::forge('welcome/hello'));
	}

	public function action_abc()
	{
	echo 'this is abc';
		//return Response::forge(Presenter::forge('welcome/hello'));
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
