<?php
require_once'../includes/Airport.php';
require_once'../includes/Flight.php';
?>
<!DOCTYPE html>

<html>
  <?php include_once 'head.php' ?>

<body>
<div class="container">

    <?php include_once 'header.php' ?>

    <div class="content-wrap">
        <div class="content">
            <?php

if(isset($_GET['step']))
    $step = filter_input(INPUT_GET,'step',FILTER_SANITIZE_STRING);
else
    $step="";

if (login_check($mysqli)) {
    if($step=="createFlight" || $step=="editFlight") {

        if ($step == "createFlight") {
            $flight = new Flight();
            $nextStep = "store";
        }else {
            if (isset($_GET['flight_number'])) {
                $flight_id = urldecode(filter_input(INPUT_GET, 'flight_number', FILTER_SANITIZE_STRING));
            }else {
                Common::error("Error: Flight ID could not be found!");
                die();
            }
                $flight = new Flight($flight_id);
                $nextStep = "update";
        }

        Common::flightsAdminForm($nextStep,$flight->airline_name(),$flight->flight_number(),$flight->origin(),$flight->destination(),$flight->arrival_time(),$flight->departure_time(),$flight->status());

    }elseif($step=="storeFlight") {
        $flight = new Flight();
        if (isset($_POST['airline_name']) && isset($_POST['flight_number']) && isset($_POST['origin']) && isset($_POST['destination']) && isset($_POST['arrival_time']) && isset($_POST['departure_time']) && isset($_POST['status'])) {
            if($flight->create($_POST['flight_number'],$_POST['airline_name'],$_POST['destination'], $_POST['departure_time'], $_POST['arrival_time'], $_POST['status'],$_POST['origin'])){
                Common::error("Success: You've successfully added flight number ".$flight->flight_number()."!","success");
            }else{
                Common::error("There was an error with your submission. <a href=flightsAdmin.php?step=createFlight>Back</a>");
            }
        }else{
            Common::error("Error: One or more fields were left blank.");
        }
    }elseif($step=="updateFlight") {
        if (isset($_POST['flight_number'])) {
            $flight_id = urldecode(filter_input(INPUT_POST, 'flight_number', FILTER_SANITIZE_STRING));
        }else {
            Common::error("Error: Flight ID could not be found!");
            die();
        }
        $flight= new Flight($flight_id);
        if (isset($_POST['airline_name']) && isset($_POST['flight_number']) && isset($_POST['origin']) && isset($_POST['destination']) && isset($_POST['arrival_time']) && isset($_POST['departure_time']) && isset($_POST['status'])) {
            if($flight->edit($_POST['flight_number'],$_POST['airline_name'],$_POST['destination'], $_POST['departure_time'], $_POST['arrival_time'], $_POST['status'],$_POST['origin'])){
                Common::error("Success: You've successfully edited flight number ".$flight->flight_number()."!", "success");
            }else{
                Common::error("There was an error with your submission. <a href=flightsAdmin.php?step=editFlight&flight_id=".$flight_id.">Back</a>");
            }
        }

    }elseif($step=="deleteFlight"){
        if (isset($_GET['flight_number'])) {
            $flight_id = urldecode(filter_input(INPUT_GET, 'flight_number', FILTER_SANITIZE_STRING));
        }else {
            Common::error("Error: Flight ID could not be found!");
            die();
        }
        $flight= new Flight($flight_id);
       if($flight->delete()){
            Common::error("Success: You've successfully deleted flight number ".$flight->flight_number()."!","success");
       }else{
            Common::error("There was an error with your submission. <a href=flightsAdmin.php?step=createFlight>Back</a>");
       }
    }else{
        echo'<h1>Flights Admin</h1>';
        $flights = Common::selectFlights();
        echo'<table>
              <tr>
                  <th>Flight Number</th>
                  <th>Origin</th>
                  <th>Destination</th>
                  <th>Airline</th>
                  <th>Departure Time</th>
                  <th>Arrival Time</th>
                  <th>Status</th>
                  <th>Actions</th>
              </tr>';

              if($flights && count($flights)>0) {
                  foreach ($flights as $flight) {
                      echo "<tr>";
                      echo "<td>" . $flight->flight_number() . "</td>";
                      echo "<td>" . $flight->origin() . "</td>";
                      echo "<td>" . $flight->destination() . "</td>";
                      echo "<td>" . $flight->airline_name() . "</td>";
                      echo "<td>" . $flight->departure_time() . "</td>";
                      echo "<td>" . $flight->arrival_time() . "</td>";
                      echo "<td>" . $flight->status() . "</td>";
                      echo "<td> <a href='flightsAdmin.php?step=editFlight&flight_number=".urlencode($flight->flight_number())."'>EDIT</a> <a href='flightsAdmin.php?step=deleteFlight&flight_number=".urlencode($flight->flight_number())."'>DELETE</a></td>";

                      echo "</tr>";
                  }
              }else{
                  echo"<tr><td colspan='7'><center>There aren't any flights at this time.</center></td></tr> ";
              }
              ?>
            </table>
            <br>
            <br>
            <div style="text-align: right" ><a href="flightsAdmin.php?step=createFlight">+ Add New</a></div>
<?php
    }
}else{
    Common::error("You're not allowed to access this page!");
}
            ?>

            </div>
    </div>

    <?php include_once 'footer.php' ?>

        </div>
</body>
</html>
