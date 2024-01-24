

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="signIn.css" />
    <script defer src="./signup.js"></script>
    <title>SignIn</title>
</head>
<body>

    <div class="container">
    <div class="forma signup">
        <h1>sign up to flariss store</h1>
        <form id="form" action="/">
            <div class="inputi">
                <input type="text" id="username" placeholder="Username">
                <div class="error"></div>
            </div>
            <div class="inputi">
                <input type="text" id="email" placeholder="Email" >
                <div class="error"></div>
            </div>
            <div class="inputi">
                <input type="password" id="password" placeholder="Password">
                <div class="error"></div>
            </div>
            <div class="inputi">
                <input type="password" id="password2" placeholder="Verify your password">
                <div class="error"></div>
            </div>
            <div class="terms">
                <label><input type="checkbox"><a href="#"> I agree to the terms & conditions</a></label>
            </div>
            <button type="submit" class="btn">Sign Up</button>
            <div class="register">
                <p>Already have an account?<a href="signin.php"> Sign In</a></p>
            </div>
        </form>
    </div>
  </div>
</body>
</html>

