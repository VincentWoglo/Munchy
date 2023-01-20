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
        static function sendToView($ViewName, $Data = []): void
        {
            extract($Data);
            require_once(__DIR__.'/../view/'.$ViewName.'.php');
        }


        /**
         * @param string @PathName
         */
        static function redirect($PathName): void
        {
            header('Location'.$_SERVER['SERVER_NAME'].'/'.$PathName);
        }


        public static function back()
        {
            header('Location:'.$_SERVER['HTTP_REFERER']);
        }
    }
?>