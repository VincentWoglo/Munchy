<?php
    namespace munchy\controller;

    class dashboardHomeController extends controller
    {
        public function home(){
            self::view('dashboard');
        }
    }
?>