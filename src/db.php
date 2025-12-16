<?php
$conn;

function dbConnect()
{
    $servername = "mariadb";
    $username = "mariadb";
    $password = "mariadb";
    $dbname = "mariadb";
    global $conn;

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOexception $e) {
        echo "Database connection failed " . $e->getMessage();
    }
}
