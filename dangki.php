<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assests/css/style.css">
    <link rel="stylesheet" href="/assests/css/resposive.css">
    <link rel="stylesheet" href="./assests/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="icon" href="https://codetot.net/wp-content/uploads/2017/11/favicon-example-generator-300x300.png"
        type="image/x-icon" />
    <link rel="stylesheet" href="/assests/css/RegisCSS.css">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="/style.css">
    <title>DANGKI</title>
</head>

<body>
<?php include 'connect.php';?>
    <?php
     if (isset($_POST['form_click'])){
     
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $country = $_POST['country'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cPassword = $_POST['password'];
        if($conn->query("INSERT INTO dangki(FirstName,LastName,Country,Email,Password,ConfirmPassword) value(N'$firstname', N'$lastname',N'$country',N'$email',N'$password',N'$password')"))
        {
           echo "<p>Cập nhật dữ liệu thành công!</p>";
            } else{
           echo "<p>Cập nhật dữ liệu thất bại!</p>";
        }
         $conn->Close();
    }
    ?>
    <div class="phanthan">
        <div class="form-dangki">
            <h2 class="tieude">Registration</h2>
            <form method="POST" name="registration">

                <label for="firstname">First Name</label>
                <input type="text"  name="firstname" id="firstname" placeholder="John"
                    class="border-radius">

                <label for="lastname">Last Name</label>
                <input type="text"  name="lastname" id="lastname" placeholder="Doe"
                    class="border-radius">

                <label for="country">Country</label>
                <input type="text"  name="country" id="country" placeholder="Input your country"
                    class="border-radius">

                <label for="email">Email</label>
                <input type="email"  name="email" id="email" placeholder="john@doe.com"
                    class="border-radius">

                <label for="password">Password</label>
                <input type="password"  name="password" id="password"
                    placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;" class="border-radius">

                <label for="Birth">Confirm Password</label>
                <input type="password"  name="password" id="password"
                    placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;" class="border-radius">
                    
                <!-- <textarea name="User presentation" id="user" cols="60" rows="10">User presentation...</textarea> -->
                <button type="submit" name="form_click" class="reset-form border-radius">Register</button>
                <button type="reset" class="reset-form border-radius">Reset Form</button>
            </form>
        </div>
    </div>
</body>

</html>