<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Preference extends MY_Controller 
{
		public function rank_preference()
	{

		$this->load->view('templates/header');
		$this->load->view('wizards/pref-rank');
		$this->load->view('templates/footer');
		

	}

	public function set_preference()
	{
            $this -> form_validation -> set_error_delimiters('<div class="alert alert-danger>', '</div>');
            $cats = $this -> course_cat -> get();
            foreach($cats as $cat){
                $this->form_validation->set_rules( $cat->id, 'Category: ' . $cat -> category, 'required|is_number|greater_than[-1]|less_than[3]|exists[course_category.id]');
            }
            
            print_r($_POST);
            if($this -> form_validation -> run())
            { 
                foreach($cats as $cat){
                
                    $interest = new user_interest_categories();
                    $interest = $interest ->getWithConditionLimit1(array('cat_id' => $cat -> id, 'user_id' => $this -> session -> userdata('user_id')));
                    $interest -> user_id = $this -> session -> userdata('user_id');
                    $interest -> cat_id = $cat -> id;
                    $level = $this -> input -> post($cat->id);
                   // echo "<br />LEVEL:{$level}<br/>";
                    $interest -> interest_level = $level ;
                   // print_r($interest);
                    $interest -> save();
                
                }
               
            }
        $this->load->view('templates/header');
		$this->load->view('wizards/pref-set');
		$this->load->view('templates/footer');
	}

	public function index()
	{

		redirect('preference/set_preference');

	}



}/*class Preference extends MY_Controller */
/*end of file: preference.php*/