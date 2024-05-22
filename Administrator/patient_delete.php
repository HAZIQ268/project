<?php

    include("connection.php");

    $Id = $_GET['id'];
    $sql = "delete from patients where id = $Id";
    $result = mysqli_query($conn , $sql);

    echo "<script>
    
    alert('Patient Delete Successfully');
    window.location.href = 'patient_show.php';
    </script>"
?>