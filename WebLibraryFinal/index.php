<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookWormer Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .navbar {
            background-color: #d2a478;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar img {
            height: 50px;
            margin-right: 10px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        .navbar a:hover {
            text-decoration: underline;
        }
        .navbar h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .content h2 {
            font-size: 32px;
            color: #333;
        }
        .footer {
            background-color: #1a3c40;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .footer a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="navbar-left">
            <img src="images/logo.svg" alt="BookWormer Logo">
        </div>
        <div class="navbar-right">
            <a href="index.php">Home</a>
            <a href="books.php">Books</a>
            <a href="profile.php">Profile</a>
            <a href="memberdasboard.html">Books</a>
        </div>
    </div>
    <div class="content">
        <h2>Welcome to BookWormer!</h2>
    </div>
    <div class="footer">
        <div>BookWormer</div>
        <div>
            <a href="#">Facebook</a> | <a href="#">Instagram</a>
        </div>
        <div>Contact Us: bcnp.admin@gmail.com</div>
    </div>
</body>
</html>
