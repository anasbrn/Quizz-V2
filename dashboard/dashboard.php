<?php
    include '../classes/Admin.php' ;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/starter/assets/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Dashboard</title>
</head>
<body class="quizz" id="quizz">
    <div class="navbar">
        <div class="logout" id="logout">
            <i class="fa-solid fa-right-from-bracket" id="logoutButton"></i><a class="logoutAdmin" href="../starter/assets/login/login.php">Logout</a>
        </div>
        <div class="logo"><img src="/design/img/logo.svg" alt="" width="400">
        </div>
        <div class="lightmode" id="lightmode" ><i class="fa fa-sun" id="buttonLightMode" onclick="lightmodeDashboard()"></i></div>
        <div style="display: none;" class="darkmode" id="darkmode" ><i class="fa fa-moon" id="buttonDarkMode" onclick="darkmodeDashboard()"></i></div>
    </div>

    <div class="dashboard">
        <h1 id="titleDashboard">Dashboard</h1>
   
    <table id="table" style="border: 2px solid white;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Quizz Name</th>
                <th>Score</th>
                <th>email</th>
                <th>Ip Address</th>
                <th>OS</th>
                <th>Browser</th>
            </tr>
        </thead>

        <tbody>
        <?php  
            $data = Admin::getAllContestants() ;
            foreach ($data as $datas){
        ?>
            <tr>
                <td><?= $datas['firstName'].' '.$datas['lastName'] ?></td>
                <td><?= $datas['quizzName'] ?></td>
                <td><?= $datas['score'] ?></td>
                <td><?= $datas['email'] ?></td>
                <td><?= $datas['ipAddress'] ?></td>
                <td><?= $datas['os'] ?></td>
                <td><?= $datas['browser'] ?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    </div>
            <script src="../starter/assets/script/main.js"></script>
</body>
</html>