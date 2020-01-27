<?php
/**
 * Created in PhpStorm
 * @author Brian Kiehn
 * @date 1/27/2020
 * @version 2.0
 * index.php
 * https://github.com/medioxumate/dating2b.git
 * GreenRiverDev
 */

//Session
session_start();

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Interests arrays
$f3->set('in', array('tv', 'puzzles', 'movies', 'reading', 'cooking',
    'playing cards', 'globe making', 'video games'));
$f3->set('out', array('swimming', 'running', 'hiking', 'metal detecting',
    'collecting', 'horseback riding', 'pokemon go', 'bird watching'));

//State array
$f3->set('states', array('Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado',
    'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois',
    'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland',
    'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana',
    'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York',
    'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania',
    'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah',
    'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming',
    'American Samoa', 'District of Columbia', 'Guam', 'Marshall Islands', 'Northern Mariana Islands',
    'Palau', 'Puerto Rico', 'Virgin Islands'));

//Define a default route
$f3->route('GET /', function($f3){
    $f3->set('title', 'Round Earth Society');

    $view = new Template();
    echo $view-> render('views/header.html');
    echo $view-> render('views/home.html');

});

//Form routes
$f3->route('POST /sign-up', function($f3) {
    $f3->set('title', 'Sign up');

    $view = new Template();
    echo $view-> render('views/header.html');
    echo $view->render('views/form1.html');
});

$f3->route('POST /bio', function($f3) {

    $_SESSION ['fn'] = $_POST['fn'];
    $_SESSION ['ln'] = $_POST['ln'];
    $_SESSION ['age'] = $_POST['age'];
    $_SESSION ['ph'] = $_POST['ph'];
    $_SESSION ['g'] = $_POST['g'];

    $f3->set('title', 'Biography');

    $view = new Template();
    echo $view-> render('views/header.html');
    echo $view->render('views/form2.html');
});

$f3->route('POST /hobbies', function($f3) {
    $_SESSION ['em'] = $_POST['em'];
    $_SESSION ['st'] = $_POST['st'];
    $_SESSION ['sk'] = $_POST['sk'];
    $_SESSION ['bio'] = $_POST['bio'];

    $f3->set('title', 'hobbies');

    $view = new Template();
    echo $view-> render('views/header.html');
    echo $view->render('views/form3.html');
});

$f3->route('POST /profile', function($f3) {
    $_SESSION['in'] = $_POST['in'];
    $_SESSION['out'] = $_POST['out'];

    $f3->set('title', 'profile');

    $view = new Template();
    echo $view-> render('views/header.html');
    echo $view->render('views/profile.html');
});

//Run Fat-free
$f3->run();