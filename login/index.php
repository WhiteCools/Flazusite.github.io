<?php
include '../php/config.php';
session_start();
$error_message_login = ""; // Initialize error message variable for login
$error_message_register = ""; // Initialize error message variable for registration

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $verify_query = mysqli_query($con, "SELECT Username FROM users WHERE Username='$username' AND password='$password'");
    if(mysqli_num_rows($verify_query) != 0 ){
        echo "<div class='message'>
                  <p>Login successful!</p>
              </div> <br>";
              $_SESSION['username'] = $username;
              header("location: ../dashboard/");
              exit();
     }
     else{
        $error_message_login = "Invalid username or password";
     }
}

if(isset($_SESSION['username'])) {
    header("Location: ../dashboard/");
    exit; 
}

if(isset($_POST['register'])){
    $reg_username = $_POST['reg_username'];
    $email = $_POST['email'];
    $reg_password = $_POST['reg_password'];
    $verify_query = mysqli_query($con, "SELECT Username FROM users WHERE Username='$reg_username'");
    if(mysqli_num_rows($verify_query) != 0 ){
        $error_message_register = "Username already exists";
    }
    else{
       
        $insert_query = "INSERT INTO users(Username,Email,Password) VALUES('$reg_username','$email','$reg_password')";
        if(mysqli_query($con, $insert_query)){
            echo "<div class='message'>
                      <p>Registration successful!</p>
                  </div> <br>";
        } else {
            echo "Error: " . $insert_query . "<br>" . mysqli_error($con);
        }
     }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flazu Economy</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
        }
        .top h1 {
            position: relative;
            right: -10px;
            color: white;
        }
        .top {
            background-color: #091117;
            padding: 20px;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 40 40 40px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        .top h1 {
            margin: 0;
            font-size: 24px;
        }
        
        .top p {
            margin: 0;
        }
        
        .top button {
            padding: 10px 20px;
            background-color: transparent;
            border: none;
            border-radius: 50px;
            color: #fff;
            cursor: pointer;
            margin-left: 10px;
            transition: border-radius 2s ease, background-color 0.3s ease;
            font-size: 16px;
        }
        
        .top button:hover {
            color: red;
            background-color: rgba(29, 27, 27, 0.2);
            border-radius: 50%;
            box-shadow: 0 0 0 3px rgba(118, 118, 118, 0.5);
        }
        
        .container {
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            background-color: #fff;
            padding: 40px;
            border-radius: 50px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
            margin: 20px auto;
            border: 25px solid transparent;
            border-image: linear-gradient(to bottom right, black 50%, red 50%);
            border-image-slice: 1;
        }
        
        h1 {
            color: #000000;
            margin-bottom: 30px;
        }
        
        .input {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            width: 100%; 
            margin-bottom: 15px; 
            padding: 10px;
            border-radius: 20%;
            border: 2px solid #0056b3;
        }
        .input:hover {
            width: 100%; 
            margin-bottom: 15px; 
            padding: 10px;
            border-radius: 10%;
            border: 2px solid #ff0000;
        }
        .login-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        
        .login-btn:hover {
            background-color: #0056b3;
        }
        
        .login-btn:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.5);
        }
        .error-message {
            color: red;
            margin-bottom: 10px;
        }
        @media screen and (max-width: 800px) {
            .container {
                width: 50%;
            }
            .top {
                padding: 10px;
            }
            .top h1 {
                font-size: 20px; 
            }
            .top button {
                font-size: 14px; 
            }
        }
    </style>
</head>
<body>

<div class="top">
    <h1>Flazu Economy</h1>
    <p>
        <button class="home" onclick="window.location.href = '../home/';">Home</button>
        <button class="login" onclick="Login()">Login</button>
        <button class="signup" onclick="toggleSections()">Sign Up</button>
    </p>
</div>

<div class="container">
    <div id="login-section">
        <h1>Login</h1>
        <?php if (!empty($error_message_login)): ?>
        <div class="error-message">
            <?php echo $error_message_login; ?>
        </div>
        <?php endif; ?>
        <form action="" method="post">
            <input type="text" placeholder="Username" id="username" name="username" class="input">
            <input type="password" placeholder="Password" id="password" name="password" class="input">
            <button type="submit" name="login" class="login-btn">Login</button>
            <p>Register? <a href="#" onclick="toggleSections()">Click here</a> to login.</p>
        </form>
    </div>
    <div id="register-section" style="display:none;">
        <h1>Register</h1>
        
        <?php if (!empty($error_message_register)): ?>
        <div class="error-message">
            <?php echo $error_message_register; ?>
        </div>
        <?php endif; ?>
        <form action="" method="post">
        <input type="text" placeholder="Username (min 5 characters)" id="reg_username" name="reg_username" class="input" pattern=".{5,}" title="Username must be at least 5 characters long" required>
        <input type="email" placeholder="Email" id="email" name="email" class="input" required>
        <input type="password" placeholder="Password (min 8 characters, containing '@')" id="reg_password" name="reg_password" class="input" pattern="(?=.*[@])(.{8,})" title="Password must be at least 8 characters long and contain '@'" required>
            <button type="submit" name="register" class="login-btn">Register</button>
            <p>Already registered? <a href="#" onclick="toggleSections()">Click here</a> to login.</p>
        </form>
    </div>
    <script>
        function toggleSections() {
            var loginSection = document.getElementById("login-section");
            var registerSection = document.getElementById("register-section");
            if (loginSection.style.display === "none") {
                loginSection.style.display = "block";
                registerSection.style.display = "none";
            } else {
                loginSection.style.display = "none";
                registerSection.style.display = "block";
            }
        }
    </script>
</div>
<?php include '../footer.html'; ?>
</body>
</html>
