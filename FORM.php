<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://onepiece-merchandise.com/wp-content/uploads/2023/07/Sun-God-Nika-One-Piece.jpg'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 15px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    <script>
        function validateForm() {
            var name = document.forms["registrationForm"]["name"].value;
            var email = document.forms["registrationForm"]["email"].value;
            var address = document.forms["registrationForm"]["address"].value;
            var phoneNumber = document.forms["registrationForm"]["phone_number"].value;
            var gender = document.forms["registrationForm"]["gender"].value;
            var fatherName = document.forms["registrationForm"]["Father_Name"].value;
            var motherName = document.forms["registrationForm"]["Mother_Name"].value;

            if (name == "") {
                alert("Name must be filled out");
                return false;
            }
            if (email == "") {
                alert("Email must be filled out");
                return false;
            }
            
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!emailPattern.test(email)) {
                alert("Please enter a valid email address");
                return false;
            }
            if (address == "") {
                alert("Address must be filled out");
                return false;
            }
            if (phoneNumber == "") {
                alert("Phone number must be filled out");
                return false;
            }
     
            var phonePattern = /^[0-9]{11}$/;
            if (!phonePattern.test(phoneNumber)) {
                alert("Please enter a valid 11-digit phone number");
                return false;
            }
            if (gender == "") {
                alert("Gender must be filled out");
                return false;
            }
            if (fatherName == "") {
                alert("Father's Name must be filled out");
                return false;
            }
            if (motherName == "") {
                alert("Mother's Name must be filled out");
                return false;
            }
        }
    </script>
</head>
<body>
    <h1>Registration Form</h1>
    <form name="registrationForm" action="output.php" method="post" onsubmit="return validateForm()">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address">
        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number">
        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender">
        <label for="Father_Name">Father's Name:</label>
        <input type="text" id="Father_Name" name="Father_Name">
        <label for="Mother_Name">Mother's Name:</label>
        <input type="text" id="Mother_Name" name="Mother_Name">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
