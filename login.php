<?php
$servername = "localhost";
$db_username = "root"; 
$db_password = "";
$dbname = "login"; 

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$errors = [];
$username = $password = '';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve the form input
    $username = htmlspecialchars(trim($_POST['username']));
    $password = htmlspecialchars(trim($_POST['password']));

    // Check if both fields are filled
    if (empty($username) || empty($password)) {
        $errors['empty'] = "Username and password are required.";
    }

    // Proceed only if there are no errors
    if (empty($errors)) {
        // Search by username only
        $stmt = $conn->prepare("SELECT password FROM logininfo WHERE username = ?");

        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }

        // Bind parameters for username
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Verify password
            if (password_verify($password, $row['password'])) {
                header("Location: home1.php");
                exit();
            } else {
                $errors['login'] = "Invalid username or password.";
            }
        } else {
            $errors['login'] = "Invalid username or password.";
        }
        $stmt->close();
    }
}
$conn->close();
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
}
?>
<html>
<head>
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>    
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
        }
        .wave {
            position: fixed;
            bottom: 0;
            left: 0;
            height: 100%;
            z-index: -1;
        }
        .container {
            width: 100vw;
            height: 100vh;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 7rem;
            padding: 0 2rem;
        }
        .img {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }
        .login-content {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            text-align: center;
        }
        .img img {
            width: 500px;
        }
        form {
            width: 360px;
        }
        .login-content img {
            height: 100px;
        }
        .login-content h2 {
            margin: 15px 0;
            color: #333;
            text-transform: uppercase;
            font-size: 2.9rem;
        }
        .input-div {
            position: relative;
            display: grid;
            grid-template-columns: 7% 93%;
            margin: 25px 0;
            padding: 5px 0;
            border-bottom: 2px solid #d9d9d9;
        }
        .input-div.one {
            margin-top: 0;
        }
        .i {
            color: #d9d9d9;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .i i {
            transition: .3s;
        }
        .input-div > div {
            position: relative;
            height: 45px;
        }
        .input-div > div > h5 {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-size: 18px;
            transition: .3s;
        }
        .input-div:before, .input-div:after {
            content: '';
            position: absolute;
            bottom: -2px;
            width: 0%;
            height: 2px;
            background-color: #38d39f;
            transition: .4s;
        }
        .input-div:before {
            right: 50%;
        }
        .input-div:after {
            left: 50%;
        }
        .input-div.focus:before, .input-div.focus:after {
            width: 50%;
        }
        .input-div.focus > div > h5 {
            top: -5px;
            font-size: 15px;
        }
        .input-div.focus > .i > i {
            color: #38d39f;
        }
        .input-div > div > input {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            border: none;
            outline: none;
            background: none;
            padding: 0.5rem 0.7rem;
            font-size: 1.2rem;
            color: #555;
            font-family: 'poppins', sans-serif;
        }
        .input-div.pass {
            margin-bottom: 4px;
        }
        a {
            display: block;
            text-align: right;
            text-decoration: none;
            color: #999;
            font-size: 0.9rem;
            transition: .3s;
        }
        a:hover {
            color: #38d39f;
        }
        .btn {
            display: block;
            width: 100%;
            height: 50px;
            border-radius: 25px;
            outline: none;
            border: none;
            background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
            background-size: 200%;
            font-size: 1.2rem;
            color: #fff;
            font-family: 'Poppins', sans-serif;
            text-transform: uppercase;
            margin: 1rem 0;
            cursor: pointer;
            transition: .5s;
        }
        .btn:hover {
            background-position: right;
        }
        .error-message {
            display: flex;
            align-items: center;
            background-color: #fff3cd;
            border: 1px solid #ffeeba;
            color: #856404;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
			margin-left:110px;
			width:auto;
        }
        .error-message i {
            margin-right: 10px;
        }
        @media screen and (max-width: 1050px) {
            .container {
                grid-gap: 5rem;
            }
        }
        @media screen and (max-width: 1000px) {
            form {
                width: 290px;
            }
            .login-content h2 {
                font-size: 2.4rem;
                margin: 8px 0;
            }
            .img img {
                width: 400px;
            }
        }
        @media screen and (max-width: 900px) {
            .container {
                grid-template-columns: 1fr;
            }
            .img {
                display: none;
            }
            .wave {
                display: none;
            }
            .login-content {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <h2>AGEWELL</h2>
    <img class="wave" src="img/wave.png">
    <div class="container">
        <div class="img">
            <img src="img/bg.png">
        </div>
        <div class="login-content">
            <form action="" method="POST">
                <img src="img/avatar.svg">
                <h2 class="title">Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username/E-mail</h5>
                        <input type="text" name="username" class="input" onfocus="clearError('empty')" required="True">
                        <?php if(isset($errors['empty'])): ?>
                            <div class="error-message" id="error-empty">
                                <i class="fas fa-exclamation-triangle"></i>
                                <span><?php echo $errors['empty']; ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i"> 
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" name="password" class="input" onfocus="clearError('password')"required="True">
                        <?php if(isset($errors['password'])): ?>
                            <div class="error-message" id="error-password">
                                <i class="fas fa-exclamation-triangle"></i>
                                <span><?php echo $errors['password']; ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <a href="forgpass.html">Forgot Password?</a>
                <input type="submit" class="btn" value="Login">
                <div class="div">
                    <h5>Don't have an account? <a href="signup.php">Sign-up</a></h5>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="main.js"></script>
    <script>
        function clearError(errorType) {
            var errorElement = document.getElementById('error-' + errorType);
            if (errorElement) {
                errorElement.style.display = 'none'; 
            }
        }
    </script>
</body>
</html>