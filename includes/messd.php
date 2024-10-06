<?php

  
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require 'config.inc.php';
    session_start();
    
    
    // Access the selected options from the POST data
    
    $lunchOption1 = $_POST['lunchOption1'];
    $lunchOption2 = $_POST['lunchOption2'];
    $id=$_SESSION['roll'] ;
    global $conn;

    // Process the selected options (e.g., store in a database, perform calculations)
    
    echo "Lunch Option 1: " . $lunchOption1;
    echo "<br>";
    echo "Lunch Option 2: " . $lunchOption2;
    if (isset($lunchOption1)&&isset($lunchOption2)) {
    $sql="INSERT INTO mess(orders,time_of_day,Student_id)
    VALUES ('$lunchOption1,$lunchOption2','breakfast,lunch','$id' )";
    }
    
    $Execute=mysqli_query($conn, $sql);
    if($Execute){
        echo 'Successfully completed';
    }
    else{
        echo 'failed';
    }

}
?>