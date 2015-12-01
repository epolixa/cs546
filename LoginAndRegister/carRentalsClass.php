<?php

    require_once 'connection.php';

    class carRentals
    {
        private $dbConnection;
        private $addEntry;
        private $addUser;
        private $updateEntry;

        public function getEntry ($ID)
        {
            return $this->dbConnection->send_sql("SELECT * FROM `rentals` WHERE `airportid` = {$ID} ")->fetch_all(MYSQLI_ASSOC);
        }

        public function __construct ()
        {
            $this->dbConnection = new DatabaseConnection();             
            $this->addEntry = $this->dbConnection->prepare_statement("INSERT INTO reviews (Title,Content,Rank,AirportID,UserID,Date) VALUES (?, ?, ?, ?, ?,CURDATE())");
            $this->updateEntry = $this->dbConnection->prepare_statement("UPDATE reviews SET Title = ?, Content = ?, Rank = ?, AirportID = ?,Date = CURDATE()  WHERE `ID` = ?");
            /*if ($this->addEntry === false)
             echo "addEntry = false" ;
            else
             echo "addEntry = true" ;*/   
        }

        
        function __destruct ()
        {
            if ($this->addEntry) {
                $this->addEntry->close();
            }


        }
    }

?>