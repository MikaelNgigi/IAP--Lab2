<?php

include_once 'account.php';
class Users implements Account{
    private $firstname;
    private $lastname;
    private $username;
    private $email;
    private $city;
    private $profile;
    private $password;
    private $newPassword;
    private $errors = array();

    public function __construct()
    {
    }
    //Getters and Setters
    public function setFirstName($fn){
        $this->firstname = $fn;
    }
    public function getFirstName(){
        return $this->firstname;
    }
    public function setLastName($ln){
        $this->lastname = $ln;
    }
    public function getLastName(){
        return $this->lastname;
    }
    public function setUsername($un){
        $this->username = $un;
    }
    public function getUsername(){
        return $this->username;
    }
    public function setEmail($em){
        $this->email = $em;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setCity($ct){
        $this->city = $ct;
    }
    public function getCity(){
        return $this->city;
    }
    public function setProfile($pr){
        $this->profile = $pr;
    }
    public function getProfile(){
        return $this->profile;
    }
    public function setPassword($pass){
        $this->password = $pass;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setNewPassword($newpass){
        $this->newPassword = $newpass;
    }
    public function getNewPassword(){
        return $this->newPassword;
    }

    public function register($pdo)
    {
        // TODO: Implement register() method.

        //Hash password
        $encpass = password_hash($this->password, PASSWORD_BCRYPT);
        //Prepare statement
        try{
            //prepare query
            $stm = $pdo->prepare("INSERT INTO users (firstname, lastname, username, email, city, profile_pic, password) values (?,?,?,?,?,?,?)");
            $stm->execute([$this->getFirstName(),$this->getLastName(),$this->getUsername(),$this->getEmail(), $this->getCity(), $this->profile, $encpass]);
            return 'Registration is successful!';
        } catch (PDOException $ex){
            return $ex->getMessage();
        }
    }

    public function login($pdo)
    {
        // TODO: Implement login() method.
        try{
            //prepare a statement
            //Check for email in DB
            $stm = $pdo->prepare("SELECT * FROM users WHERE email = ?");
            $stm->execute([$this->email]);
            $row = $stm->fetch();
            if ($row == null){
                return 'Account does not exist';
            } else{
                if(password_verify($this->password, $row['password'])){
                    return 'Login successful!';
                } else
                    die('Incorrect email address or password');
            }
        } catch (PDOException $ex){
            return $ex->getMessage();
        }
    }

    public function changePassword($pdo)
    {
        // TODO: Implement changePassword() method.
        $stm = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stm->execute([$this->email]);
        $pass = $stm->fetch();
        var_dump($pass['email']);
        var_dump($pass['password']);
        var_dump($this->password);
        var_dump($this->getNewPassword());

        if($pass == null){
            return 'Account cannot be found';
        } else {
            try{
                $note = [
                    'email'=>$this->email,
                    'newpassword'=>$this->getNewPassword()
                ];
                $stm=$pdo->prepare("UPDATE users SET password=:newpassword WHERE email=:email");
                $stm->execute($note);
                $result=$stm->fetch();

                if($result){
                    $reset=$pdo->prepare("SELECT * FROM users WHERE password=?");
                    $reset->execute([$this->getNewPassword()]);
                    $final=$reset->fetch();
                    if($final){
                        return 'Password has been reset!';
                    }
                }
            } catch (PDOException $ex){
                return $ex->getMessage();
            }
        }
    }

    public function logout($pdo)
    {
        // TODO: Implement logout() method.
        
    }
}
