<?php
    namespace munchy\controller;

    class indexController extends controller
    {
        //instantiate userLogin in model


        
        function dump(){
            self::view('index');
        }
    }
?>