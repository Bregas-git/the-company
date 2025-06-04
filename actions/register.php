<?php
include "../classes/User.php";

//create the obj
$user = new User;

//call the method
$user->store($_POST);
//the $post holds all the date from the form in views.register


?>