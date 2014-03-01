<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function index($page = 0) {
		// Survey homepage
		$this->data['display'] = false;
		$page = $this->uri->segment(3);
		$page = isset($page) ? $page : 0;
		$survey = $this->survey->get(1);
		$all_questions = $this->question->get_many_by(['survey_id' => 1]);
		$max_amount_per_page = 5;
		if($page > 0) {
			if($this->input->post()) {
				$this->data['questions'] = array_slice($all_questions, ($page-1)*5, $max_amount_per_page);
			}
			$this->data['display'] = true;
			$this->data['questions'] = array_slice($all_questions, ($page-1)*5, $max_amount_per_page);
		}
		$this->data['page_title'] = $survey->survey_name;
		if($this->input->post()) {
			$form_responses = $this->input->post();
			unset($form_responses['submit']);
			$responses = array();
			foreach($form_responses as $question_id => $value) {
				$responses[str_replace('question_', '', $question_id)] = $value;
			}
			print_r($responses);
		}
	}
	public function json_output() {
		$this->view = false;
		//$array = ['question_type' => 'radio','options' => ['5' => 'Extremely convenient', '4' => 'Very convenient', '3' => 'Moderately convenient', '2' => 'Slightly convenient', '1' => 'Not at all convenient']];
		//echo json_encode($array);
		$a = [1,2,3,4,5,6,7,8];
		print_r(array_slice($a, 4, 10));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */