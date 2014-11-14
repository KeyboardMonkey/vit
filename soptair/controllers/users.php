<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MY_Controller {

	public function view($id=NULL)
	{
		$message="";
		if($id==NULL)
		{
			redirect("users/index");
		}
		$user = new user();
		$user -> load($id);
		if(!isset($user->user_id))
		{
			redirect('users/index');
		}

		$this->load->view('templates/header');
		$this->load->view('templates/top-bar');
		$this->load->view('templates/left-bar');
		$this->load->view('pages/edit-user', array('user' => $user, 'message' => $message));

		$this->load->view('templates/footer');
	}



	public function logout()
	{

	$this->session->sess_destroy();
	$this->load->view('templates/header-clean');
	$this->load->view('pages/logout');
	$this->load->view('templates/footer');

	}


	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/side-navs');
		$this->load->view('pages/profile');
		$this->load->view('templates/footer');
	}
	public function edit($id=NULL)
	{

		if($id==NULL)$id = $this -> input-> post('id');
		$message = "";
		if($id==NULL)
		{
			redirect("users/index");
		}
		$user = new user();
		$user -> load($id);
		if(!isset($user->user_id))
		{
			redirect('users/index');
		}
		$this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
        $this -> form_validation -> set_rules ( 
        	array(
	        	array(
	        			'field' => 'first_name',
	        			'label' => 'First Name',
	        			'rules' => 'required|xss_clean|min_length[3]|max_length[20]'
	        	),
	        	array(
	        			'field' => 'first_name',
	        			'label' => 'Last Name',
	        			'rules' => 'required|xss_clean|min_length[3]|max_length[20]'
	        	),
	        	array(
	        			'field' => 'email',
	        			'label' => 'Email Address',
	        			'rules' => 'requried|xss_clean|valid_email'
	        	),
	        	array(
	        			'field' => 'password',
	        			'label' => 'Password',
	        			'rules' => 'requried|min_length[5]'
	        	),
	        	array(
	        			'field' => 'password_conf',
	        			'label' => 'Confirm Password',
	        			'rules' => 'requried|min_length[5]|matches[password]'
	        	)
	        )
        );
        if($this->form_validation->run())
        {

        	//$user -> first_name = $this -> input -> post('first_name');
        	// ..............
        	// ...............
        	// ...........
        	$password = $this -> input -> post('password');
        	
        	if($password != "**_OLD_PWD_**")
        	{
        		$user -> password = $this -> input -> post('password');
        	}
        	$user -> email = $this -> input -> post('email');
        	$message = '<div class="alert alert-success">User Updates Successfully</div>';
        	$user -> save();

        }
        else
        {
        	
        }
		$this->load->view('templates/header');
		$this->load->view('templates/top-bar');
		$this->load->view('templates/left-bar');
		$this->load->view('pages/edit-user', array('user' => $user, 'message' => $message));

		$this->load->view('templates/footer');
	}
}