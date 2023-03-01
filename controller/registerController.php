<?php
    namespace munchy\controller;

    class registerController extends controller
    {
        //instantiate userRegister in model


        public function register(){
            self::SendToView('register');
        }
    }
?>