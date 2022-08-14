<?php 
class User {
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    // this will register new users 
    public function register($data){
        // this is a prepared statement
        $this->db->query('INSERT INTO daisey_user (first_name,last_name,email,password,date_added) VALUES(:name, :username, :email , :password,  NOW())');

        // then we have to bind the values 
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['useremail']);
        $this->db->bind(':password', $data['password']);

        // then we execute the function
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function loginUser($email, $password){
        $this->db->query('SELECT * FROM daisey_user WHERE email = :email');
        // then we have to bind the values 
        $this->db->bind(':email', $email);
        // then will return a single row
        $row = $this->db->single();
        $harshedPassword = $row->password;
        if(password_verify($password, $harshedPassword)){
            return $row;
        }else{
            return false;
        }
    }

    public function findUserByEmail($email){
        // this is a prepared statement
        $this->db->query('SELECT * FROM daisey_users WHERE email = :email');

        // then we have to bind the values 
        $this->db->bind(':email', $email);

        // then we row count ifemail exist
        if($this->db->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }
}