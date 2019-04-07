<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
    .login-main > *{
        display: inline-block;
    }
    .login-left {
        background-color: #ddd;
    }
    .login-left h2{
        margin: 40px 0 0 40px;
    }
    .login-left img {
        height: 300px;
        width: 500px;
        margin: 20px 50px 50px 50px;
    }
    .loginbox {
        margin: 50px 0 0 30px;
    }
    .otpform{
        display: none;
    }
    </style>
</head>
<body>
    <div class="login-main">
        <div class="login-left">
            <h2>Combining Today with Traditions.</h2>
            <img src="../images/AboutBack.jpg" alt="Hotel"/>
        </div>
        <div class="login-right">
            <div class="loginbox">
                <h1>Login</h1>
                <form method="POST">
                    <label for="phone">Enter Mobile Number</label><br/>
                    <input type="tel" name="phone" id="phone"/>
                    <input type="submit" value="Get OTP" onclick="return showotp()">
                    <br/><br/><br/>
                    <div class="otpform" id="otpform">
                        <label for="otp">Enter OTP</label><br/>
                        <input type="text" name="otp" id="otp"/><br/><br/>
                        <input type="submit" value="Login"/>
                    </div>
                </form>
            </div>
            <br/><br/><br/><br/><br/><br/><br/><br/>
        </div>
    </div>
    <script>
    function showotp(){
        document.getElementById("otpform").style.display = "block";
        return false;
    }
    </script>
</body>
</html>