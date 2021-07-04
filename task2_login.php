<?php
    session_start();
    echo ( $_SESSION['name']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Log In</h3>
        <form method="POST"> 
            <div>  
                <input type="email" name="email" placeholder="Email" value="" required>
            </div> 
            <br>
            <div>  
                <input type="password" name="password" placeholder="Password" required id="password-label">  
            </div> 
            <br>
                <input type="submit" name = "submit" type = "submit">
            </br>
                </br><p class="final">Don't have an account? <a href="task2.php">Sign Up</a></p>
        </form>  

    <?php 
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $email = $_POST['email'];
                $password = $_POST['password'];
                if (($_POST['email'] !== $_SESSION['email']) || ($_POST['password'] !== $_SESSION['password'])){
                    echo ("Error Log in details");
                } else {
                    echo ("login succesful");
                }
            }
               
        





    ?> 
</body>
</html>