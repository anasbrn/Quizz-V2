<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/starter/assets/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Login</title>
</head>
<body class="quizz" id="quizz">
<div class="navbar">
        <div class="breadcrumbs" id="breadcrumbs">
            <ul style="list-style: none; display: flex; padding: 0;">
                <li style="margin-right: 5px;"><a href="../../../index.php" style="text-decoration: none; color: white;" id="homeBreadcrumbs">Home</a></li>
                <li style="margin-right: 5px;">></li>
                <li style="margin-right: 5px; color: gray;">Login</li>
            </ul>
        </div>
        <div class="logo"><img src="/design/img/logo.svg" alt="" width="400">
        </div>
        <div class="lightmode" id="lightmode" ><i class="fa fa-sun" onclick="lightmodeLogin()"></i></div>
        <div style="display: none;" class="darkmode" id="darkmode" ><i class="fa fa-moon" onclick="darkmodeLogin()"></i></div>
    </div>

    <div class="quizzContainer">
        <section class="login" id="login">
            <div class="signUp" id="signUpSection" style="display: none;">
                <form action="/classes/User.php" method="post">
                    <div class="firstName">
                        <label for="firstName">First Name</label>
                        <input type="text" name="firstName" id="firstName" placeholder="Enter your first name" required>
                    </div>

                    <div>
                        <label for="lastName">Last Name</label>
                        <input type="text" name="lastName" id="lastName" placeholder="Enter your last name" required>
                    </div>

                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email" required>
                    </div>

                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password" required>
                    </div>

                    <div>
                        <label for="register"></label>
                        <button type="submit" name="register" id="register">Register</button>
                        <p>Already have an account? <a class="switchFromSignInToSingUp" onclick="switchFromSignUoToSingIn()" style="cursor: pointer;"><b>Sign In</b></a></p>
                    </div>
                </form>
            </div>

            <div class="signIn" id="signInSection">
            <form action="/classes/User.php" method="post">
                    <h1 style="text-align: center;">Sign In</h1>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email" required>
                    </div>

                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password" required>
                    </div>

                    <div>
                        <label for="signIn"></label>
                        <button type="submit" name="signIn" id="signIn">Sign In</button>
                        <p>You don't have an account? <a class="switchFromSignInToSingUp" onclick="switchFromSignInToSingUp()" style="cursor: pointer;"><b>Sign Up</b></a></p>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <script src="/starter/assets/script/main.js"></script>
</body>
</html>