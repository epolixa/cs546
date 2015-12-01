<?php
require_once('connection.php');
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
        //THIS FUNCCTION WILL TAKE IN THE DATA PASSED THROUGH AND CREATE
        // A NEW AIRPORT LISTING IN TO THE DATABASE;

        //SANITIZE INPUT
        $flight_number = filter_var($flight_number, FILTER_SANITIZE_STRING);
        $airline_name = filter_var($airline_name, FILTER_SANITIZE_STRING);
        $destination = filter_var($destination, FILTER_SANITIZE_STRING); 
        $departure_time = filter_var($departure_time, FILTER_SANITIZE_STRING); 
        $arrival_time = filter_var($arrival_time, FILTER_SANITIZE_STRING);
        $status = filter_var($status, FILTER_SANITIZE_STRING);
        $origin = filter_var($origin, FILTER_SANITIZE_STRING);

        //PREPARE INSERT
        if(!($stmt = $this->db->prepare_statement("INSERT INTO flights(`flight_number`,`airline_name`,`destination`, `departure_time`, `arrival_time`, `status`, `origin`) VALUES(?,?,?,?,?,?,?)")))
            echo "Prepare failed: (" . $this->db->errno . ") " . $this->db->error;
        if(!($stmt->bind_param("sssss", $flight_number, $airline_name, $destination, $departure_time, $arrival_time, $status, $origin)))
            echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;

        //INSERT, POPULATE THIS OBJECT AND RETURN THE ID OF
        // THE DB ENTRY THAT WAS JUST CREATED
        if ($stmt->execute()){
            //SUCCESS
            $ret = $this->db->insertID();
            $this->id = $ret;
            $stmt->close();
            $this->getAirport($ret);
            return true;
        }else{
            //FAILURE
            return false;
        }

    }

    public function edit($name, $history, $parking, $faq, $contact){
        //CHECK TO SEE IF THIS INSTANCE EVEN EXISTS
        if($this->id<=0)
            return false;

        //SANITIZE INPUT
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $history = filter_var($history, FILTER_SANITIZE_STRING);
        $parking = filter_var($parking, FILTER_SANITIZE_STRING);
        $faq = filter_var($faq, FILTER_SANITIZE_STRING);
        $contact = filter_var($contact, FILTER_SANITIZE_STRING);
        if(!($stmt = $this->db->prepare_statement("UPDATE `airports` SET `name`=?,`history`=?,`parking`=?, `faq`=?,`contact`=? WHERE `id`=?")))
            echo "Prepare failed: (" . $this->db->e . ") " . $this->db->error;
        if(!($stmt->bind_param("sssssi", $name, $history, $parking, $faq, $contact,$this->id)))
            echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;

        //INSERT, POPULATE THIS OBJECT AND RETURN THE ID OF
        // THE DB ENTRY THAT WAS JUST CREATED
        if ($stmt->execute()){
            //SUCCESS
            $this->getAirport($this->id);
            $stmt->close();
            return true;
        }else{
            //FAILURE
            return false;
        }
    }
    public function delete(){
        if($this->id>0) {
            $stmt = $this->db->prepare_statement("DELETE FROM `airports` WHERE `id`=?");
            $stmt->bind_param("i", $this->id);
            return $stmt->execute();
        }
        return false;
    }

    private function getAirport($id){
       $id = filter_var($id,FILTER_SANITIZE_NUMBER_INT);
       $stmt = $this->db->send_sql("SELECT * FROM airports WHERE id='$id'");
       if($stmt->num_rows>0){
           //AIRPORT EXISTS
           //fetch info from the db
           $info = $stmt->fetch_array(MYSQLI_ASSOC);
           //populate class with contents
           $this->id = $info['id'];
           $this->name = $info['name'];
           $this->history = $info['history'];
           $this->parking = $info['parking'];
           $this->faq = $info['faq'];
           $this->contact = $info['contact'];

           $stmt->close();
       }else{
           //AIRPORT NOT FOUND
       }
   }

    public function id(){
        return $this->id;
    }

    public function name(){
        return $this->name;
    }

    public function history(){
        return $this->history;
    }

    public function parking(){
        return $this->parking;
    }

    public function FAQ(){
        return $this->faq;
    }

    public function contact(){
        return $this->contact;
    }

    public function __construct($id=0){
        $this->db = new DatabaseConnection();
        if(intval($id) && $id>0)
            $this->getAirport($id);
    }

}