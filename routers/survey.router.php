<?php

use models\Survey;

// Get user
$app->get('/survey', function () use ($app) {	
	
	$oLaboratory = new Survey ();
	$surveys = $oLaboratory->getSurveys();
	$app->contentType('application/json');
	echo json_encode($surveys);
});