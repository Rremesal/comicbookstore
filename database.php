<?php 
    function connectToDB() {
        $host = "localhost";
        $user = "root";
        $password = "";
        $dbname = "";
    
        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
            echo "verbinding gemaakt";
        } catch (Exception $ex) {
            echo "verbinding mislukt";
        }
    }
    