<?php

class Test extends Controller {

    function __construct() {
        parent::__construct();
    }

    function Index () {
        $this->view("template/header");
        $is_auth = isset($_SESSION["firstname"]);

        if ($is_auth) {
            $this->view("test/auth");
        }else {
            $this->view("test/noauth");  
        }
       // $this->view("test/auth");
        $this->view("template/footer");
    }
}
    
    function login(){
        echo("login");
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $post_csrf = htmlentities($_POST["csrf"]);
            $cook_csrf = htmlentities($_COOKIE["csrf"]);
            $csrf = $_SESSION["csrf"];

            if ($csrf == $post_csrf && $csrf == $cook_csrf) {

            $this->model("UserModel");
            $cl_name = htmlentities($_POST["username"]);
            $cl_pass = htmlentities($_POST["password"]);

            $auth = $this->UserModel->authenticateUser($cl_name, $cl_pass);
         if ($auth) {
         
             
             header("location: /test/");
             
         } else {
             echo("Not Authenticated");
         }
        }
         else {
            $csrf = htmlentities(random_int(10000, 100000000));
          //   echo("$csrf");
             $_SESSION['csrf'] = $csrf;
             setcookie("csrf" == $csrf);
             $_COOKIE['csrf'] = $csrf;
             $this->view("test/login", array("csrf" => $csrf));
         }  

        }
        
    
    function Logout(){
        session_unset();
        session_destroy();
        $_SESSION = Array();
        header("location: /test/");
    }
}  



?>