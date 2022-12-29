<?php
    include 'Database.php' ;

    class User{
        private $firstName = "anas";
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
        $query      = "INSERT INTO user (firstName, lastName, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')" ;
        $stmt       = $connection->query($query) ;

        header('location: ../starter/assets/user_space/signIn.php') ;

    }

    function signIn(){
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
        $query      = "SELECT * FROM user WHERE email = '$email' AND password = '$password' " ;
        $stmt       = $connection->query($query) ;
        $data       = $stmt->fetch() ;
        $result     = $stmt->rowCount();

        if ($result > 0){
            $query      = "UPDATE user SET  ipAddress = '$ip', os = '$os', browser = '$browser' " ;
            $stmt       = $connection->query($query) ;
            header('location: ../index.php') ;
        }

        else{
            echo 'Invalid account' ;
        }
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
    if(isset($_POST['signIn'])) signIn() ;