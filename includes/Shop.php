<?php
require_once('../includes/connection.php');

class Shop
{
    private $db, $id=0, $name="", $security_type="", $location="", $terminal_id=0, $airport=0;

    public function create($name, $security_type, $location, $terminal_id, $airport)
    {
        //THIS FUNCCTION WILL TAKE IN THE DATA PASSED THROUGH AND CREATE
        // A NEW AIRPORT LISTING IN TO THE DATABASE;

        //SANITIZE INPUT
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $security_type = filter_var($security_type, FILTER_SANITIZE_STRING);
        $location = filter_var($location, FILTER_SANITIZE_STRING);
        $terminal_id = filter_var($terminal_id, FILTER_SANITIZE_NUMBER_INT);
        $airport = filter_var($airport, FILTER_SANITIZE_NUMBER_INT);

        //PREPARE INSERT
        if(!($stmt = $this->db->prepare_statement("INSERT INTO `shopping`(`name`,`security_type`,`location`, `terminal_id`,`airport`) VALUES(?,?,?,?,?)")))
            echo "Prepare failed: (" . $this->db->errno . ") " . $this->db->error;
        if(!($stmt->bind_param("sssss", $name, $security_type, $location, $terminal_id, $airport)))
            echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;

        //INSERT, POPULATE THIS OBJECT AND RETURN THE ID OF
        // THE DB ENTRY THAT WAS JUST CREATED
        if ($stmt->execute()){
            //SUCCESS
            $ret = $this->db->insertID();
            $this->id = $ret;
            $stmt->close();
            $this->getShop($ret);
            return true;
        }else{
            //FAILURE
            return false;
        }

    }

    public function edit($name, $security_type, $location, $terminal_id, $airport){
        //CHECK TO SEE IF THIS INSTANCE EVEN EXISTS
        if($this->id<=0)
            return false;

        //SANITIZE INPUT
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $security_type = filter_var($security_type, FILTER_SANITIZE_STRING);
        $location = filter_var($location, FILTER_SANITIZE_STRING);
        $terminal_id = filter_var($terminal_id, FILTER_SANITIZE_NUMBER_INT);
        $airport = filter_var($airport, FILTER_SANITIZE_NUMBER_INT);
        if(!($stmt = $this->db->prepare_statement("UPDATE `shopping` SET `name`=?,`security_type`=?,`location`=?, `terminal_id`=?,`airport`=? WHERE `id`=?")))
            echo "Prepare failed: (" . $this->db->e . ") " . $this->db->error;
        if(!($stmt->bind_param("sssssi", $name, $security_type, $location, $terminal_id, $airport,$this->id)))
            echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;

        //INSERT, POPULATE THIS OBJECT AND RETURN THE ID OF
        // THE DB ENTRY THAT WAS JUST CREATED
        if ($stmt->execute()){
            //SUCCESS
            $this->getShop($this->id);
            $stmt->close();
            return true;
        }else{
            //FAILURE
            return false;
        }
    }
    public function delete(){
        if($this->id>0) {
            $stmt = $this->db->prepare_statement("DELETE FROM `shopping` WHERE `id`=?");
            $stmt->bind_param("i", $this->id);
            return $stmt->execute();
        }
        return false;
    }

    private function getShop($id){
        $id = filter_var($id,FILTER_SANITIZE_NUMBER_INT);
        $stmt = $this->db->send_sql("SELECT * FROM `shopping` WHERE `id`='$id'");
        if($stmt->num_rows>0){
            //AIRPORT EXISTS
            //fetch info from the db
            $info = $stmt->fetch_array(MYSQLI_ASSOC);
            //populate class with contents
            $this->id = $info['id'];
            $this->name = $info['name'];
            $this->security_type = $info['security_type'];
            $this->location = $info['location'];
            $this->terminal_id = $info['terminal_id'];
            $this->airport = $info['airport'];

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

    public function security_type(){
        return $this->security_type;
    }

    public function location(){
        return $this->location;
    }

    public function terminal(){
        return $this->terminal_id;
    }

    public function airport(){
        return $this->airport;
    }

    public function __construct($id=0){
        $this->db = new DatabaseConnection();
        if(intval($id) && $id>0)
            $this->getShop($id);
    }

}