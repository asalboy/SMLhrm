<?php
    include 'database/connection.php';

    
//sql insert statement
$query=mysqli_query($conn,"insert into  hs_hr_employee() values()") or die(mysqli_error($conn));
//insert query to the database
if($query){
//if successful query
header('Location : index.php');

}
    
?>