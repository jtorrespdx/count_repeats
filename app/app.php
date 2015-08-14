<?php
    //required files.
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    //make sure twig works with the correct directory
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__."/../views"
    ));
    //this is the route to the homepage.
    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    //this is the route to the resuts page.
    $app->get("/results", function() use ($app) {

        //new counter
        $repeat_counter = new RepeatCounter;

        //gets the inputs from the form and the results
        $phrase = $_GET['phrase'];
        $word = $_GET['word'];
        $repeat_counter_number = $repeat_counter->countRepeats($phrase, $word);

        //shows us the results page
        return $app['twig']->render('results.html.twig', array('count' => $repeat_counter_number, 'word' => $word, 'phrase' => $phrase));

    });

    return $app;
?>
