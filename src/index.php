<?php
session_start();

require_once "books.php";
?>

<html>
    <?php
    if (isset)($_SESSION['user'])) {
        echo "<h1>Welcome back{$_SESSION['user']['name']}</h1>";
    ?>

    <form action="index.php" method="get">
        <button type="submit" name="login" value="true">Login</button>
        <button type="submit" name="register" value="true">Register</button>
    </form>
    <br>

    <?php
    if (isset($_GET['login'])) {
        if ($_GET['crud' == "add"])
    ?>
            <h2>Add book:</h2>

        <form action="books.php" method="post">
            <label>Title:</label>
            <input type="text" name="title">
            <br>

            <label>Author:</label>
            <input type="text" name="author">
            <br>

            <button type="submit" name="auth" value="login">Submit</button>
        </form>
    <?php
    } else if (isset($_GET['register'])) {
    ?>
    <h1>Register form:</h1>
    <br>
    <form action="auth.php" method="post">
        <label>Name:</label>
        <input type="text" name="name">
        <br>

        <label>Email:</label>
        <input type="email" name="email">
        <br>

        <label>Password:</label>
        <input type="password" name="password">
        <br>

        <button type="submit" name="auth" value="register">Submit</button>

    </form>
    <?php

</html>

