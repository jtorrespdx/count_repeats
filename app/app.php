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
        return $app['twig']->render('form.twig');
    });
