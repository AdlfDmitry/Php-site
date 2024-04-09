<?php
if (isset($_POST['submit'])) {
    require_once 'db.php';
    $full_name = $_POST['full_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $query = $conn->prepare("INSERT INTO Customer (Full_Name, Phone_Number, Email) VALUES (?, ?, ?)");
   
    $query->bind_param("sss", $full_name, $phone_number, $email);
    $result = $query->execute();

    $conn->close();
    header("Location: index.php");
    exit();

} elseif (isset($_POST['back'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ad_data.css">
    <title>Form</title>
    <script>
        function checkForm() {
            var fullName = document.getElementById("full_name").value;
            var phoneNumber = document.getElementById("phone_number").value;
            var email = document.getElementById("email").value;
            var submitButton = document.getElementById("submit_button");

            if (fullName.trim() !== "" && phoneNumber.trim() !== "" && email.trim() !== "") {
                submitButton.disabled = false;
            } else {
                submitButton.disabled = true;
            }
        }
    </script>
</head>
<body>
<header>
    <div class="logo">
        <img src="img/log 1.png" alt="Simple Bank Logo">
    </div>
    <h1>Simple Bank</h1>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
</header>

<form action="" method="post">
    <h2>Fill the form:</h2>
    <label for="full_name">Full Name:</label><br>
    <input type="text" id="full_name" name="full_name" onkeyup="checkForm()"><br>
    <label for="phone_number">Phone Number:</label><br>
    <input type="text" id="phone_number" name="phone_number" onkeyup="checkForm()"><br>
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email" onkeyup="checkForm()"><br><br>
    <button class="btn" id="submit_button" type="submit" name="submit" disabled>Submit</button>
   <button class="btn" onclick=" window.location.href = 'index.php';return false">Back</button>


</form>


<footer>
    <p>2024 Simple Bank. All rights reserved.</p>
</footer>
</body>
</html>
