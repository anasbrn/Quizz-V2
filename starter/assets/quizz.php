<?php
    include '../../Classes/GetData.php' ;
    include '../../Classes/User.php' ;
    if(!isset($_SESSION['id'])) {
        header('location: ./login/login.php') ;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/starter/assets/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>QuizzYD</title>
</head>
<body class="quizz" id="quizz">
    <?php 
        GetData::getQuestions() ;
    ?>

    <div class="bar" id="bar">
        <div class="barLevel"></div>
    </div>

    <div class="navbar">
        <div class="breadcrumbs" id="nameOfContestant">
            <?= $_SESSION['firstName'] ?>
        </div>
        <div class="logo"><img src="/design/img/logo.svg" alt="" width="400">
        </div>
        <div class="lightmode" id="lightmode" ><i class="fa fa-sun" onclick="lightmodeQuizz()"></i></div>
        <div style="display: none;" class="darkmode" id="darkmode" ><i class="fa fa-moon" onclick="darkmodeQuizz()"></i></div>
    </div>

    <div class="stepperComponentParent">
        <div class="stepperComponent">
            <div id="step1" class="steps active"><i class="fa fa-check"></i></div>
                <div class="line1" id="line1"></div>
                <div id="step2" class="steps">2</div>
                <div class="line2" id="line2"></div>
                <div id="step3" class="steps">3</div>
            </div>
        </div>
    </div>

    <div class="titlesStepperParent">
        <div class="titlesStepper" id="titlesStepper">
            <div class="">Rules</div>
            <div class="">Questions</div>
            <div class="">Result</div>
        </div>
    </div>

    <div class="quizzContainer">

        <div class="loadingQuizz" id="loadingQuizz" style="display: none;">
            <div class="loadingQ" id="loadingQ"></div>
        </div>

      
        
        <div id="rules" class="rules">
            <div class="titles">Quizz Rules</div>
            <p>1. You have 30 secondes in every question.</p>
            <p>2. You can't pass to the next question until you answer.</p>
            <p>3. You can't see your score until the end of the quizz.</p>
            <p>4. You have 1 point for every correct question.</p>
            <div  class="next_button">
                <button type="button" onclick="switchFromRulesToCounter(); setTimeout(countdown, 1000); allQuestions(); stepperCompenantStep2(); countDownQuestions()">Start Quizz</button>
            </div>
        </div>

        

        <div id="counter">
            <span id="secondes">3</span>
        </div>

        <div id="questions" class="questions">
            <div class="titles">Choose the correct answer</div>
            <div id="questionsAnswers">
                <div class="timerQuestions" id="timerQuestions">Timer:
                    <div class="timerQuestionsSecondes" id="timerQuestionsSecondes">10</div>
                </div>

                <div id="question" class="question">What is php?</div>

                <div class="answers">
                    <input type="radio" name="answer1" id="1" class="radio">
                    <label for="1" id="a" class="answers">What is PHP</label>
                </div>

                <div class="answers">
                    <input type="radio" name="answer2" id="2" class="radio">
                    <label for="2" id="b" class="answers">What is PHP</label>
                </div>

                <div class="answers">
                    <input type="radio" name="answer3" id="3" class="radio">
                    <label for="3" id="c" class="answers">What is PHP</label>
                </div>

                <div class="answers">
                    <input type="radio" name="answer4" id="4" class="radio">
                    <label for="4" id="d" class="answers">What is PHP</label>
                </div>
            </div>

            <div id="loading" class="">
                <div id="loading_questions" class="loading_questions" style="display: none;"></div>
            </div>

            <div class="questionsAnswers">
                <span id="currentQuestion"></span> / <span id="maxQuestions">5</span>
            </div>

            <div class="next_button">
                <div class="QuestionsButtons">
                    <button id="nextQuestion" class="next_button_question" onclick="emptyAnswer()">Next question</button>
                    <!-- <form action="../../classes/User.php" method="POST"> -->
                        <button id="submit" name="submit" style="display: none;" onclick="emptyLastAnswer(); submitScore()">Submit</button>
                    <!-- </form> -->
                    <button id="reset" class="reset" onclick="deselectChosenQuestions()">Reset</button>
                </div>
            </div>
        </div>

        <div id="result" class="result">
            <div class="titles" id="congratulations"></div>
            <div class="score">Your score is</div>
            <div class="barResult" id="barResult">
                <div class="barResultLevel" name="barResultLevel" id="barResultLevel"></div>
            </div>
            <div class="answersFinal">
                <div class="correctAnswers" id="correctAnswers">Correct answers: </div>
                <div class="wrongAnswers" id="wrongAnswers">Wrong answers: </div>
            </div>
                <div style="display: flex; justify-content: center;">
                <a style="margin-right: 10px;" onclick="replayQuizz()">Replay quizz</a>
                <a href="../../index.php">Home page</a>
            </div>
        </div>
    </div>

    <script src="/starter/assets/script/data.js"></script>
    <script src="/starter/assets/script/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>
</html>