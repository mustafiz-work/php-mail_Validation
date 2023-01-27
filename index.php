<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail Validation</title>
</head>
<body>
<?php
    require('connection.php');

    if(isset($_POST["formSubmit"])){
        $username = $_POST['full_name'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        if($query = mysqli_query($connect,"INSERT INTO first_user (`fullname`, `phone_number`, `email`) VALUES ('".$username."', '".$number."', '".$email."')")){
            echo "Success";
        }else{
            echo "Failure" . mysqli_error($connect);
        }
    }
    ?>
    
    <form action="" method="POST">
        <label for="text">Name</label>
        <input type="text" name="full_name" placeholder="Enter Your Name" required>
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter Your email" required>
        <br>
        <label for="number">Phone Number</label>
        <input type="text" name="number" placeholder="Enter Your Phone Number" required>
        <br>
        <button type="submit" name="formSubmit">Submit</button>
    </form>
    
</body>
</html>