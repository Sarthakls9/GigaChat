<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GigaChat</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>GigaChat</header>
            <form action="#">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>Email Address</label>
                        <input type="text" name="email" placeholder="Enter your Email">
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input id="pass-input" name="password" type="password" placeholder="Enter new password">
                        <i class="far fa-eye eye" id="togglePassword" onclick="togglepass();"></i>
                    </div>
                    <div class="field button">
                        <input class="submit" type="submit" value="Continue to Chat">
                    </div>
                </div>
            </form>
            <div class="link">Don't Have an account yet? <a href="index.php">Sign Up</a></div>
        </section>
    </div>   
    <script src="pass-show-hide.js"></script>
    <script src="login.js"></script> 
</body>
</html>