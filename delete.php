<?php
 
include 'connect.php';
 
if(isset($_GET['deleteid'])) {
     
    $delete_id = $_GET['deleteid'];

    
    $sql = "DELETE FROM trip WHERE `S.no` = ?";

     
    $statement = $connection->prepare($sql);
    $statement->bind_param("i", $delete_id);

     
    $execute = $statement->execute();
 
    $statement->close();

    if ($execute) {
         
        header('location: display.php');
     
    } 
} else {
    
    header('location: display.php');
    
}
?>
