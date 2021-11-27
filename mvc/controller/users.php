<?php

class users extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
        $this->login();
    }

    // Login Form
    public function login()
    {
        if (!empty($_SESSION['user_login'])){
            header('location: '.URL.'profile');
            exit;
        }
        $this->View('users/login');
    }

    // operation login
    public function opr_login()
    {
        if (!empty($_POST['username']) && !empty($_POST['password'])){
            $userName =  $_POST['username'];
            $password = md5($_POST['password'].'cpass');
            $result = $this->modelDb->login($userName , $password);
            if ($result['user_id'] != null)
            {
                $_SESSION['user_login'] = $result['user_id'];
                echo 'Ok';
            } else{
                echo 'No';
            }
        } else{
            if (empty($_POST['username']) && empty($_POST['password'])){
                echo 'Empty_All';
            } elseif(empty($_POST['username'])){
                echo 'Empty_username';
            } elseif(empty($_POST['password'])){
                echo 'Empty_password';
            }
        }
    }

    // Register Form
    public function register()
    {
        if (!empty($_SESSION['user_login'])){
            header('location: '.URL.'profile');
            exit;
        }
        $this->View('users/register');
    }

    // operation register
    public function opr_register()
    {
        if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['re_password'])){
            if ($_POST['password'] == $_POST['re_password']){
                $data = [
                    'first_name' => trim($_POST['first_name']),
                    'last_name' => trim($_POST['last_name']),
                    'email' => trim($_POST['email']),
                    'username' => trim($_POST['username']),
                    'password' => md5(trim($_POST['password']).'cpass'),
                    'active' => 1
                ];
                if (strlen($_POST['password']) >= 8 && strlen($_POST['re_password']) >= 8){
                    if (filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                        if ($this->modelDb->check_available_user($data['username'],$data['email']) != true){
                            $this->modelDb->register($data);
                            echo 'Ok';
                        } else{
                            echo 'حساب کاربری از قبل وجود دارد!';
                        }
                    } else{
                        echo 'لطفا ایمیل معتبر وارد نمایید!';
                    }
                } else{
                    echo 'رمز عبور باید حداقل 8 کاراکتر باشد!';
                }
            } else{
                echo 'پسورد و تکرار پسورد نامطابق می باشد!';
            }
        } else{
            echo 'لطفا اطلاعات خواسته شده را کامل وارد نمایید!';
        }
    }

    // logout
    public function logout()
    {
        if (!empty($_SESSION['user_login'])){
            unset($_SESSION['user_login']);
            header('location: '.URL.'users/login');
        } else{
            header('location: '.URL.'profile');
        }
    }

    // Forgot password
    public function forgotPassword()
    {
        if (!empty($_SESSION['user_login'])){
            header('location: '.URL.'profile');
            exit;
        }
        $this->View('users/forgot_password');
    }

    // operation Forgot password
    public function opr_forgotPassword()
    {
        
    }
}