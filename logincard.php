<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elderly Care and Support System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background-color: #f8f9fa;
        }
        .header {
            text-align: center;
            padding: 20px;
            background-color: #32be8f;
            color: white;
        }
        .logo {
            width: 150px;
        }
        .login-section {
            display: flex;
            justify-content: space-around;
            margin: 20px;
        }
        .login-card {
            text-align: center;
            width: 200px;
            padding: 20px;
        }
        .login-card h2 {
            margin-top: 20px;
            font-size: 18px;
        }
        .login-card h2:hover {
            color: #32be8f;
            font-weight: bold;
        }
        .login-button {
            font-size: 18px;
            padding: 10px;
            border: none;
            background-color: #32be8f;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }
        .login-button i {
            margin-right: 0px;
        }
        .news-section, .spotlight-section {
            margin: 20px;
            color: #32be8f;
            margin-bottom: 40px;
        }
        .news-section ul, .spotlight-section ul {
            list-style-type: none;
            color: black;
            margin-bottom: 40px;
        }
        .news-section ul li, .spotlight-section ul li {
            padding: 10px;
            color: black;
        }
        .news-section ul li a, .spotlight-section ul li a {
            color: black;
            text-decoration: none;
        }
        .news-section ul li a:hover, .spotlight-section ul li a:hover {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header class="header">
        <h1>Welcome to AgeWell</h1>
        <p>Connecting elderly users, caregivers, family members, and mentors to resources and support services.</p>
    </header>
    <section class="login-section">
        <div class="login-card elderly-user">
            <a href="login.php"><button class="login-button"><i class="fa fa-user"></i></button></a>
            <h2>Elderly User</h2>
        </div>

        <div class="login-card caregiver">
            <a href="login.php"><button class="login-button"><i class="fa fa-user"></i></button></a>
            <h2>Caregiver</h2>
        </div>

        <div class="login-card family-member">
            <a href="login.php"><button class="login-button"><i class="fa fa-user"></i></button></a>
            <h2>Family Member</h2>
        </div>

        <div class="login-card mentor">
            <a href="login.php"><button class="login-button"><i class="fa fa-user"></i></button></a>
            <h2>Mentor</h2>
        </div>
    </section>
    <section class="news-section"></section>
    <section class="spotlight-section">
        <h3>Quick Links</h3> <br>
        <ul>
            <li><a href="relart.html">Read the latest articles on elderly care</a></li>
            <li><a href="relart.html#webinar">Webinars for caregivers and mentors</a></li>
            <li><a href="menheaquiz.html">Take a mental health quiz</a></li>
        </ul>
    </section>
</body>
</html>
