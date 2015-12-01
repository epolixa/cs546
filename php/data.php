<?php

    require_once '../includes/connection.php';

    class reviewsFormation
    {
        private $dbConnection;
        private $addEntry;
        private $addUser;
        private $updateEntry;

        public function getEntry ($ID)
        {
            return $this->dbConnection->send_sql("SELECT * FROM `reviews` WHERE `ID` = {$ID} ")->fetch_all(MYSQLI_ASSOC);
        }

        public function getRentals ($ID)
        {
           return $this->dbConnection->send_sql("SELECT * FROM `rentals` WHERE `airportid` = {$ID} ")->fetch_all(MYSQLI_ASSOC);
        }
         
        public function getRentalCompany ($ID) 
        {
           return $this->dbConnection->send_sql("SELECT * FROM `carrentalcompany` WHERE `ID` = {$ID} ")->fetch_all(MYSQLI_ASSOC);
        }

        public function getUsersDetails($username)
        {
            return $this->dbConnection->send_sql("SELECT * FROM `members` WHERE `username` = '$username' ")->fetch_all(MYSQLI_ASSOC);
        }

        
        public function joinTables ()
        {
            //return $this->dbConnection->send_sql("SELECT Title,Content,FirstName,LastName FROM users, entries WHERE users.`ID` = entries.`Poster_ID` ")->fetch_all(MYSQLI_ASSOC);
            return $this->dbConnection->send_sql("SELECT Content,Title,reviews.`ID`,Rank,reviews.`Date`,AirportID,FirstName,LastName,userID FROM members INNER JOIN reviews ON members.`ID` = reviews.`UserID` ")->fetch_all(MYSQLI_ASSOC);
        }

        public function updateBlogEntry($title,$content,$rank,$airportid,$reviewid){
          
          $this->updateEntry->bind_param("ssiii",$title,$content,$rank,$airportid,$reviewid);
          $executed = $this->updateEntry->execute();

          if ($executed === true){
             echo "You successully updated your review." . "<br><br>";
             return true;            
          }

            return false;

        }

        public function addBlogEntry ($title, $content, $rank, $airportid,$userid)
        {
            
            $this->addEntry->bind_param("ssiii",$title,$content,$rank,$airportid,$userid);
            $executed = $this->addEntry->execute(); 

            if ($executed === true){
             echo "You created the review successully." . "<br><br>";
             return true;            
            }

            return false;
        }


        public function addUser ($firstname,$lastname,$username,$password)
        {
            $userEntries = $this->checkUserNameExistence($username);
            
            if(count($userEntries) == 0){
            
            $this->addUser->bind_param("ssss",$firstname,$lastname,$username,$password);
            $executed = $this->addUser->execute(); 

            if ($executed === true){
             echo "A new user was added." . "<br><br>";
             return true;            
            }

           }
            
            echo "Account wasn't created because the current username already exists." . "<br><br>";
            return false;
        }
        
        public function deleteReview($reviewid){
            
           
           return $this->dbConnection->send_sql("DELETE FROM `reviews` WHERE `ID` = {$reviewid} ");
        }

        // This is your constructor
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

            if ($this->addUser) {
                $this->addUser->close();
            }
        }
    }

?>