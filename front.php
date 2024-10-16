<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User selection</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital@1&display=swap');

        body {
            margin: 0;
            font-family: "Roboto Serif", serif;
            position: relative;
            height: 100vh;
            overflow: hidden;
            display: flex;
            flex-direction: column; 
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

        
        h1 {
    font-family: "Roboto Serif", serif;
    font-size: 150px;
    color: blue;
    text-align: center;
    margin-bottom: 50px; /* Add some space between h1 and container */
    z-index: 1; /* Ensure it's above the background */
    text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.5); 
    -webkit-text-stroke: 5px  whitesmoke; 
    
}

.container {
            text-align: center;
            padding: 20px;
            background: #7393B3;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1; 
            font-family: "Roboto Serif", serif; 
            color: black; /* Change color to make text readable against background */
        }

        input[type="button"] {
            padding: 20px 30px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 10px 20px; /* Add margin between buttons */
        }

        input[type="button"]:hover {
            background-color: #0056b3;
        }

        @media (max-width: 600px) {
            body::before {
                filter: blur(1px);
            }

            .container {
                padding: 15px;
            }

            input[type="text"], input[type="button"] {
                font-size: 14px;
            }

            h1 {
                font-size: 36px; 
            }
        }
    </style>
</head>
<body>

    
    <h1>Philippine Travel</h1>

    <div class="container">
        <h2>User selection</h2>
        <label>
          <a href="adminform.php">
              <input type="button" name="user_type" value="Admin" required> 
         </a>
        </label>
        <label>
         <a href="visiform.php">
             <input type="button" name="user_type" value="Visitor" required> 
         </a>
        </label>
    </div>

</body>
</html>
