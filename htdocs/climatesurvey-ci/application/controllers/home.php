<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {
/*
    public function generateRandomNumber(){
        $name = "random number";
        $this->title = "Random Number";
    }
*/
	public function index($renderData=""){
		$name = "home";
		$this->title = "Home";
		$this->keywords = "climate change, survey, utep";	
		$folder = 'template';
		$this->_render('pages/home',$renderData, $folder);
	}

	public function preSurvey($renderData=""){	
		$this->title = "Pre Survey";
		$this->keywords = "climate change, survey, utep";	
        $folder = 'template';
		$this->_render('pages/presurvey',$renderData, $folder); 
	}

	public function co2($renderData=""){
		$this->title= "CO2 Process";
		$this->keywords = " climate change, climate data, utep";
		$folder = 'template';
		$this->_render('pages/co2', $renderData, $folder);
	}

	public function co2Questions($renderData=""){
		$this->title= "CO2 Process";
		$this->keywords = " climate change, climate data, utep";
		$folder = 'template';
		$this->_render('pages/co2-questions', $renderData, $folder);
	}
	
	public function climateData($renderData=""){ 
		$this->title= "Climate Data";
		$this->keywords = " climate change, climate data, utep";
		$folder = 'template';
		$this->_render('pages/climate-data', $renderData, $folder);
	}
	
	public function climateDataQuestions($renderData=""){
		$this->title= "Climate Data";
		$this->keywords = " climate change, climate data, utep";
		$folder = 'template';
		$this->_render('pages/climate-data-questions', $renderData, $folder);
	}

	public function bioticImpacts($renderData=""){
		$this->title= "Biotic Impacts";
		$this->keywords = " climate change, climate data, utep";
		$folder = 'template';
		$this->_render('pages/biotic-impacts', $renderData, $folder);
	}

    public function postSurvey($renderData=""){
		$this->title= "Post Survey";
		$this->keywords = " climate change, climate data, utep";
		$folder = 'template';
		$this->_render('pages/postSurvey', $renderData, $folder);
	}

    public function thankYou($renderData=""){
		$this->title= "Post Survey";
		$this->keywords = " climate change, climate data, utep";
		$folder = 'template';
		$this->_render('pages/thank-you', $renderData, $folder);
	}
}
