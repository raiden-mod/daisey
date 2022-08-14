<?php
class Users extends Controller{
    public function __construct(){
        $this->userModel = $this->model('User');
    }
    
    public function index(){
        $data = [  
            'title' => 'Home page',
            'Description' => 'this is a page of product'
        ];
        $this->view('auth/index', $data);
    }
    public function register(){
        $data = [
            'title' => 'Sign Up | Daisy Skincare - Routine',
            'keywords' => 'sign up to skin care products and routine (Exfoliating Serum,Face eye mask,Body Moisturizer,Black Soap,Body Serum Lotion,Eye mask)',
            'description' => 'Sign up to daizey online ecommerce store for sales skin care products and routine . Exfoliating Serum, Face eye mask, Body Moisturizer, Black Soap,  Body Serum Lotion, Eye mask',
            'name' => '',
            'username' => '',
            'useremail' => '',
            'password' => '',
            'nameError' => '',
            'usernameError' => '',
            'useremailError' => '',
            'passwordError' => ''
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // sanitize post data  
            $_POST =  filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);
            $data = [
                'name' => trim($_POST['name']),
                'username' => trim($_POST['username']),
                'useremail' => trim($_POST['useremail']),
                'password' => trim($_POST['password']),
                'nameError' => '',
                'usernameError' => '',
                'useremailError' => '',
                'passwordError' => ''
            ];
            // this will validate name on letters and numbers 
            $nameValidation = "/^[a-zA-Z]*$/";
            $passwordValidation = '/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/';

            if(empty($data['name'])){
                $data['nameError'] = 'ls enter your First Name';
            }elseif(!preg_match($nameValidation, $data['name'])){
                $data['nameError'] = 'First name can only contain letters';
            }

            // this is for the usename
            if(empty($data['username'])){
                $data['usernameError'] = "Pls enter your Last Name";
            }elseif(!preg_match($nameValidation, $data['username'])){
                $data['usernameError'] = "Last name can only contain letters";
            }

            // validating the email
            if(empty($data['useremail'])){
                $data['useremailError'] = "Pls enter your Email";
            }elseif(!filter_var($data['useremail'], FILTER_VALIDATE_EMAIL)){
                $data['useremailError'] = "Pls enter a valid Email";
            }else{
                // this will check if the email exist in the database
                if($this->userModel->findUserByEmail($data['useremail'])){
                    $data['useremailError'] = "Email is taken";
                }
            }
            // this will validate  the password
            if(empty($data['password'])){
                $data['passwordError'] = "Pls enter your Password";
            }elseif(!preg_match($passwordValidation, $data['password'])){
                $data['passwordError'] = "Password must contain 8 Characters & one numeric values.";
            }

            // make sure  errors are empty
            if(empty($data['nameError']) && empty($data['usernameError']) && empty($data['useremailError']) && empty($data['passwordError'])){
                // hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                // register user from module function
                if($this->userModel->register($data)){
                    // redirect to login page
                    header("location:login");
                }else{
                    die("something went wrong");
                }
            }
        }
        // this will load the view
        $this->view('auth/users/register', $data);
    }
    
    // this is he sign in page 
    public function login(){
        $data = [
            'title' => 'Sign In | Daisy Skincare - Routine',
            'keywords' => 'sign in to skin care products and routine (Exfoliating Serum,Face eye mask,Body Moisturizer,Black Soap,Body Serum Lotion,Eye mask)',
            'description' => 'Sign in to daizey online ecommerce store for sales skin care products and routine . Exfoliating Serum, Face eye mask, Body Moisturizer, Black Soap,  Body Serum Lotion, Eye mask',
            'useremail' => '',
            'password'  => '',
            'useremailError' => '',
            'passwordError' => ''
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // sanitize post data  
            $_POST =  filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);
            $data = [
                'title' => 'Sign In | Daisy Skincare - Routine',
                'keywords' => 'sign in to skin care products and routine (Exfoliating Serum,Face eye mask,Body Moisturizer,Black Soap,Body Serum Lotion,Eye mask)',
                'description' => 'Sign in to daizey online ecommerce store for sales skin care products and routine . Exfoliating Serum, Face eye mask, Body Moisturizer, Black Soap,  Body Serum Lotion, Eye mask',
                'useremail' => trim($_POST['useremail']),
                'password' => trim($_POST['password']),
                'useremailError' => '',
                'passwordError' => ''
            ];
            if(empty($data['useremail'])){
                $data['useremailError'] = "Pls enter your Email";
            }elseif(!filter_var($data['useremail'], FILTER_VALIDATE_EMAIL)){
                $data['useremailError'] = "Pls enter a valid Email";
            }
            if(empty($data['useremailError']) && empty($data['passwordError'])){
                $loggedInUser =  $this->userModel->loginUser($data['useremail'], $data['password']);
                if($loggedInUser){
                    $this->createUserSession($loggedInUser);
                }else{
                    $data['useremailError'] = "Username or password is incorrect.";
                    $data['passwordError'] = "Password or username is incorrect.";
                    // load the view
                    $this->view('auth/users/login', $data);
                }
            }
        }else{
            $data = [
                'title' => 'Sign In | Daisy Skincare - Routine',
                'keywords' => 'sign in to skin care products and routine (Exfoliating Serum,Face eye mask,Body Moisturizer,Black Soap,Body Serum Lotion,Eye mask)',
                'description' => 'Sign in to daizey online ecommerce store for sales skin care products and routine . Exfoliating Serum, Face eye mask, Body Moisturizer, Black Soap,  Body Serum Lotion, Eye mask',
                'useremail' => '',
                'password' => '',
                'useremailError' => '',
                'passwordError' => ''
            ];
        }
        $this->view('auth/users/login', $data);
    }
    // this will set and start session
    public function createUserSession($user){
        $_SESSION['daisy_user'] = $user->id;
        header("location:../index.php");
    }
    // public function passwordUpdate(){
    //     $data = [
    //         'title' => 'Login Page',
    //         'usernameError' => '',
    //         'passswordError' => ''
    //     ];
    //     $this->view('users/passwordupdate', $data);
    // }
    // public function forgetPassword(){
    //     $data = [
    //         'title' => 'Login Page',
    //         'usernameError' => '',
    //         'passswordError' => ''
    //     ];
    //     $this->view('users/forgetpassword', $data);
    // }
}