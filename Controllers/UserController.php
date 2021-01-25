<?php

namespace app\Controllers;

use app\Models\UserModel;

class UserController
{
    public function login($argms = [])
    {
        //do something
        if ($argms != []) {
            echo "404!";
            die();
        }
        $auth = new UserModel();
        if (isset($_POST["loginSubmit"])) {
            $user = $_POST["loginLogin"];
            $password = $_POST["passwordLogin"];
            if (empty($user) || empty($password)) {
                // echo "error!";
                echo "<script type='text/javascript'> 
                alert('hello');
                </script>
                ";
            } else {
                $userInfo = $auth->login($user, $password);

                if ($userInfo && password_verify($password, $userInfo['Compte_passwd'])) {
                    $_SESSION['user'] = $user;
                    $_SESSION['level'] = $userInfo['Compte_type'];
                    echo "
                    <script type=\"text/javascript\">
                    localStorage.clear();
                    window.location.replace('/');
                    </script>
                    ";
                    //header("Location: /");
                    //exit();
                } else {
                    echo "password is wrong!";
                }
                //
            }
        }
        $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . "users" . DIRECTORY_SEPARATOR . "login.php";
        include_once($file);
    }

    public function singin($argms = [])
    {
        //do something
        if ($argms != []) {
            echo "404!";
            die();
        }
        $auth = new UserModel();
        if (isset($_POST["signinSubmit"])) {
            $user = $_POST["loginLogin"];

            $password = $_POST["passwordLogin"];

            $email = $_POST["EmailLogin"];

            if (empty($user) || empty($password) || empty($email)) {
                // echo "error!";     
            } else {
                $userInfo = $auth->singin($user, $email, $password);
            }
        }
        $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . "users" . DIRECTORY_SEPARATOR . "singin.php";
        include_once($file);
    }
    public static function logout()
    {
        unset($_SESSION['user']);
        unset($_SESSION['level']);
        header("Location: /");
        exit();
    }
}
