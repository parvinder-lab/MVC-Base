<?php

class Main extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    
    function Index () {

        $this->view("template/header");
        $this->view("main/index");
        $this->view("template/footer");
        
    }

    function Other () {

        $this->view("template/header");
        $this->view("main/other");
        echo("<br><br><br>hello there");
        $this->view("template/footer");
        
    }
    function name () {

        $this->view("template/header");
        $this->view("main/index");
        $this->view("template/footer");
        
    }

    function phonenumber () {

        $this->view("template/header");
        $this->view("main/other");
        echo("<br><br><br>hello there");
        $this->view("template/footer");
        
    }
}

?>