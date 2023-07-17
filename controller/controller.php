<?php
    namespace munchy\controller;
    
    abstract class controller
    {
        /**
         * This method sends data from controller to the view
         * May move this to the Controller abstract class in the near future
         * 
         * @param string $ViewName
         * @param array The $Data param allow you to pass data from Controller to View
         */
        static function sendToView($viewName, $data = []): void
        {
            extract($data);
            require_once(__DIR__.'/../view/'.$viewName.'.php');
        }


        /**
         * Redirects user to given path
         * 
         * @param string $PathName
         */
        static function redirect($pathName): void
        {
            header('Location'.$_SERVER['SERVER_NAME'].'/'.$pathName);
        }


        public static function back()
        {
            header('Location:'.$_SERVER['HTTP_REFERER']);
        }
    }
?>