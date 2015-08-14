<?php 
	require_once __DIR__."/../vendor/autoload.php";
	require_once __DIR__."/../src/RepeatCounter.php";
	/*
		Pretty Standard App file for routing 
	*/
	$app = new Silex\Application();
	$app['debug'] = true;
	$app->register(new Silex\Provider\TwigServiceProvider(), array(
		'twig.path' => __DIR__.'/../views'
	));
	
	$app->get("/", function() use ($app) {
		return $app['twig']->render('home.html.twig');
	});
	$app->get("/result", function() use ($app) {
		$wordCount = new RepeatCounter;
		$result = $wordCount->countRepeats($_GET['word'], $_GET['wordString']);
		return $app['twig']->render('result.html.twig', array('result' => $result));
	});
	
	return $app;
?>