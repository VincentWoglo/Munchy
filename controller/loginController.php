<?php
    namespace munchy\controller;

    class loginController extends controller
    {
        function dump(){
            echo "hello world";
            self::SendToView('login');
            var_dump($_REQUEST);
        }
    }
?>