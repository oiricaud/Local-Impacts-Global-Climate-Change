<!-- Navigation bar -->
<?php 
	// Sets the blue bar on the current page for the navigation bar // 
	$link1 = "nav-link";
	$link2 = "nav-link";
	$link3 = "nav-link";
	$link4 = "nav-link";
	$link5 = "nav-link";
	$link6 = "nav-link";
/*
	if($title = "Random Number"){
		$this->load->helper('string');
		echo random_string('alnum',5);
	}
*/
	if( $title == "Home"){
		$link1 = "nav-link active";
	}
	
	if( $title == "Pre Survey"){
		$link2 = "nav-link active";
	}
	
	if( $title == "CO2 Process" or ($title == "co2Questions")){
		$link3 = "nav-link active";
	}
	
	if( $title == "Climate Data"){
		$link4 = "nav-link active";
	}
	
	if( $title == "Biotic Impacts"){
		$link5 = "nav-link active";
	}
	
	if( $title == "Post Survey"){
		$link6 = "nav-link active";
	}
?>

<!-- Navigation bar --> 
<nav class="nav nav-masthead col-md-12">

   <!-- Home -->	
   <a class="<?php echo $link1 ?>" href="<?php echo site_url('home')?>">
        About
    </a>    
    
   <!-- Pre-Survey -->                         
   <a class="<?php echo $link2 ?>" href="<?php echo site_url('home/preSurvey')?>">
        Pre-survey
    </a>  
    
   <!-- CO2 Process -->                         
   <a class="<?php echo $link3 ?>" href="<?php echo site_url('home/co2Questions')?>">
        CO2 Process
    </a>  
    
   <!-- Climate Data-->                            
   <a class="<?php echo $link4 ?>" href="<?php echo site_url('home/climateData')?>">
        Climate Data
    </a> 
    
   <!-- Biotic Impacts -->            
   <a class="<?php echo $link5 ?>" href="<?php echo site_url('home/bioticImpacts')?>"> 
        Biotic Impacts
    </a> 
    
   <!-- Post Survey -->
   <a class="<?php echo $link6 ?>" href="<?php echo site_url('home/postSurvey')?>">
        Post Survey
    </a>
    
</nav>


