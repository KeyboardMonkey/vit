<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Preference extends MY_Controller 
{
		public function rank_preference()
	{

        $userInterests = $this -> user_interest_categories -> getWithCondition(
            array(
                'user_id' => $this -> session -> userdata('user_id'),
                'interest_level >' => '0'

            )
        );
     
        if(count($userInterests) >= 5)
        {
        	
            $i = 1;
            foreach($userInterests  as $interest)
            {

                $this -> form_validation -> set_rules('input_cat_' . $interest -> cat_id, 'Interest Category ' . $interest -> cat_id, 'required|numeric|greater_than[-1]');

            }
            if($this -> form_validation -> run()){
                $user_interest_levels = $this -> user_interest_level -> getWithCondition(array('user_id' => $this -> session -> userdata('user_id')));
                foreach($user_interest_levels as $iLevel)
                {
                    $iLevel -> delete();
                }
                $countInterest = count($userInterests);
                foreach($userInterests  as $interest)
                {
                    $user_interest_level = new user_interest_level();
                    $user_interest_level ->user_id = $this -> session -> userdata('user_id');
                    $user_interest_level -> load( $interest -> cat_id);
                    $user_interest_level -> delete();
                    $user_interest_level -> cat_id = $interest -> cat_id;
                    $user_interest_level -> level = $countInterest  - $this -> input -> post('input_cat_' . $interest -> cat_id) + 1;
                    $user_interest_level -> save();

                   // print_r($user_interest_level);
                }
                redirect('recommendations');

            }
        }
		$this->load->view('templates/header');
		$this->load->view('wizards/pref-rank');
		$this->load->view('templates/footer');
		

	}

	public function set_preference()
	{
            $this -> form_validation -> set_error_delimiters('<div class="alert alert-danger>', '</div>');
            $cats = $this -> course_cat -> get();
            foreach($cats as $cat){
                $this->form_validation->set_rules( 'cat_' . $cat->id, 'Category: ' . $cat -> category, 'required|is_number|greater_than[-1]|less_than[3]|exists[course_category.id]');
            }
            
           // print_r($_POST);
            if($this -> form_validation -> run())
            {

                foreach($cats as $cat){
                
                    $interest = new user_interest_categories();
                    $interest = $interest ->getWithConditionLimit1(array('cat_id' => $cat -> id, 'user_id' => $this -> session -> userdata('user_id')));
                    $interest -> user_id = $this -> session -> userdata('user_id');
                    $interest -> cat_id = $cat -> id;
                    $level = $this -> input -> post('cat_' . $cat->id);
                    echo "<br />LEVEL:{$level}<br/>";
                    $interest -> interest_level = $level ;
                    print_r($interest);
                    $interest -> save();

                }
                redirect('preference/rank_preference');
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