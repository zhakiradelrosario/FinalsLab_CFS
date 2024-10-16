<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <title>Visitors Form</title>

   <!-- Bootstrap CSS for styling -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Vast+Shadow&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Vast+Shadow&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" crossorigin="anonymous">
   <style>
       body {
           font-family: "Vast Shadow", sans-serif;
           background-color: black;
           padding: 20px;
           color: white;
       }
       .error {
           color: red;
           font-weight: bold;
           margin-top: 10px;
       }
       main {
           max-width: 800px;
           margin: 50px auto;
           padding: 20px;
           background-color: #7393B3;
           border-radius: 8px;
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
       button {
           background-color: black;
           color: white;
           border: none;
           border-radius: 4px;
           cursor: pointer;
           padding: 10px 15px;
       }
       button:hover {
           background-color: white;
           color: black;
       }
       .form-group {
           margin-bottom: 20px;
       }
       .message {
           margin-top: 20px;
       }
   </style>

   <!-- jQuery for AJAX -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <main>
        <h2>Visitors Form</h2>

        <form id="myForm">
            <div class="form-group">
                <label for="date">Date</label>
                <input required id="date" type="text" name="date" class="form-control" placeholder="MM/DD/YR...">
            </div>

            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input required id="fullname" type="text" name="fullname" class="form-control" placeholder="Fullname...">
            </div>

            <div class="form-group">
                <label for="nationality">Nationality</label>
                <input required id="nationality" type="text" name="nationality" class="form-control" placeholder="Nationality">
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input required id="age" type="number" name="age" class="form-control" placeholder="Age" min="0">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input required id="email" type="email" name="email" class="form-control" placeholder="Your Email">
            </div>

            <button type="submit">Submit</button>
            <button type="button" onclick="location.href='front.php'">Go Back</button>
            <div id="message" class="message"></div>
        </form>
    </main>

    <script>
        $(document).ready(function() {
            $('#myForm').on('submit', function(e) {
                e.preventDefault(); // Prevent traditional form submission

                // Clear previous error messages
                $('#message').empty();

                // Basic client-side validation
                let isValid = true;
                let message = "";

                const email = $('#email').val();
                const fullname = $('#fullname').val();
                const age = $('#age').val();
                const nationality = $('#nationality').val();

                // Validate full name
                if (!fullname || !/^[a-zA-Z\s]+$/.test(fullname)) {
                    message += "Please provide a valid full name. Only letters and spaces are allowed.<br>";
                    isValid = false;
                }

                // Validate email
                const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
                if (!email || !emailPattern.test(email)) {
                    message += "Please provide a valid email address.<br>";
                    isValid = false;
                }

                // Validate nationality
                if (!nationality) {
                    message += "Nationality is required.<br>";
                    isValid = false;
                }

                // Validate age
                if (!age || age < 0 || !Number.isInteger(parseInt(age))) {
                    message += "Please provide a valid age.<br>";
                    isValid = false;
                }

                if (!isValid) {
                    $('#message').html('<p class="error">' + message + '</p>');
                    return;
                }

                // If validation passes, proceed with AJAX submission
                $.ajax({
                    url: 'visihandle.php',
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        const data = JSON.parse(response);

                        if (data.success) {
                           window.location.href='webpage.php';
                        } else {
                            $('#message').html('<p class="error">' + data.message + '</p>');
                        }
                    },
                    error: function(xhr, status, error) {
                        $('#message').html('<p class="error">An unexpected error occurred: ' + error + '</p>');
                    }
                });
            });
        });
    </script>
</body>
</html>