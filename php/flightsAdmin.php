<?php

        require_once 'data.php';
        $data = new reviewsFormation();
        
        $flights = $data->getFlights();

        if(count($flights)!=0){
          foreach ($flights as $flgt){
        echo '<form id = "flights_id" action = "flightStatus.php" method = "POST">';       
        echo 'Airline:<input type = "text" name = "airline"  id = "airline_id"  value = "'.$flgt["airline_name"].'" style = "width: 350px"/> <br>';
        echo 'Flight Number:<input type = "text" name = "flight_number"  id = "flight_id" value = "'.$flgt["flight_number"].'"  style = "width: 350px" /> <br>';
        echo 'Origin:<input type = "text" name = "origin"  id = "origin_id" value = "'.$flgt["origin"].'"  style = "width: 350px" /> <br>';
        echo 'Destination:<input type = "text" name = "destination"  id = "destination_id" value = "'.$flgt["destination"].'"  style = "width: 350px" /> <br>';
        echo 'Arrival Time:<input type = "text" name = "arrival_time"  id = "arrival_time_id" value = "'.$flgt["arrival_time"].'"  style = "width: 350px" /> <br>';
        echo 'Departure Time:<input type = "text" name = "departure_time"  id = "departure_time_id" value = "'.$flgt["departure_time"].'"  style = "width: 350px" /> <br>';
        echo 'Status:<input type = "text" name = "status_time"  id = "status_id" value = "'.$flgt["status"].'"  style = "width: 350px" /> <br>';
        echo '<input type="submit" value="Update" onclick = "return check();">';
        echo '</form><br><br>' ;
        }

      }
        /*session_start(); 
        echo '<form id = "back_login" action = "protected_page.php" method = "POST">';         
        echo '<input type = "submit" value="Back to Account">';
        echo '</form>';

        echo '<form id = "sign_off" action = "includes/logout.php" method = "POST">';         
        echo '<input type = "submit" value="Sign Off">';           
        echo '</form>';*/
               
    ?>

         
    </article>

    <script>function check(){var error_section = document.getElementById("error"); 
          var validated_form = document.getElementById("flights_id");
          var validated_airline_input = document.getElementById("airline_id");
          var validated_flight_number_input = document.getElementById("flight_id");
          var validated_origin_input = document.getElementById("origin_id");
          var validated_destination_input = document.getElementById("destination_id");
          var validated_arrival_time_input = document.getElementById("arrival_time_id");
          var validated_departure_time_input = document.getElementById("departure_time_id");
          var validated_status_input = document.getElementById("status_id");
          var error_section = document.getElementById("error");

         if (validated_airline_input.value && validated_airline_input.value !== "") 
         if(validated_flight_number_input.value && validated_flight_number_input.value !== "")
          if(validated_origin_input.value && validated_origin_input.value !== "")
           if(validated_destination_input.value && validated_destination_input.value !== "")
            if(validated_arrival_time_input.value && validated_arrival_time_input.value !== "") 
             if(validated_departure_time_input.value && validated_departure_time_input.value !== "")
              if(validated_status_input.value && validated_status_input.value !== "")                
                return true;

        error_section.innerHTML = " Impossible to proceed on!!! All fields must be filled in.";

        // this will stop the form from submitting
        return false;

    }

    </script>
</body>

</html>