<html>
<head>
    <title>Form Output</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" || $_SERVER["REQUEST_METHOD"] == "GET") {
        $name = htmlspecialchars($_REQUEST["name"]);
        $email = htmlspecialchars($_REQUEST["email"]);
        $address = htmlspecialchars($_REQUEST["address"]);
        $phone_number = htmlspecialchars($_REQUEST["phone_number"]);
        $gender = htmlspecialchars($_REQUEST["gender"]);
        $father_name = htmlspecialchars($_REQUEST["Father_Name"]);
        $mother_name = htmlspecialchars($_REQUEST["Mother_Name"]);
        
        echo "Welcome " . $name . "<br>";
        echo "Your Email Address is: " . $email . "<br>";
        echo "Your Address is: " . $address . "<br>";
        echo "Your Phone Number is: " . $phone_number . "<br>";
        echo "Your Gender is: " . $gender . "<br>";
        echo "Your Father's Name is: " . $father_name . "<br>";
        echo "Your Mother's Name is: " . $mother_name . "<br>";
    } else {
        echo "Invalid request method.";
    }
    ?>
</body>
</html>
