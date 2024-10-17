<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .container {
            background-color: white;
            padding: 20px;
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .form-title {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        .input-group {
            position: relative;
            margin-bottom: 20px;
        }

        .input-group input {
            width: 100%;
            padding: 10px 10px 10px 40px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
            font-size: 16px;
            transition: padding-top 0.2s, font-size 0.2s;
        }

        .input-group label {
            position: absolute;
            left: 40px;
            top: 12px;
            color: #888;
            font-size: 16px;
            transition: 0.2s;
            pointer-events: none;
        }

        .input-group input:focus + label,
        .input-group input:not(:placeholder-shown) + label {
            top: -10px;
            font-size: 12px;
            color: #007bff;
        }

        .input-group i {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .or {
            text-align: center;
            margin: 10px 0;
        }

        .icons {
            text-align: center;
        }

        .icons i {
            font-size: 24px;
            margin: 0 10px;
            cursor: pointer;
        }

        .links {
            text-align: center;
            margin-top: 20px;
        }

        .recover {
            text-align: right;
            margin-bottom: 20px;
        }

        @media (max-width: 600px) {
            .container {
                padding: 15px;
                max-width: 90%;
            }

            .form-title {
                font-size: 20px;
            }

            .input-group input {
                font-size: 14px;
                padding-left: 35px;
            }

            .input-group label {
                font-size: 14px;
            }

            .input-group i {
                font-size: 16px;
            }

            .btn {
                padding: 8px;
                font-size: 14px;
            }

            .icons i {
                font-size: 20px;
            }
        }

        /*BacgroundImage*/
        
         * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('https://ariabgrestaurant.com/img/intro/restaurants_ARIA_d.jpg') no-repeat center center fixed; 
            background-size: cover; /* Make the background cover the whole area */
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Slightly transparent white background */
            padding: 20px;
            width: 100%;
            max-width: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .form-title {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        .input-group {
            position: relative;
            margin-bottom: 20px;
        }

        .input-group input {
            width: 100%;
            padding: 10px 10px 10px 40px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
            font-size: 16px;
            transition: padding-top 0.2s, font-size 0.2s;
        }

        .input-group label {
            position: absolute;
            left: 40px;
            top: 12px;
            color: #888;
            font-size: 16px;
            transition: 0.2s;
            pointer-events: none;
        }

        .input-group input:focus + label,
        .input-group input:not(:placeholder-shown) + label {
            top: -10px;
            font-size: 12px;
            color: #007bff;
        }

        .input-group i {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .or {
            text-align: center;
            margin: 10px 0;
        }

        .icons {
            text-align: center;
        }

        .icons i {
            font-size: 24px;
            margin: 0 10px;
            cursor: pointer;
        }

        .links {
            text-align: center;
            margin-top: 20px;
        }

        .recover {
            text-align: right;
            margin-bottom: 20px;
        }

        @media (max-width: 600px) {
            .container {
                padding: 15px;
                max-width: 90%;
            }

            .form-title {
                font-size: 20px;
            }

            .input-group input {
                font-size: 14px;
                padding-left: 35px;
            }

            .input-group label {
                font-size: 14px;
            }

            .input-group i {
                font-size: 16px;
            }

            .btn {
                padding: 8px;
                font-size: 14px;
            }

            .icons i {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Register</h1>
      <form method="post" action="register.php" onsubmit="return validatePassword()">
        <div class="input-group">
           <input type="text" name="fName" id="fName" placeholder=" " required>
           <label for="fName">First Name</label>
           <i class="fas fa-user"></i>
        </div>
        <div class="input-group">
            <input type="text" name="lName" id="lName" placeholder=" " required>
            <label for="lName">Last Name</label>
            <i class="fas fa-user"></i>
        </div>
        <div class="input-group">
            <input type="email" name="email" id="email" placeholder=" " required>
            <label for="email">Email</label>
            <i class="fas fa-envelope"></i>
        </div>
        <div class="input-group">
            <input type="password" name="password" id="password" placeholder=" " required minlength="6">
            <label for="password">Password (Min. 6 characters)</label>
            <i class="fas fa-lock"></i>
        </div>
        <div class="input-group">
            <input type="password" name="confirmPassword" id="confirmPassword" placeholder=" " required>
            <label for="confirmPassword">Confirm Password</label>
            <i class="fas fa-lock"></i>
        </div>
       <input type="submit" class="btn" value="Sign Up" name="signUp">
      </form>
      <p class="or">
        ----------or--------
      </p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>
      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
          <div class="input-group">
              <input type="email" name="email" id="email" placeholder=" " required>
              <label for="email">Email</label>
              <i class="fas fa-envelope"></i>
          </div>
          <div class="input-group">
              <input type="password" name="password" id="password" placeholder=" " required>
              <label for="password">Password</label>
              <i class="fas fa-lock"></i>
          </div>
          <p class="recover">
          <a href="#">Recover Password</a></p>
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">
          ----------or--------
        </p>
        <div class="icons">
          <i class="fab fa-google"></i>
          <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
          <p>Don't have account yet?</p>
          <button id="signUpButton">Sign Up</button> 
        </div>
        <div class="links">
          <button id="gotohomepage" onclick="window.location.href='homePage.html'">Go to Home Page </button>
        </div>

      </div>


      <div class="container" id="forgotPassword" style="display:none;">
    <h1 class="form-title">Recover Password</h1>
    <form method="post" action="send_reset_email.php">
        <div class="input-group">
            <input type="email" name="resetEmail" id="resetEmail" placeholder=" " required>
            <label for="resetEmail">Enter Your Email</label>
            <i class="fas fa-envelope"></i>
        </div>
        <input type="submit" class="btn" value="Send Reset Link">
    </form>
    <div class="links">
        <button id="backToSignIn">Back to Sign In</button>
    </div>
</div>


      <script>
        // Function to validate if password and confirm password match
        function validatePassword() {
          var password = document.getElementById("password").value;
          var confirmPassword = document.getElementById("confirmPassword").value;
          if (password !== confirmPassword) {
            alert("Passwords do not match.");
            return false;
          }
          return true;
        }

        // Function to show Sign In form and hide Sign Up form
        document.getElementById("signInButton").addEventListener("click", function() {
          document.getElementById("signIn").style.display = "block";
          document.getElementById("signup").style.display = "none";
        });

        // Function to show Sign Up form and hide Sign In form
        document.getElementById("signUpButton").addEventListener("click", function() {
          document.getElementById("signup").style.display = "block";
          document.getElementById("signIn").style.display = "none";
        });

        // Initial display setup (show Sign In form by default)
        window.onload = function() {
          document.getElementById("signIn").style.display = "block";
          document.getElementById("signup").style.display = "none";
        };


        // Show Forgot Password form and hide others
document.querySelector(".recover a").addEventListener("click", function() {
    document.getElementById("signIn").style.display = "none";
    document.getElementById("signup").style.display = "none";
    document.getElementById("forgotPassword").style.display = "block";
});

// Go back to Sign In form from Forgot Password form
document.getElementById("backToSignIn").addEventListener("click", function() {
    document.getElementById("forgotPassword").style.display = "none";
    document.getElementById("signIn").style.display = "block";
});

      </script>
      
</body>
</html>