<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {	 
	/* Index */
	public function index()
	{
		
		$this->load->view('pages/about');
	}
	/* Pre-survey */
	public function preSurvey()
	{
		$this->load->view('pages/preSurvey');
	}
	/* CO2 */ 
	public function co2()
	{
		$this->load->view('pages/co2');
	}
	/* co2-questions */ 
	public function co2Questions()
	{
		$this->load->view('pages/co2questions');
	}	
	/* climate-data */ 
	public function climateData()
	{
		$this->load->view('pages/climatedata');
	}	
	/* climate-data-questions */ 
	public function climateDataQuestions()
	{
		$this->load->view('pages/climatedataquestions');
	}	
	/* biotic-impacts */ 
	public function bioticImpacts()
	{
		$this->load->view('pages/bioticimpacts');
	}	
	/* Thank you!  */ 
	public function thankyou()
	{
		$this->load->view('pages/thankyou');
	}	
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */