const newQuestion = quizzQuestions.sort((a, b) => 0.5 - Math.random());

let currnetQuestion = -1;


function lightmode(){
    let lightmode = document.getElementById('lightmode') ;
    let darkmode  = document.getElementById('darkmode') ;
    let background = document.getElementById('homepage') ;
    let texts       = document.getElementById('homeContent') ;
    let breadcrumbs = document.getElementById('breadcrumbs') ;
    let getStarted = document.getElementById('getStarted') ;
    let quizzBreadCrumbs = document.getElementById('quizzBreadCrumbs') ;

    
    background.style.backgroundImage = "linear-gradient(to left, #4ade80 , #fff)" ;
    getStarted.style.backgroundImage = "linear-gradient(to left, #09834a , #4ade80)" ;
    texts.style.color = "#333" ;
    breadcrumbs.style.color = "#333" ;
    lightmode.style.display = "none" ;
    darkmode.style.display = "block" ;
    quizzBreadCrumbs.style.color = "black"
}


function lightmodeQuizz(){
    let lightmode = document.getElementById('lightmode') ;
    let darkmode  = document.getElementById('darkmode') ;
    let background  = document.getElementById('quizz') ;
    let nameOfContestant  = document.getElementById('nameOfContestant') ;
    let rules  = document.getElementById('rules') ;
    let questions = document.getElementById('questions') ;
    let counter = document.getElementById('counter') ;
    let result = document.getElementById('result') ;
    let timerQuestions = document.getElementById('timerQuestions') ;
    let homeBreadcrumbs = document.getElementById('homeBreadcrumbs') ;

    
    background.style.backgroundImage = "url(/design/img/backgroundLightMode.svg)" ; 
    nameOfContestant.style.color = "black" ;
    titlesStepper.style.color = "black" ;
    rules.style.background = "#CBD5E1" ;
    questions.style.background = "#CBD5E1" ;
    counter.style.background = "#E2E8F0" ;
    result.style.background = "#CBD5E1" ;
    rules.style.color = "black" ;
    questions.style.color = "black" ;
    counter.style.color = "black" ;
    result.style.color = "black" ;
    timerQuestions.style.color = "white" ;
    lightmode.style.display = "none" ;
    darkmode.style.display = "block" ;
}

function darkmodeQuizz(){
    let lightmode = document.getElementById('lightmode') ;
    let darkmode  = document.getElementById('darkmode') ;
    let background  = document.getElementById('quizz') ;
    let nameOfContestant  = document.getElementById('nameOfContestant') ;
    let rules  = document.getElementById('rules') ;
    let questions = document.getElementById('questions') ;
    let counter = document.getElementById('counter') ;
    let result = document.getElementById('result') ;
    let timerQuestions = document.getElementById('timerQuestions') ;
    let homeBreadcrumbs = document.getElementById('homeBreadcrumbs') ;
    
    background.style.backgroundImage = "url(/design/img/backgroundDarkMode.svg)" ; 
    nameOfContestant.style.color = "white" ;
    titlesStepper.style.color = "white" ;
    rules.style.background = "#555555" ;
    questions.style.background = "#555555" ;
    counter.style.background = "#333333" ;
    result.style.background = "#555555" ;
    rules.style.color = "white" ;
    questions.style.color = "white" ;
    counter.style.color = "white" ;
    result.style.color = "white" ;
    timerQuestions.style.color = "white" ;
    lightmode.style.display = "block" ;
    darkmode.style.display = "none" ;
}


function darkmode(){ 
    let texts       = document.getElementById('homeContent') ;
    let lightmode = document.getElementById('lightmode') ;
    let darkmode  = document.getElementById('darkmode') ;
    let background = document.getElementById('homepage') ;
    let breadcrumbs = document.getElementById('breadcrumbs') ;
    let getStarted = document.getElementById('getStarted') ;
    let quizzBreadCrumbs = document.getElementById('quizzBreadCrumbs') ;



        background.style.backgroundImage = "linear-gradient(to right, black , #23BE75)"
        getStarted.style.backgroundImage = "linear-gradient(to left, #23BE75 , #09834a)" ;
        texts.style.color = "white" ;
        breadcrumbs.style.color = "white" ;
        lightmode.style.display = "block" ;
        darkmode.style.display = "none" ;
        quizzBreadCrumbs.style.color = "white"

}

function lightmodeLogin(){
    let background  = document.getElementById('quizz') ;
    let breadcrumbs  = document.getElementById('breadcrumbs') ;
    // let homeBreadcrumbs = document.getElementById('homeBreadCrumbs') ;
    let login  = document.getElementById('login') ;
    let buttonLightMode  = document.getElementById('lightmode') ;
    let buttonDarkMode  = document.getElementById('darkmode') ;

    background.style.backgroundImage = "url(/design/img/backgroundLightMode.svg)" ; 

    breadcrumbs.style.color = "black" ;
    // homeBreadcrumbs.style.color = "black"
    login.style.background = "#CBD5E1" ;
    login.style.color = "black" ;
    buttonLightMode.style.display = "none" ;
    buttonDarkMode.style.display = "block" ;
}

function darkmodeLogin(){
    let background  = document.getElementById('quizz') ;
    let breadcrumbs  = document.getElementById('breadcrumbs') ;
    // let homeBreadcrumbs = document.getElementById('homeBreadCrumbs') ;
    let login  = document.getElementById('login') ;
    let buttonLightMode  = document.getElementById('lightmode') ;
    let buttonDarkMode  = document.getElementById('darkmode') ;

    background.style.backgroundImage = "url(/design/img/backgroundDarkMode.svg)" ; 
    breadcrumbs.style.color = "white" ;
    // homeBreadcrumbs.style.color = "white"
    login.style.background = "#555555" ;
    login.style.color = "white" ;
    buttonLightMode.style.display = "block" ;
    buttonDarkMode.style.display = "none" ;
}

function switchFromSignInToSingUp(){
    document.getElementById('signInSection').style.display = "none" ;
    document.getElementById('signUpSection').style.display = "block" ;
}


function switchFromSignUoToSingIn(){
    document.getElementById('signInSection').style.display = "block" ;
    document.getElementById('signUpSection').style.display = "none" ;
}


function loadingQuizz(){
    setTimeout(function() {
        $('#homeContent').fadeOut('100');
        $('#homepage').fadeOut('100');
    }, 100);

    window.setTimeout(function(){
        window.location.assign('/starter/assets/login/login.php') ;
    },500) ;
}


// function getStarted(){
//     document.getElementById('loadingQuizz').style.display = "block" ;
//     document.getElementById('userName').style.display = "none" ;
    
//     setTimeout(function() {
//         $('#loadingQuizz').fadeOut('100');
//     }, 3000);
//     setTimeout(function() {
//         $('#rules').fadeIn('100');
//     }, 3500);
    
// }


function switchFromRulesToCounter(){
    document.getElementById('rules').style.display = "none" ;
    document.getElementById('counter').style.display = "block" ;
}


function switchFromQuestionsToResult(){
    document.getElementById('questionsAnswers').style.display = "none" ;
    document.getElementById('loading_questions').style.display = "block" ;
    document.getElementById('loading').classList.add('loading') ;
    document.getElementById('submit').setAttribute("disabled", "")
    
    
    setTimeout(function() {
        $('#bar').fadeOut('100');
    }, 3000);

    $('#loading').fadeIn('100');

    setTimeout(function() {
        $('#loading').fadeOut('100');
        $('#questions').fadeOut('100');
    }, 3000);

    setTimeout(function() {
        $('#result').fadeIn('100');
    }, 3400);
}

timeLeft = 3;

function countdown() {
	timeLeft--;
	document.getElementById("secondes").innerHTML = String( timeLeft );
	if (timeLeft > 0) {
		setTimeout(countdown, 600);
	}

    else{
        document.getElementById('secondes').innerText = "Start!" ;
        document.getElementById('counter').style.display = "none" ;
        document.getElementById('questions').style.display = "block" ;
        document.getElementById('bar').style.display = "block" ;
    }

}

var timerId ;

function countDownQuestions(){
    clearInterval(timerId);
    timerId = setInterval(countDownQ, 1000);
    var elem = document.getElementById('timerQuestionsSecondes');
    elem.innerText = 15;
    elem.style.background = "#555" ;
    
    function countDownQ() {
        let currentQ = document.getElementById('currentQuestion') ;

        // if (elem.innerText <= 10){
        //     elem.innerHTML = "0" + elem.innerText ;
        // }
        
        if (elem.innerText <= 5)
        {
            elem.style.background = "red" ;
        }
        
        if (elem.innerText <= 0 && currentQ.innerText < quizzQuestions.length) {
            determineTheCorrectanswer()
            loadingQuestions();
            progressBar();
            allQuestions();
            elem.innerText = 30;
            elem.style.background = "#555" ;
        }

        else if(elem.innerText <= 0 && currentQ.innerText == quizzQuestions.length) {
            determineTheCorrectanswer();
            progressBar();
            switchFromQuestionsToResult();
            elem.innerText = 30;
            elem.style.background = "#555" ;
        }
        
        else
        {
            elem.innerText--;
        }
        
    } 
    
}


function loadingQuestions(){
    document.getElementById('questionsAnswers').style.display = "none" ;
    document.getElementById('loading_questions').style.display = "block" ;
    document.getElementById('loading').classList.add('loading') ;
    
    $('#loading').fadeIn('100');
    const timeOut = setTimeout(function() {
        $('#questionsAnswers').fadeIn('100');
    }, 1400);

    const timeOut2 = setTimeout(function() {
        $('#loading').fadeOut('100');
    }, 1000);
}


function changeProgress(currentValue,maxValue){
    const barLevel = document.querySelector('.barLevel');
    
    barLevel.style.width =`${(currentValue * 100) / maxValue}%`;
    
}


function finalScore(maxScore, length) {
    const barResultLevel = document.querySelector('.barResultLevel');
    
    barResultLevel.style.width =`${(maxScore * 100) / length}%`;
    barResultLevel.innerHTML   =`${Number((maxScore * 100) / length)}%`;

    console.log(barResultLevel.innerHTML);
    
}


questionC = 1 ;

function progressBar(){

    changeProgress(questionC, quizzQuestions.length) ;
    questionC++ ;
}


function emptyAnswer(){
    let answer1 = document.getElementById('1') ;
    let answer2 = document.getElementById('2') ;
    let answer3 = document.getElementById('3') ;
    let answer4 = document.getElementById('4') ;

    if (answer1.checked == false && answer2.checked == false && answer3.checked == false && answer4.checked == false){
        alert('Please choose an answer') ;
    }

    else{
        determineTheCorrectanswer();
        loadingQuestions();
        progressBar();
        countDownQuestions()
        allQuestions() ;
    }
}


function emptyLastAnswer(){
    let answer1 = document.getElementById('1') ;
    let answer2 = document.getElementById('2') ;
    let answer3 = document.getElementById('3') ;
    let answer4 = document.getElementById('4') ;

    if (answer1.checked == false && answer2.checked == false && answer3.checked == false && answer4.checked == false){
        alert('Please choose an answer') ;
    }

    else{
        stepperCompenantStep3();
        determineTheCorrectanswer();
        progressBar();
        switchFromQuestionsToResult()
    }
}


function allQuestions(){
    currnetQuestion++ ;
    document.getElementById('question').innerText = newQuestion[currnetQuestion]['question'];
    document.getElementById('a').innerText        = newQuestion[currnetQuestion]['choice1'] ;
    document.getElementById('b').innerText        = newQuestion[currnetQuestion]['choice2'] ;
    document.getElementById('c').innerText        = newQuestion[currnetQuestion]['choice3'] ;
    document.getElementById('d').innerText        = newQuestion[currnetQuestion]['choice4'] ;

    document.getElementById('currentQuestion').innerText = currnetQuestion + 1 ;

    
    if (currnetQuestion == quizzQuestions.length - 1){
        document.getElementById('nextQuestion').style.display = "none" ;
        document.getElementById('submit').style.display = "block" ;
    }

    deselectChosenQuestions() ;
    

        
}


function deselectChosenQuestions(){
    let answersSelected = document.querySelectorAll('.radio') ;

    answersSelected.forEach(answerSelected => {
        answerSelected.checked = false ;
    });
}

let score = 0 ;
let wrong = 0 ;
let currnetQ = -1 ;

function determineTheCorrectanswer(){
    var user = document.getElementById('nameOfContestant').innerText ;
    currnetQ++ ;
    let answer = [] ;
    let answersSelected = document.querySelectorAll('.radio') ;

    answersSelected.forEach(answerSelected => {
        if(answerSelected.checked ){
            answer.push(answerSelected.id) ;
        }

    }) ;

    if(answer) {
        if(answer.toString() == newQuestion[currnetQ]['answer'].toString()){
            score++ ;
            console.log(score);
        }

        else{
            wrong++ ;
        }

        if(score >= (quizzQuestions.length / 2)){
            finalScore(score, quizzQuestions.length) ;
            console.log(user);
            document.getElementById('barResult').style.backgroundColor = '#ff0000' ;
            document.getElementById('correctAnswers').innerText = 'Correct answers:' + " " + score ; 
            document.getElementById('wrongAnswers').innerText   = 'Wrong answers:' + " " + wrong ; 
            document.getElementById('congratulations').innerText = 'Congratulations' + " " + user + "! " + 'You have passed the quizz successfully' ;
        }
 
        else{
            finalScore(score, quizzQuestions.length) ;
            // var user = document.getElementById('breadcrumbs').innerText ;
            console.log(user);
            document.getElementById('barResult').style.backgroundColor = '#ff0000' ;
            document.getElementById('correctAnswers').innerText = 'Correct answers:' + " " + score ;
            document.getElementById('wrongAnswers').innerText   = 'Wrong answers:' + " " + wrong ; 
            document.getElementById('congratulations').innerText = 'Unfortunately' + " " + user + "! " + "You didn't pass the quizz successfully" ;
        }
    }
}


// function stepperCompenantStep1(){
//     document.getElementById('step1').classList.add('active') ;
//     document.getElementById('step1').innerHTML = `<i class="fa fa-check"></i>`;
    
// }


function stepperCompenantStep2(){
    document.getElementById('step2').classList.add('active') ;
    document.getElementById('line1').classList.add('active') ;
    document.getElementById('step2').innerHTML = `<i class="fa fa-check"></i>`;
    
}


function stepperCompenantStep3(){
    document.getElementById('step3').classList.add('active') ;
    document.getElementById('line2').classList.add('active') ;
    document.getElementById('step3').innerHTML = `<i class="fa fa-check"></i>`;
    
}


function replayQuizz(){
    window.location.reload() ;
}


function submitScore(){
    var score= $("#barResultLevel").text();
    $.post("../../../Classes/User.php",{
        submit:true,
        barResultLevel:score,
    },function(){
        // window.alert('Score send successfully');
    })
}

  





