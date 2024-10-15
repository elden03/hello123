<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    require 'includes/config.inc.php';
    $studentid=$_POST["student-id-to-remove"];
    $delete=mysqli_query($conn,"DELETE FROM fees_unpaid WHERE student_id=($studentid)");
}





?>