<?php
require_once'connection.php';
require_once'../includes/Airport.php';

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