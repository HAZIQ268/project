<?php

    include("connection.php");

    $Id = $_GET['id'];
    $sql = "delete from doctors where id = $Id";
    $result = mysqli_query($conn , $sql);

    echo "<script>
    
    alert('City Delete Successfully');
    window.location.href = 'doctor_show.php';
    </script>"
?>