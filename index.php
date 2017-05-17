<?php
    //Require the autoload file
    error_reporting('E_ALL');
    require_once('vendor/autoload.php');
    session_start();
    
    //Create an instance of the Base class
    $f3 = Base::instance();
    
    
    
    //Default route
    $f3->route('GET /', function($f3) {

    //save variables
    $f3->set('username', 'jahmo');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working with Templates');
    $f3->set('temp', 68);
    $f3->set('temp2', 68);
    $f3->set('color', 'purple');
    $f3->set('radius', 10);
    
    //Array
    $f3->set('bookmarks', array('http://www.cnet.com', 'http://:www.reddit.com/r/news', 'http://edition.cnn.com/sport'));
    
    $f3->set('addresses', array('primary' => '1000 Apple Ln. Seattle, Wa 98999', 'secondary' => '2510 100th Court Tac, WA 90000'));
    $f3->set('desserts', array('chocolate' => 'Chocolate Mousse', 'vanilla' => 'vanilla Custard', "starwberry" => "Strawberry Shortcake"));
    
    
    
    //load a template
    echo Template::instance()->render('pages/info.html');
    
        
    });

    //Run fat free
    $f3->run();
    