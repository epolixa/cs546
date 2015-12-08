<?php
require_once('../includes/connection.php');
/**
 * Created by Jianhong Mou.
 * Date: 12/1/2015
 * Time: 12:24 AM
 */
class Flight
{
    private $db, $flight_number="", $airline_name="", $destination="", $departure_time="", $arrival_time="", $status="", $origin="";

    public function create($flight_number, $airline_name, $destination, $departure_time, $arrival_time, $status, $origin)
    {
        //THIS FUNCTION WILL TAKE IN THE DATA PASSED THROUGH AND CREATE
        // A NEW FLIGHT LISTING IN TO THE DATABASE;

        //SANITIZE INPUT
        $flight_number = filter_var($flight_number, FILTER_SANITIZE_STRING);
        $airline_name = filter_var($airline_name, FILTER_SANITIZE_STRING);
        $destination = filter_var($destination, FILTER_SANITIZE_STRING); 
        $departure_time = filter_var($departure_time, FILTER_SANITIZE_STRING); 
        $arrival_time = filter_var($arrival_time, FILTER_SANITIZE_STRING);
        $status = filter_var($status, FILTER_SANITIZE_STRING);
        $origin = filter_var($origin, FILTER_SANITIZE_STRING);

        if($flight_number=="" || $airline_name=="" || $destination=="" || $departure_time=="" || $arrival_time=="" || $status=="" || $origin=="" || $origin==$destination)
            return false;

        //PREPARE INSERT
        if(!($stmt = $this->db->prepare_statement("INSERT INTO `flights`(`flight_number`,`airline_name`,`destination`, `departure_time`, `arrival_time`, `status`, `origin`) VALUES(?,?,?,?,?,?,?)")))
            echo "Prepare failed: (" . $this->db->errno . ") " . $this->db->error;
        if(!($stmt->bind_param("sssssss", $flight_number, $airline_name, $destination, $departure_time, $arrival_time, $status, $origin)))
            echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;

        //INSERT, POPULATE THIS OBJECT AND RETURN THE ID OF
        // THE DB ENTRY THAT WAS JUST CREATED
        if ($stmt->execute()){
            //SUCCESS
            $stmt->close();
            $this->getFlight($flight_number);
            return true;
        }else{
            //FAILURE
            return false;
        }

    }

    public function edit($flight_number, $airline_name, $destination, $departure_time, $arrival_time, $status, $origin){
        //CHECK TO SEE IF THIS INSTANCE EVEN EXISTS
        if($this->flight_number == "")
            return false;

        //SANITIZE INPUT
        $flight_number = filter_var($flight_number, FILTER_SANITIZE_STRING);
        $airline_name = filter_var($airline_name, FILTER_SANITIZE_STRING);
        $destination = filter_var($destination, FILTER_SANITIZE_STRING); 
        $departure_time = filter_var($departure_time, FILTER_SANITIZE_STRING); 
        $arrival_time = filter_var($arrival_time, FILTER_SANITIZE_STRING);
        $status = filter_var($status, FILTER_SANITIZE_STRING);
        $origin = filter_var($origin, FILTER_SANITIZE_STRING);
        if($flight_number=="" || $airline_name=="" || $destination=="" || $departure_time=="" || $arrival_time=="" || $status=="" || $origin=="" || $origin==$destination)
            return false;
        
        if(!($stmt = $this->db->prepare_statement("UPDATE `flights` SET `flight_number`=?,`airline_name`=?,`destination`=?, `departure_time`=?,`arrival_time`=?, `status`=?, `origin`=? WHERE `flight_number`=?")))
            echo "Prepare failed: (" . $this->db->e . ") " . $this->db->error;
        if(!($stmt->bind_param("ssssssss", $flight_number, $airline_name, $destination, $departure_time, $arrival_time,$status,$origin,$this->flight_number)))
            echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;

        //INSERT, POPULATE THIS OBJECT AND RETURN THE ID OF
        // THE DB ENTRY THAT WAS JUST CREATED
        if ($stmt->execute()){
            //SUCCESS
            $this->getFlight($flight_number);
            $stmt->close();
            return true;
        }else{
            //FAILURE
            return false;
        }
    }
    public function delete(){
        if($this->flight_number!="") {
            $stmt = $this->db->prepare_statement("DELETE FROM `flights` WHERE `flight_number`=?");
            $stmt->bind_param("s", $this->flight_number);
            return $stmt->execute();
        }
        return false;
    }

    private function getFlight($flight_number){
       $flight_number = filter_var($flight_number,FILTER_SANITIZE_STRING);
       $stmt = $this->db->send_sql("SELECT * FROM `flights` WHERE `flight_number`='$flight_number'");
       if($stmt->num_rows>0){
           //AIRPORT EXISTS
           //fetch info from the db
           $info = $stmt->fetch_array(MYSQLI_ASSOC);
           //populate class with contents
            $this->flight_number = $info['flight_number'];
            $this->airline_name = $info['airline_name'];
            $this->destination = $info['destination'];
            $this->departure_time = $info['departure_time'];
            $this->arrival_time = $info['arrival_time'];
            $this->status = $info['status'];
            $this->origin = $info['origin'];
           $stmt->close();
       }else{
           //AIRPORT NOT
           echo"Flight not found!";
           die();
       }
   }

    public function flight_number(){
        return $this->flight_number;
    }

    public function airline_name(){
        return $this->airline_name;
    }

    public function destination(){
        return $this->destination;
    }

    public function departure_time(){
        return $this->departure_time;
    }

    public function arrival_time(){
        return $this->arrival_time;
    }

    public function status(){
        return $this->status;
    }

    public function origin(){
        return $this->origin;
    }

    public function __construct($flight_number=""){
        $this->db = new DatabaseConnection();
        if($flight_number != "")
            $this->getFlight($flight_number);
    }

}