<?php
  include "header.php"
?>

          <div class="content-right">
            <section class="airport-home">
              <h2>Shops of <?php echo $airport ?> International Airport</h2>
                <table>
                <tr>
                  <th>id</th>
                  <th>name</th>
                  <th>security_type</th>
                  <th>location</th>
                  <th>terminal_id</th>
                  <th>airport</th>
                </tr>
                <?php
                    include_once "Database_Connection.php";
                    $sql = "select * from shopping where airport = '$airport'";
                    $result = mysql_query($sql);
                    while($row = mysql_fetch_array($result))
                    {
                      echo "<tr>";
                      echo "<td>".$row['id']."</td>";
                      echo "<td>".$row['name']."</td>";
                      echo "<td>".$row['security_type']."</td>";
                      echo "<td>".$row['location']."</td>";
                      echo "<td>".$row['terminal_id']."</td>";
                      echo "<td>".$row['airport']."</td>";
                      echo "</tr>";
                    }
                    $history = mysql_fetch_row($result);
                    echo $history[0];
                ?>
              </table>          
            </section>

            
<?php
  include "footer.php"
?>
