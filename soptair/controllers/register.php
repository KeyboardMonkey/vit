<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller 
{
		public function view()
	{
		$message = "fdssdafasdfa";

		$this->load->view('templates/header-login');
		$this->load->view('pages/register', array('message' => $message));
		$this->load->view('widgets/signup-form');
		$this->load->view('templates/footer');
		

	}



        public function login(){
            $message = "";
                $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
                $this -> form_validation -> set_rules ( array(

				array(
						'field' => 'login',
						'label' => 'E-Mail Address',
						'rules' => 'required',
					),
				array(
						'field' => 'password',
						'label' => 'password',
						'rules' => 'required|min_length[5]',
					),
				
			));
                
                if($this->form_validation->run())
                {
                    $users =  $this -> user -> getWithCondition(
                                        array(
                                            'email' => $this -> input -> post('login'), 
                                            'password' => $this -> input -> post('password')
                                        )
                            
                      );
                  
                    if(count($users ) > 0)
                    {
                        foreach($users as $user){
                           
                              
                                $this -> session -> set_userdata('logged_in', true);
                                $this -> session -> set_userdata('user_id', $user -> user_id);
                                $this -> session -> set_userdata('email', $user -> email);
                                $this -> session -> set_userdata('type', $user -> type);
                                
                                  
                                redirect('home');
                        }
                       
                    }else{
                        $message = "<h4>No Such record found</h4>";
                    }
                    
                    
                }
		$this->load->view('templates/header-login');
		$this->load->view('pages/register', array('message' => $message));
		$this->load->view('templates/footer');
        }
	public function index()
	{
                $message = "";
                $success=FALSE;
                $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
                $this -> form_validation -> set_rules ( array(

				array(
						'field' => 'login',
						'label' => 'E-Mail Address',
						'rules' => 'required|valid_email|is_unique[users.email]',
					),
				array(
						'field' => 'password',
						'label' => 'password',
						'rules' => 'required|min_length[5]',
					),
				array(
						'field' => 'password_conf',
						'label' => 'Confirm Password',
						'rules' => 'required|min_length[5]|matches[password]',
					),
				array(
						'field' => 'first_name',
						'label' => 'First Name',
						'rules' => 'required|xss_clean|alpha',
					),
                array(
						'field' => 'last_name',
						'label' => 'last Name',
						'rules' => 'required|xss_clean|alpha',
					),
			));
               //print_r($_POST);
                if($this->form_validation->run())
                {
                	//ho "sab theeak hay bhai";
                    $user = new user();
                    $user -> username = $this -> input -> post('first_name')  . " " . $this -> input -> post("last_name");
                    $user -> password = $this -> input -> post('password');
                    $user -> email = $this -> input -> post('login');
                    $user -> type = "User";
                    $user -> save();

              			        $this -> session -> set_userdata('logged_in', true);
                                $this -> session -> set_userdata('user_id', $user -> user_id);
                                $this -> session -> set_userdata('email', $user -> email);
                                $this -> session -> set_userdata('type', $user -> type);
                                

                    $message = "<h4>Kindly check email({$user -> email}) for further verification</h4>";
                  	//header("Location:".base_url()."index.php/preference");
                    $success=TRUE;
                }
                else{
                	// $message="Form Not Submitted!";
                }
		$this->load->view('templates/header-login');
		$this->load->view('pages/register', array('message' => $message, 'success' => $success));
		$this->load->view('widgets/signup-form', array('message' => $message, 'success' => $success));
		$this->load->view('templates/footer');



	}



}/*class Register extends CI_Controller */
/*end of file: register.php*/