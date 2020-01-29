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
//Require validation functions
require('model/validation-functions.php');

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

//Error array
$f3->set('errors', array('fn'=>'', 'ln'=>'', 'age'=>'', 'ph'=>'','em'=>'', 'st'=>''));

//sticky
$f3->set('fn', '');
$f3->set('ln', '');
$f3->set('age', '');
$f3->set('ph', '');
$f3->set('em', '');

//Define a default route
$f3->route('GET /', function($f3){
    $f3->set('title', 'Round Earth Society');

    $view = new Template();
    echo $view-> render('views/header.html');
    echo $view-> render('views/home.html');

});

//Form routes

//First form 'Sign-up'
$f3->route('GET|POST /sign-up', function($f3) {
    $f3->set('title', 'Sign up');

    //display a views
    $view = new Template();

    //check if $POST even exists, then validate
    if (isset($_POST['fn'])&&isset($_POST['ln'])&&isset($_POST['age'])
        &&isset($_POST['ph'])) {

        //check valid strings and numbers
        if (validAge($_POST['age']) && validName($_POST['fn'])
            && validName($_POST['ln'])&& validPhone($_POST['ph'])) {

            $_SESSION ['fn'] = $_POST['fn'];
            $_SESSION ['ln'] = $_POST['ln'];
            $_SESSION ['age'] = $_POST['age'];
            $_SESSION ['ph'] = $_POST['ph'];
            if(isset($_POST['g'])){
                $_SESSION ['g'] = $_POST['g'];
            }
            else{
                $_SESSION ['g'] = 'Not Given';
            }

            $f3->reroute('/bio');
        }
        else
        {
            //instantiate an error array with message
            if(!validName($_POST['fn'])){
                $f3->set("errors['fn']", "*invalid first name.");
            }
            if(!validName($_POST['ln'])){
                $f3->set("errors['ln']", "*invalid first name.");
            }
            if(!validAge($_POST['age'])){
                $f3->set("errors['age']", "*invalid age. Age should be between 18 and 118.");
            }
            if(!validPhone($_POST['ph'])){
                $f3->set("errors['ph']", "*invalid phone number. ex: 999-999-9999");
            }
            $f3->set('fn', $_POST['fn']);
            $f3->set('ln', $_POST['ln']);
            $f3->set('age', $_POST['age']);
            $f3->set('ph', $_POST['ph']);
        }
    }
    echo $view-> render('views/header.html');
    echo $view->render('views/form1.html');
});

$f3->route('GET|POST /bio', function($f3) {

    $f3->set('title', 'Biography');

    $view = new Template();

    //check if $POST even exists, then validate
    if (isset($_POST['em'])&&isset($_POST['st'])) {
        //check valid strings and numbers
        if (validEmail($_POST['em']) && validState($f3->get('states'), $_POST['st'])) {

            $_SESSION ['em'] = $_POST['em'];
            $_SESSION ['st'] = $_POST['st'];
            if(isset($_POST['bio'])){
                $_SESSION ['bio'] = $_POST['bio'];
            }

            $f3->reroute('/hobbies');
        }
        else
        {
            //instantiate an error array with message
            if(!validEmail($_POST['em'])){
                $f3->set("errors['em']", "*email field is empty or invalid. ex: someonecool@domain.com");
            }
            if(!validState($f3->get('states'), $_POST['st'])){
                $f3->set("errors['st']", "*state field is empty or invalid.");
            }
        }
    }
    echo $view-> render('views/header.html');
    echo $view->render('views/form2.html');
});

$f3->route('GET|POST /hobbies', function($f3) {

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