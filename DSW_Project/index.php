<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GigaChat</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="pass-show-hide.js"></script>

</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>GigaChat</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label>Last name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                    <div class="field input">
                        <label>Email Address</label>
                        <input type="text" name="email" placeholder="Enter your Email" required>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input id="pass-input" name="password" type="password" placeholder="Enter new password" required>
                        <i class="far fa-eye eye" id="togglePassword" onclick="togglepass();"></i>
                    </div>
                    <div class="field image">
                        <label>Select Image</label>
                        <input class="file" type="file" name="image" required>
                    </div>
                    <div class="field button">
                        <input class="submit" type="submit" value="Continue to Chat">
                    </div>
                </div>
            </form>
            <div class="link">Already signed up? <a href="login.php">Login Now</a></div>
        </section>
    </div>   
    <script src="signup.js"></script> 
</body>
</html>