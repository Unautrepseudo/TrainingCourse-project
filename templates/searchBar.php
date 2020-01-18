 <!--Search Bar-->
 <?php
 mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
 mysql_select_db("ecommerce") or die(mysql_error());

    
$query = $_POST['query']; 
  //proctection failles XSS
  foreach($_POST as $key => $value)
  {
      $_POST[$key] = strip_tags($value);
  }
     
    $min_length = 3;
     
    if((strlen($query) >= $min_length) && ($_POST)){{
         
        $query = htmlspecialchars($query); 
        // changes characters
         
         
        $raw_results = mysql_query("SELECT * FROM fos_user
            WHERE (`username` LIKE '%".$query."%')") or die(mysql_error());
         
    

                if(mysql_num_rows($raw_results) > 0){
                    
                    while($results = mysql_fetch_array($raw_results)){
                    
                        echo "<p><h3>".test['username']."</h3></p>";
                    }
                    
                }
                else{
                    echo "No results";
                }
                
            
            else{
                echo "Minimum length is ".$min_length;
            }
        }
    }
?>