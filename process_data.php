<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require 'includes/config.inc.php';
    $studentname=$_POST["student-name"];
    $studentid=$_POST["student-id"];
    $fees=$_POST["fees"];
   
    if (isset($studentid)&&isset($fees)) {
        $delete=mysqli_query($conn,"DELETE FROM `fees_unpaid` WHERE `fees_unpaid`.`student_id`=($studentid)");
        
        $sql="INSERT INTO fees_unpaid(student_id,fee_amount)
        VALUES ('$studentid','$fees')";
        }
        
        $Execute=mysqli_query($conn, $sql);
        if($Execute){
            header('Location: home_manager.php');
        }
        else{
            echo 'failed';
        }


}

// $amount=1000;
// if ($amount > 0) {
    
//     echo "<p id='due-amount'>Amount Due: " . $amount . "</p>";
// } else {
//     // Display "No Due" if no data is found
//     echo "<p id='due-amount no-due'>No Due</p>";
// }



?>
