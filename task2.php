<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Sign Up</h3>
        <form action="task2.php" method="POST"> 
            <div>  
                <input type="text" name="name" placeholder="Name" required>
            </div> 
            <br>
            <div>  
                <input type="email" name="email" placeholder="Email" value="" required>
            </div> 
            <br> 
            <div>  
                <input type="password" name="password" placeholder="Password" value="" required>  
            </div>
            <br>  
                <input type="submit" name = "submit" value="submit"></br>
                </br><p class="final">Already have an account? <a href="task2_login.php">Log In</a></p>
        </form>

    
    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if (isset ($_POST['submit'])){
                echo "<h4> Welcome '$name' </h4>";
                echo "<h4> Your registered mail is ' $email ' </h4>";
                echo "<h4> Your password is ' $password ' keep it safe.</h4>";
            }
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $_POST['password'];
        }
        
    ?>
    
</body>
</html>