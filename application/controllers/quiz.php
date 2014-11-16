<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quiz extends MY_Controller 
{

	public function add($course_id =  NULL)
	{
		if($course_id == NULL)
		{
			redirect('library');
		}
		else
		{
			$course = new course();
			$course -> load($course_id);

				/*print_r($course);
				die();*/

			if(!isset($course -> course_id))
			{
				redirect('library');
			}
		}

	 	$message = "";

	    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	    $this -> form_validation -> set_rules ( array(

		    array(
		      'field' => 'quiztitle',
		      'label' => 'New Assessment',
		      'rules' => 'required|xss_clean',
		      ),

		    array(
		      'field' => 'question',
		      'label' => 'Question',
		      'rules' => 'required|xss_clean',
		      ),

		    array(
		        'field' => 'option1',
		        'label' => 'Option 1',
		        'rules' => 'required|xss_clean',
		      ),

		    array(
		        'field' => 'option2',
		        'label' => 'Option 2',
		        'rules' => 'required|xss_clean',
		      ),

		    array(
		        'field' => 'option3',
		        'label' => 'Option 3',
		        'rules' => 'required|xss_clean',
		      ),

		    array(
		        'field' => 'option4',
		        'label' => 'Option 4',
		        'rules' => 'required|xss_clean',
		      ),

 			array(
		        'field' => 'correct_answer',
		        'label' => 'Correct Answer Bullet',
		        'rules' => 'required',
		      )
 			
 			));
$assessment_name=NULL;
$quiz_id= NULL;
 if($this->form_validation->run())
     {

     	$assessment_name = $this -> input -> post('quiztitle');
        $quiz_question = new quiz_question();
        $quiz = new quiz_model();

        if (isset($_POST['quiz_id'])){
         $quiz -> load($_POST['quiz_id']);
        }

        $quiz -> quiz_title  = $this -> input -> post('quiztitle');
        $quiz -> course_id  = $course_id;
        
        $quiz_question -> question_text  = $this -> input -> post('question');
        $quiz_question -> option_1  = $this -> input -> post('option1');
        $quiz_question -> option_2  = $this -> input -> post('option2');
        $quiz_question -> option_3  = $this -> input -> post('option3');
        $quiz_question -> option_4  = $this -> input -> post('option4');
        $quiz_question -> correct_answer  = $this -> input -> post('correct_answer');
		
		$quiz -> save();
		
        $quiz_question -> quiz_id = $quiz -> quiz_id;
     //   if($this->form_validation->run()){
        	print_r($_POST);
       // }

		$quiz_question -> save();

		$quiz_id = $quiz -> quiz_id;
        $message = "<h5>Assessment: {$quiz->quiz_title} entered successfully!";
     }

		$this->load->view('templates/header');
		$this->load->view('pages/quiz-add', array('message' => $message, 'assessment_name' => $assessment_name, 'quiz_id' => $quiz_id ));
		$this->load->view('templates/footer');
	}

		public function result()
	{
	//	$this->load->view('templates/header');
		$this->load->view('templates/styleNscripts');
		$this->load->view('popups/quiz-result-popup');
	//	$this->load->view('templates/footer');
	}
	public function index($course_id = NULL, $question_index = 0)
	{
            $show_quiz = FALSE;
                //print_r($_POST);
		if($course_id == NULL) redirect('library');
		$course = new course();
		$course -> load($course_id);
		if(!isset($course -> course_id)) redirect('library');
                $quiz = new quiz_model();
                $quiz = $quiz -> getWithConditionLimit1(array('course_id' => $course_id));
                $questions = $this -> quiz_question -> getWithCondition(array('quiz_id' => $quiz -> quiz_id));
                $randomQuestions = array();
               // echo " << " . count($_POST);
                
                $num_questions = $this -> session -> userdata('total_questions');
               // echo ">> {$num_questions} <br />";
                if(count($_POST) > 0 )
                {
                    //print_r($_POST);
                   $show_quiz = FALSE;
                   //echo "<< " ;
                    $question_ids = array();
                    
                    for($i = 0; $i < $num_questions; $i += 1)
                    {
                        $key = 'question_' .  $i;
                        $question_ids[$i] = $this -> session -> userdata($key);
                        
                        
                        
                    }
                    $answers = array();
                        foreach ($question_ids as $question_id)
                        {
                            $answers[$question_id] = $this -> input -> post('q_'.$question_id);
                        }
                        foreach ($question_ids as $question_id)
                        {
                            echo "Question: {$question_id} => {$answers[$question_id]} <br /> <br />";
                            $quiz_question = new quiz_question();
                            $quiz_question -> load($question_id);
                            echo "Correct Answer: {$quiz_question -> {$quiz_question -> correct_answer}} You Answered: {$quiz_question->{ $answers[$question_id]}} <br />";
                            if($quiz_question -> correct_answer == $answers[$question_id])
                            {
                                echo "Correct Anser <br />";
                            }
                            else
                            {
                                echo "incorrect ans <br />";
                            }
                       }
                   // print_r($question_ids);
                    
                }
                else {
                    
                    $randomQuestions = $course ->getRandomQuestions();
                    $show_quiz = TRUE;
                    $i = 0;
                    $this -> session -> set_userdata('total_questions', count($randomQuestions));
                    foreach($randomQuestions as $question)
                    {
                        $key = 'question_' .  $i;
                        $this -> session -> set_userdata($key, $question -> question_id);
                        echo "DONE {$key} <br />";
                        echo  $this -> session -> userdata('question_' . $i);
                        echo "<< <br />";
                        $i ++;
                    }
                    
                    //$this -> session -> set_userdata('questions', $randomQuestions);
                }

                
                
		$this->load->view('templates/header');
		$this->load->view('pages/quiz', array( 'course_id' => $course_id, 'questions' => $randomQuestions));
		$this->load->view('templates/footer');
	}

}/*class Quiz extends MY_Controller */
/*end of file: quiz.php*/