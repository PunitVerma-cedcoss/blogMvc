<?php

class Auth extends Controller
{
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }
    public function index($data = [])
    {
        // by default index of auth will be login
        session_start();
        if (isset($_SESSION["user"])) {
            header("location:/blogs");
        }
        // for login
        $error = "";
        if (isset($_POST["submit"]) && $_POST["email"] != '' && $_POST["password"] != '') {
            if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $email = strip_tags($_POST["email"]);
                $password = strip_tags($_POST["password"]);
                $users = $this->userModel->loginUser($email, $password);
                if ($users == true) {
                    //if creds are ok then do login and set session
                    $_SESSION = ["user" => $email];
                    header('location:/blogs');
                } else {
                    $data = ["error" => "incorrect username or password"];
                }
            }
        }
        $this->view('pages/login', $data);
    }
    public function register($data = [])
    {
        if (isset($_POST["submit"])) {
            if ($_POST["name"] != '' && $_POST["email"] != '' && $_POST["password"] != '' && $_POST["confirmPassword"] != '') {
                if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                    $name = strip_tags($_POST["name"]);
                    $email = strip_tags($_POST["email"]);
                    $password = strip_tags($_POST["password"]);
                    $password2 = strip_tags($_POST["confirmPassword"]);
                    if ($password == $password2) {
                        // $users = $this->userModel->checkUserExists($name, $email);
                        if ($this->userModel->checkUserExists($name, $email)) {
                            $users = $this->userModel->addUser($name, $email, $password);
                            if ($users == 1) {
                                header("location:/auth/login/success");
                            }
                        } else {
                            echo "username or email already exists";
                        }
                    }
                }
            }
        }
        $this->view('pages/register', $data);
    }
}
