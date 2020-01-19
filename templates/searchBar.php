 <!--Search Bar
 
 mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
 mysql_select_db("ecommerce") or die(mysql_error());

    
$query = $_GET['query']; 
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
?>-->


<?php
$bdd = new PDO('mysql:host=localhost;dbname=ecommerce', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    if(isset($_GET['motclef'])){
        $motclef = $_GET['motclef'];
        $q = array('motclef'=>$motclef. '%');
        $sql = 'SELECT name FROM product WHERE name like :motclef';
        $req = $bdd->prepare($sql);
        $req->execute($q);
        $count = $req->rowCount($sql);

        if($count == 1){
            while($result = $req->fetch(PDO::FETCH_OBJ)){
                echo $result;
            }
        }else{
            echo $motclef . " non trouvé";
        }
    }


?>


{% block javascripts %}
<script>
    $(document).ready(function(){
        $('#search').keyup(function(){
            var search = $(this).val();
            var data = 'motclef=' + search;
            if (search.length > 3){
                $.ajax({
                    type: "GET",
                    url : "searchBar.php",
                    data : data,
                    success: function(server_response){
                        $("#result").html(server_response).show();
                    }
                });
            }
        });
    });

</script>
{% endblock %}