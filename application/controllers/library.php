<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Library extends MY_Controller 
{
      

	public function index($type = NULL, $value = NULL)
	{
        if($type != 'category') $type = NULL;
		$this->load->view('templates/header');
		$this->load->view('templates/breadcrumbs');
		$this->load->view('pages/library', array('filter_type' => $type, 'filter_value' => $value ));
	//	$this->load->view('widgets/category-leaders', array('filter_type' => $type, 'filter_value' => $value ));
		$this->load->view('templates/footer');

	}



}/*class Library extends MY_Controller  */
/*end of file: library.php*/