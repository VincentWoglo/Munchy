<?php
    namespace munchy\controller;

    class loginController extends controller
    {
        function dump(){
            self::SendToView('login');
        }
    }
?>