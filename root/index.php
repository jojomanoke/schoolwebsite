<?php

 include('inc/header.php');
 include('inc/navbar.php');

if (!empty($_GET['page'])) {
  switch ($_GET['page']) {
    default;
    include('inc/homepage.php');
    break;


    case 'inc/Joas.php';
    include ('inc/Joas.php');
    break;
    
    case'inc/Sylvano.php';
    include('inc/Sylvano.php');
    break;

    case 'inc/portfolio_keuze.php';
    include ('inc/portfolio_keuze.php');
    break;  

    case 'inc/school.php';
    include ('inc/school.php');
    break;  

    case 'inc/vakken.php';
    include ('inc/vakken.php');
    break;  

    case 'inc/opdrachten.php';
    include ('inc/opdrachten.php');
    break;  

    case 'inc/tijd.php';
    include('inc/tijd.php');
    break;

    case 'inc/vooropleidingen.php';
    include('inc/vooropleidingen.php');
    break;

    case 'inc/waarom.php';
    include('inc/waarom.php');
    break;

    default:
    include('inc/homepage.php');
    

    }
}
else {
  include ('inc/homepage.php');
}

include'inc/footer.php';

include 'inc/javascript.php';
 ?>