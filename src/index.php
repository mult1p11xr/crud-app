<html>
<form action="index.php" method="get">
    <button type="submit" name="login" value="true">Login</button>
        <button type="submit" name="register" value="true">Register</button>

</form>
<br>

<?php
if (isset($_GET['login'])) {
?>
<h1>Login form</h1>
<br>

    <form action="auth.php" method="POST">
    <label>Email:</label>
    <input type="email" name="email">
    <br>

    <label>Password:</label>
    <input type="password" name="password">
    <br>

    <button type="submit" name="auth" value="login">Submit</button>
    </form>
    <?php
} else if (isset($_GET['register'])) 
?>
<h1>Register form:</h1>
<br>
        <form action="auth.php method="post">
        <label>Name:</label>
        <input type="text" name="name">
        <br>

        <label>Email:</label>
        <input type="email" name="email">
        <br>

        <label>Email:</label>
        <input type="password" name="password">
        <br>

        <button type="submit" name="auth" value="register">Submit</button>

    </form>
    <?php

</html>

