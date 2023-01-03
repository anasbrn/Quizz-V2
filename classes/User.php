<?php
    include_once 'Database.php' ;

    session_start() ;

    class User{
        private $firstName;
        private $lastName ;
        private $email ;
        private $password ;

        public function __construct($firstName, $lastName, $email, $password)
        {
            $this->firstName = $firstName ;
            $this->lastName = $lastName ;
            $this->email = $email ;
            $this->password = $password ;
        }

        public function getFirstName(){
            return $this->firstName ;
        }

        public function setFirstName($firstName){
            $this->firstName = $firstName ;
        }



        public function getLastName(){
            return $this->lastName ;
        }

        public function setLastName($lastName){
            $this->lastName = $lastName ;
        }



        public function getEmail(){
            return $this->email ;
        }

        public function setEmail($email){
            $this->email = $email ;
        }


        
        public function getPassword(){
            return $this->password ;
        }

        public function setPassword($password){
            $this->password = $password ;
        }

        public static function signIn(){
            $email      = $_POST['email'] ;
            $password   = $_POST['password'] ;
            $ip         = getIPAddress();  
            $os         = getOperatingSystem() ;
            $browser    = getBrowser() ;
    
            $contestant = new User("", "", $email, $password) ;
    
            $email      = $contestant->getEmail() ;
            $password   = $contestant->getPassword() ;
    
            $connection = new Database ;
            $connection = $connection->connect() ;
            $queryUser      = "SELECT * FROM user WHERE email = '$email' AND password = '$password' " ;
            $stmt       = $connection->query($queryUser) ;
            $data       = $stmt->fetch() ;
            $resultUser     = $stmt->rowCount();

            $_SESSION['id'] = $data['userId'] ;
            $id         = $_SESSION['id'] ;
            $_SESSION['firstName'] = $data['firstName'] ;

            $queryAdmin      = "SELECT * FROM `admin` WHERE email = '$email' AND password = '$password' " ;
            $stmt       = $connection->query($queryAdmin) ;
            $data       = $stmt->fetch() ;
            $resultAdmin     = $stmt->rowCount();
            
            if ($resultUser > 0){
                $query      = "UPDATE user SET  ipAddress = '$ip', os = '$os', browser = '$browser' WHERE userId =  $id" ;
                $stmt       = $connection->query($query) ;
                
                header('location: ../starter/assets/quizz.php') ;
            }

            else if ($resultAdmin > 0){
                header('location: ../dashboard/dashboard.php') ;
            }
            
            else{
                echo 'Invalid account' ;
            }
        }

        // public static function messageOfResult(){
        //     $id = $_SESSION['id'] ;
        //     $connection = new Database ;
        //     $connection = $connection->connect() ;
        //     $query      = "SELECT * FROM user WHERE userId = $id " ;
        //     $stmt       = $connection->query($query) ;
        //     $data       = $stmt->fetch() ;

        //     $success = 'Congratulations '.$data['firstName'].'! You have passed the quizz successfully' ;
        //     $failed = 'unfortunately '.$data['firstName'].'! You have not passed the quizz ' ;

        //     if($data['score'] >= 50){
        //         return $success ;
        //     }

        //     else{
        //         return $failed;
        //     }
        // }
        

    }



    function signUp(){
        $firstName  = $_POST['firstName'] ;
        $lastName   = $_POST['lastName'] ;
        $email      = $_POST['email'] ;
        $password   = $_POST['password'] ;



        $contestant = new User($firstName, $lastName, $email, $password) ;
        $firstName  = $contestant->getFirstName() ;
        $lastName   = $contestant->getLastName() ;
        $email      = $contestant->getEmail() ;
        $password   = $contestant->getPassword() ;

        

        $connection = new Database ;
        $connection = $connection->connect() ;
        $query      = "INSERT INTO user (firstName, lastName, email, password, quizzId) VALUES ('$firstName', '$lastName', '$email', '$password', 1)" ;
        $stmt       = $connection->query($query) ;

        header('location: ../starter/assets/login/login.php') ;

    }

    function scoreOfContestant(){
        $score = $_POST['barResultLevel'] ;
        $id = $_SESSION['id'] ;
        
        $connection = new Database ;
        $connection = $connection->connect() ;
        $update      = "UPDATE user SET score = '$score' WHERE userId = $id " ;
        $stmt       = $connection->query($update) ;

        // $select      = "SELECT * FROM user WHERE userId = $id " ;
        // $stmt       = $connection->query($select) ;
        // $data       = $stmt->fetch() ;

        // $success = 'Congratulations '.$data['firstName'].'! You have passed the quizz successfully' ;
        // $failed = 'unfortunately '.$data['firstName'].'! You have not passed the quizz ' ;

        // if($data['score'] >= 50){
        //     return $success ;
        // }

        // else{
        //     return $failed;
        // }
}
    

    

    

    //////////////////////////
    function getBrowser(){

        $agent = $_SERVER['HTTP_USER_AGENT'];
        $name = 'NA';
        
        
        if (preg_match('/MSIE/i', $agent) && !preg_match('/Opera/i', $agent)) {
            $name = 'Internet Explorer';
        } elseif (preg_match('/Firefox/i', $agent)) {
            $name = 'Mozilla Firefox';
        } elseif (preg_match('/Chrome/i', $agent)) {
            $name = 'Google Chrome';
        } elseif (preg_match('/Safari/i', $agent)) {
            $name = 'Apple Safari';
        } elseif (preg_match('/Opera/i', $agent)) {
            $name = 'Opera';
        } elseif (preg_match('/Netscape/i', $agent)) {
            $name = 'Netscape';
        }

        return $name;
    }

    function getIPAddress() {  
        //whether ip is from the share internet  
         if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
            $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
        //whether ip is from the proxy  
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
        }  
    //whether ip is from the remote address  
        else{  
            $ip = $_SERVER['REMOTE_ADDR'];  
        }  
        return $ip;  
    }  

    function getOperatingSystem(){
        $hua = filter_input(INPUT_SERVER, 'HTTP_USER_AGENT');
        $os = 'I have no idea...';
    
        if(preg_match('/android/i', $hua)) {
            $os = 'Android';
        } elseif (preg_match('/linux/i', $hua)) {
            $os = 'Linux';
        } elseif (preg_match('/iphone/i', $hua)) {
            $os = 'iPhone';
        } elseif (preg_match('/macintosh|mac os x/i', $hua)) {
            $os = 'Mac';
        } elseif (preg_match('/windows|win32/i', $hua)) {
            $os = 'Windows';
        }
        return $os;
    }
    

    if(isset($_POST['register'])) signUp() ;
    if(isset($_POST['signIn'])) User::signIn() ;
    if(isset($_POST['submit']))  scoreOfContestant() ;
