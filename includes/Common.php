<?php
require_once'../includes/connection.php';
require_once'../includes/Airport.php';
require_once'../includes/Flight.php';
require_once'../includes/Shop.php';

class Common{
    public static function flightsAdminForm($step,$name,$num,$origin,$dest,$arr,$dep,$status){
        echo '<form id = "flights_id" action = "flightsAdmin.php?step='.$step.'Flight" method = "POST">';
        echo 'Airline:<select name="airline_name" required>';
            $airlines = Common::selectAirlinesForForm();
              if($airlines && count($airlines)>0) {
                  foreach ($airlines as $airline) {
                      echo '<option value="'.$airline['name'].'"';
                      if($airline['name']==$name)
                        echo" selected=\"selected\"";
                      echo'>'.$airline['name'].'</option>';
                  }
              }
        echo"</select><br>";
        echo 'Flight Number:<input type = "text" name = "flight_number"  id = "flight_id" value = "' . $num . '"  style = "width: 350px" required /> <br>';
        echo 'Origin:<select name="origin" required>';
        $airports = Common::selectAirports();
        if($airports){
            foreach($airports as $airport){
                echo'<option value="'.$airport->name().'"';
                if($airport->name()==$origin)
                    echo" selected=\"selected\"";
                echo'>'.$airport->name().'</option>';
            }
        }
        echo"</select><br>";
        echo 'Destination: <select name="destination" required>';
        if($airports){
            foreach($airports as $airport){
                echo'<option value="'.$airport->name().'"';
                if($airport->name()==$dest)
                    echo" selected=\"selected\"";
                echo'>'.$airport->name().'</option>';
            }
        }
        echo"</select><br>";
        echo 'Arrival Time:<input type = "text" name = "arrival_time"  id = "arrival_time_id" value = "' . $arr . '"  style = "width: 350px"  required/> <br>';
        echo 'Departure Time:<input type = "text" name = "departure_time"  id = "departure_time_id" value = "' . $dep . '"  style = "width: 350px"  required /> <br>';
        echo 'Status:<input type = "text" name = "status"  id = "status_id" value = "' . $status . '"  style = "width: 350px"  required/> <br>';
        echo '<input type="submit" value="'.ucfirst($step).'">';
        echo '</form><br><br>';
    }
    public static function selectAirports(){
        $db =  new DatabaseConnection();
        $stmt = $db->send_sql("SELECT id FROM `airports`");
        if($stmt->num_rows>0){
            $count = 0;
            while($row = $stmt->fetch_array(MYSQLI_ASSOC)){
                $ret[$count] = new Airport($row['id']);
                $count++;
            }
            $stmt->close();
            return $ret;
        }
        return false;
    }

    public static function selectFlights($whereField="",$whereOperator="",$whereValue=""){
        $db =  new DatabaseConnection();
        $sql = "SELECT `flight_number` FROM `flights`";
        if($whereField!="" && in_array($whereOperator,array(">","<","<=",">=","=","<>")) && $whereValue!="")
            $sql .=" WHERE ".$whereField."". $whereOperator."'".$whereValue."'";
        $stmt = $db->send_sql($sql);
        if($stmt->num_rows>0){
            $count = 0;
            while($row = $stmt->fetch_array(MYSQLI_ASSOC)){
                $ret[$count] = new Flight($row['flight_number']);
                $count++;
            }
            $stmt->close();
            return $ret;
        }
        return false;
    }

    public static function selectAirlines($whereField="",$whereOperator="",$whereValue="", $orderBy=""){
        $db =  new DatabaseConnection();
        $sql = "SELECT `id`,`name`,`contact`, ata.`terminalid` AS terminal FROM `airlines`, `ata` WHERE ata.`airlineid` = airlines.`id`";
        if($whereField!="" && in_array($whereOperator,array(">","<","<=",">=","=","<>")) && $whereValue!="")
            $sql .=" AND ".$whereField."". $whereOperator."'".$whereValue."'";
        if($orderBy!="")
            $sql .= " ORDER BY ".$orderBy;
        $stmt = $db->send_sql($sql);
        // die($sql);
        if($stmt->num_rows>0){
            $count = 0;
            while($row = $stmt->fetch_array(MYSQLI_ASSOC)){
                $ret[$count] = $row;
                $count++;
            }
            $stmt->close();
            return $ret;
        }
        return false;
    }

    public static function selectAirlinesForForm(){
        $db =  new DatabaseConnection();
        $sql = "SELECT DISTINCT(`name`) FROM `airlines` ORDER BY `name`";
        $stmt = $db->send_sql($sql);
        // die($sql);
        if($stmt->num_rows>0){
            $count = 0;
            while($row = $stmt->fetch_array(MYSQLI_ASSOC)){
                $ret[$count] = $row;
                $count++;
            }
            $stmt->close();
            return $ret;
        }
        return false;
    }

    public static function selectShops($whereField="",$whereOperator="",$whereValue=""){
        $db =  new DatabaseConnection();
        $sql = "SELECT `id` FROM `shopping`";
        if($whereField!="" && in_array($whereOperator,array(">","<","<=",">=","=","<>")) && $whereValue!="")
            $sql .=" WHERE ".$whereField."". $whereOperator."'".$whereValue."'";
        $stmt = $db->send_sql($sql);
        if($stmt->num_rows>0){
            $count = 0;
            while($row = $stmt->fetch_array(MYSQLI_ASSOC)){
                $ret[$count] = new Shop($row['id']);
                $count++;
            }
            $stmt->close();
            return $ret;
        }
        return false;
    }

    public static function airport_nav_dropdown(){
        $airports = Common::selectAirports();
        echo'<span>Airports</span>
                <ul>';
        if($airports){
            foreach($airports as $airport){
                echo'<li><a href="airport.php?airport='.$airport->id().'">'.$airport->name().'</a></li>';
            }
        }
        echo'</ul>';
    }

    public static function error($msg, $type="warning"){
        //possible types are error, info, warning, success
        echo"<div class=".$type.">".$msg."</div>";
        echo" </div>
                  </div>";
        include_once 'footer.php';
        echo"            </div>
            </body>
            </html>";
        die();
    }
}