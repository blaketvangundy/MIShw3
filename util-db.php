<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('129.15.65.247', 'blakevangundy4013', 'R@chel1Bl@ke2', 'mis-4013-blakevangundy-db.mysql.database.azure.com');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
