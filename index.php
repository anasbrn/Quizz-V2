<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="/starter/assets/style/style.css">
    <title>Home</title>
</head>
<body class="homepage" id="homepage">
    <div class="navbar">
        <div class="breadcrumbs" id="breadcrumbs">
            <ul style="list-style: none; display: flex; padding: 0;">
                <li style="margin-right: 5px; color: gray;">Home</li>
                <!-- <li style="margin-right: 5px;">></li> -->
                <!-- <li><a onclick="loadingQuizz()" style="text-decoration: none; color: white; cursor: pointer;" id="quizzBreadCrumbs">Quizz</a></li> -->
            </ul>
        </div>

        <div class="logo">
            <img src="/design/img/logo.svg" alt="" width="400">
        </div>
        
        <div class="lightmode" id="lightmode" ><i class="fa fa-sun" onclick="lightmode()"></i></div>
        <div style="display: none;" class="darkmode" id="darkmode" ><i class="fa fa-moon" onclick="darkmode()"></i></div>
    </div>

    <section class="homeContent" id="homeContent">
        <div style="margin-right: 20px;">
            <h1>Challenge Yourself in PHP QUIZZ</h1>
            <p>Once you stop learning, you start dying</p>
            <div><a id="getStarted" onclick="loadingQuizz()">Get started</a></div>
        </div>
        <div>
            <img src="/design/img/Q_and_A.svg" alt="Q&A" width="500">
        </div>
    </section>

    
    <script src="/starter/assets/script/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>
</html>