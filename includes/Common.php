<?php
require_once'../includes/connection.php';
require_once'../includes/Airport.php';
require_once'../includes/Flight.php';

class Common{
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

    public static function selectAirlines($whereField="",$whereOperator="",$whereValue=""){
        $db =  new DatabaseConnection();
        $sql = "SELECT * FROM `airlines`";
        if($whereField!="" && in_array($whereOperator,array(">","<","<=",">=","=","<>")) && $whereValue!="")
            $sql .=" WHERE ".$whereField."". $whereOperator."'".$whereValue."'";
        $stmt = $db->send_sql($sql);
        if($stmt->num_rows>0){
            $count = 0;
            while($row = $stmt->fetch_array(MYSQLI_ASSOC)){
                $ret[$count] = new Flight($row['id']);
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
                $ret[$count] = new Flight($row['id']);
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
}