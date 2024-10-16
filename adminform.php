<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Form</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital@1&display=swap');

        body {
            margin: 0;
            font-family: 'Bodoni Moda', serif;
            position: relative;
            height: 100vh;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('img/front.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            filter: blur(4px);
            z-index: -1;
        }

        .container {
            text-align: center;
            padding: 40px;
            background: #7393B3;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            max-width: 400px;
            width: 100%;
            z-index: 1;
        }

        input[type="text"], input[type="password"] {
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 20px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 12px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        h2 {
            margin-bottom: 30px;
            color: white;
        }

        @media (max-width: 600px) {
            body::before {
                filter: blur(2px);
            }

            .container {
                padding: 20px;
            }

            input[type="text"], input[type="password"], input[type="submit"] {
                font-size: 14px;
                padding: 10px;
            }

            h2 {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Enter Admin Details</h2>
        <form action="processform.php" method="POST">
            <input type="text" id="adminName" placeholder="Enter admin name" name="adminName" required>
            <input type="password" id="passkey" placeholder="Enter passkey" name="passkey" required>
            <div>
                <input type="checkbox" name="remember" value="1"> Remember Me
            </div>
            <input type="submit" name="login" value="Submit">
            <input type="submit" name="back" value="Go back" onclick="window.location.href='front.php'"> 
        </form>
    </div>
</body>
</html>
