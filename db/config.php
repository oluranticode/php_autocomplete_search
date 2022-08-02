<?php
    $conn = mysqli_connect("localhost", "root", "", "autocomplete_db");
    if(!$conn){
        die("connection error :" . mysqli_connect_error());
    }
?>