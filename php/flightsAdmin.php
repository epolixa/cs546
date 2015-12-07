<?php
include_once "header.php";
require_once'../includes/Airport.php';
require_once'../includes/Flight.php';
include_once '../includes/db_connect.php';
include_once '../includes/functions.php';
require_once 'data.php';
//sec_session_start();

if(isset($_GET['step']))
    $step = filter_input(INPUT_GET,'step',FILTER_SANITIZE_STRING);
else
    $step="";

print_r($_POST);

//if (login_check($mysqli)) {
    if($step=="createFlight" || $step=="editFlight") {

        if ($step == "createFlight") {
            $flight = new Flight();
            $nextStep = "store";
        }else {
            if (isset($_GET['flight_number'])) {
                $flight_id = filter_input(INPUT_GET, 'flight_number', FILTER_SANITIZE_STRING);
            }else {
                echo "Error: Flight ID could not be found!";
                die();
            }
                $flight = new Flight($flight_id);
                $nextStep = "update";
        }

        echo '<form id = "flights_id" action = "flightsAdmin.php?step='.$nextStep.'Flight" method = "POST">';
        echo 'Airline:<input type = "text" name = "airline_name"  id = "airline_id"  value = "'.$flight->airline_name().'" style = "width: 350px" required /> <br>';
        echo 'Flight Number:<input type = "text" name = "flight_number"  id = "flight_id" value = "' . $flight->flight_number() . '"  style = "width: 350px" required /> <br>';
        echo 'Origin:<input type = "text" name = "origin"  id = "origin_id" value = "' . $flight->origin() . '"  style = "width: 350px"  required/> <br>';
        echo 'Destination:<input type = "text" name = "destination"  id = "destination_id" value = "' . $flight->destination() . '"  style = "width: 350px"  required/> <br>';
        echo 'Arrival Time:<input type = "text" name = "arrival_time"  id = "arrival_time_id" value = "' . $flight->arrival_time() . '"  style = "width: 350px"  required/> <br>';
        echo 'Departure Time:<input type = "text" name = "departure_time"  id = "departure_time_id" value = "' . $flight->departure_time() . '"  style = "width: 350px"  required /> <br>';
        echo 'Status:<input type = "text" name = "status"  id = "status_id" value = "' . $flight->status() . '"  style = "width: 350px"  required/> <br>';
        echo '<input type="submit" value="'.ucfirst($nextStep).'">';
        echo '</form><br><br>';
    }elseif($step=="storeFlight") {
        $newFlight = new Flight();
        if (isset($_POST['airline_name']) && isset($_POST['flight_number']) && isset($_POST['origin']) && isset($_POST['destination']) && isset($_POST['arrival_time']) && isset($_POST['departure_time']) && isset($_POST['status'])) {
            if($newFlight->create($_POST['flight_number'],$_POST['airline_name'],$_POST['destination'], $_POST['departure_time'], $_POST['arrival_time'], $_POST['status'],$_POST['origin'])){
                echo"SUCCESS! You've successfully added flight number ".$newFlight->flight_number()."!";
            }else{

                echo"There was an error with your submission. <a href=flightsAdmin.php?step=createFlight>Back</a>";
            }

        }
    }elseif($step=="updateFlight") {
        if (isset($_POST['flight_number'])) {
            $flight_id = filter_input(INPUT_POST, 'flight_number', FILTER_SANITIZE_STRING);
            echo"HIT!";
        }else {
            echo "Error: Flight ID could not be found!";
            die();
        }
        echo "!!!!!---------  $flight_id   ------------!!!!";
        $flight= new Flight($flight_id);
        if (isset($_POST['airline_name']) && isset($_POST['flight_number']) && isset($_POST['origin']) && isset($_POST['destination']) && isset($_POST['arrival_time']) && isset($_POST['departure_time']) && isset($_POST['status'])) {
            if($flight->edit($_POST['flight_number'],$_POST['airline_name'],$_POST['destination'], $_POST['departure_time'], $_POST['arrival_time'], $_POST['status'],$_POST['origin'])){
                echo"SUCCESS! You've successfully edited flight number ".$flight->flight_number()."!";
            }else{
                echo"There was an error with your submission. <a href=flightsAdmin.php?step=editFlight&flight_id=".$flight_id.">Back</a>";
            }
        }
    }elseif($step=="deleteFlight"){
        if (isset($_GET['flight_number'])) {
            $flight_id = filter_input(INPUT_GET, 'flight_number', FILTER_SANITIZE_STRING);
        }else {
            echo "Error: Flight ID could not be found!";
            die();
        }
        $flight= new Flight($flight_id);
       if($flight->delete()){
            echo"SUCCESS! You've successfully deleted flight number ".$flight->flight_number()."!";
       }else{
            echo"There was an error with your submission. <a href=flightsAdmin.php?step=createFlight>Back</a>";
       }
    }else{
        echo'flightsAdmin Home Page<br>
        <a href="flightsAdmin.php?step=createFlight">Create Flight</a><br>
        <a href="flightsAdmin.php?step=editFlight&flight_number=123">Edit Flight with an ID of 123</a><br>
        <a href="flightsAdmin.php?step=deleteFlight&flight_number=123">Delete Flight with an ID of 123</a>';

    }
//}else{
//    echo"Youre not allowed to access this page!";
//}
