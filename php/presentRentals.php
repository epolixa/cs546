<body>
    <h1> Rentals Page </h1>
    <div id="validated_title_error">
       <p id="error"></p>
    </div>
    <article>        
    <?php
        
        require_once 'data.php';
        $data = new reviewsFormation();                
        $airportID = 2;
        $rentals =  $data->getRentals($airportID); 
                
        echo "<p>Click <a href='../home.html'>here</a> to go to the main page.</p>";
        
        if(count($rentals)!=0){
          foreach ($rentals as $blog) { 
                
        $temp = $data->getRentalCompany ($blog["companyid"]);

        $companyName = $temp[0];
                               
        echo "Company: " . $companyName["Name"] . "<br>";
        echo "Brand: " . $blog["carbrand"] . "<br>";
        echo "Price: " . $blog["price"] . "<br>";
        echo "Quantity: " . $blog["quantity"] . "<br>";                    
        echo "Rank: " . $blog["rank"] . "<br><br>"; 
      } 

        
                   
    }
          
        
    ?>
    </article>
    
</body>

</html>