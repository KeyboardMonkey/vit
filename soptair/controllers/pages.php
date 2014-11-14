<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends MY_Controller 
{
	public function view ($page = 'about')
	{
		
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			show_404();
		// /echo 'Whoops, we don\'t have a page for that!';
		}	
		//	echo APPPATH; // working one is "application/" .... new one working fine too: "../../vit-core/soptair/"

		//	$this->load->view('/pages/home');

	$data['title'] = ucfirst($page); // Capitalize the first letter
	$data['name'] = 'I have no name, okay?';

	$this->load->view('templates/header', $data);
	$this->load->view('templates/breadcrumbs', $data);
 	// $this->load->view('templates/side-navs', $data);
	$this->load->view('pages/'.$page, $data);
	$this->load->view('templates/footer', $data);
	}

	public function index()
	{
		$bc='chaloye';
		$this->load->view('home');

	}


	// public function index()
	// {
	// 	//$this->load->view('welcome_message');
	// 	$this->load->view('/pages/about');
		
	// 	//$this->load->view(BASEPATH.'views/pages/about.php');
	// 	//echo APPPATH;
	// }
}/*class Pages extends MY_Controller */
/*end of file: pages.php*/