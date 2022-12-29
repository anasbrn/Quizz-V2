<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css"></link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Sign In</title>
</head>
<body class="quizz" id="quizz">
    <div class="navbar">
        <div class="breadcrumbs" id="breadcrumbs">
            <ul style="list-style: none; display: flex; padding: 0;">
                <li style="margin-right: 5px;"><a href="../../index.php" style="text-decoration: none; color: white;" id="homeBreadcrumbs">Home</a></li>
                <li style="margin-right: 5px;">/</li>
                <li style="margin-right: 5px; color: gray;">Quizz</li>
            </ul>
        </div>
        <div class="logo"><img src="/design/img/logo.svg" alt="" width="400">
        </div>
        <div class="lightmode" id="lightmode" ><i class="fa fa-sun" onclick="lightmodeQuizz()"></i></div>
        <div style="display: none;" class="darkmode" id="darkmode" ><i class="fa fa-moon" onclick="darkmodeQuizz()"></i></div>
    </div>

    <div class="quizzContainer">
        <section class="login" id="login">
            <div>
                <form action="/classes/User.php" method="post">
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
                    </div>
                </form>
            </div>
        </section>
    </div>
</body>
</html>