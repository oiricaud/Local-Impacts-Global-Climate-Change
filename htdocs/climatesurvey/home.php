<?php
	$str_browser_language = !empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? strtok(strip_tags($_SERVER['HTTP_ACCEPT_LANGUAGE']), ',') : '';
	$str_browser_language = !empty($_GET['language']) ? $_GET['language'] : $str_browser_language;
	switch (substr($str_browser_language, 0,2))
	{
		case 'de':
			$str_language = 'de';
			break;
		case 'en':
			$str_language = 'en';
			break;
		default:
			$str_language = 'en';
	}
    
	$arr_available_languages = array();
	$arr_available_languages[] = array('str_name' => 'English', 'str_token' => 'en');
	$arr_available_languages[] = array('str_name' => 'Deutsch', 'str_token' => 'de');
    
	$str_available_languages = (string) '';
	foreach ($arr_available_languages as $arr_language)
	{
		if ($arr_language['str_token'] !== $str_language)
		{
			$str_available_languages .= '<a href="'.strip_tags($_SERVER['PHP_SELF']).'?language='.$arr_language['str_token'].'" lang="'.$arr_language['str_token'].'" xml:lang="'.$arr_language['str_token'].'" hreflang="'.$arr_language['str_token'].'">'.$arr_language['str_name'].'</a> | ';
		}
	}
	$str_available_languages = substr($str_available_languages, 0, -3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="docs/favicon.ico">
<title>Cover Template for Bootstrap</title>

<!-- Bootstrap core CSS -->
<link href="bootstrap/docs/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="bootstrap/docs/examples/cover/cover.css" rel="stylesheet">
</head>

<body background="images/NASA-ISS-newzealand.jpg">
<div class="site-wrapper">
  <div class="site-wrapper-inner">
    <div class="cover-container">
      <div class="masthead clearfix">
        <div class="inner">
          <h3 class="masthead-brand"> </h3>
          <nav class="nav nav-masthead"> <a class="nav-link" href="index.php">Home</a> <a class="nav-link active" href="#">About</a> <a class="nav-link" href="pre-survey.php">Pre-survey</a> <a class="nav-link" href="#">CO2 Process</a>  <a class="nav-link" href="#">Climate Data</a> <a class="nav-link" href="#">Biotic Impacts</a> 
          </nav>
        </div>
      </div>
      
      <div class="inner cover" >
      
        <h1 class="cover-heading"> Your contribution matters</h1>
 <p class="lead" >
			       
                   </p>
                   
                   <div class="mastfoot">
       
          
      </div>
				   </div> 
                    </div>
</div>