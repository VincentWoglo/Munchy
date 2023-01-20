<?php
    namespace  munchy\router;

    class Loader
    {

        /**
         * Load the pages in the Views folder
         * @param string $FilePath
         */
        static function View($FIlePath): void
        {
            require_once(__DIR__.'/../view/'.$FIlePath.'.php');
        }
        

        /**
         * Instantiate a class in the Controller folder
         * And also call function from the controller class
         * 
         * @param string $ControlName
         * @param array The $Data param allow you to pass data from Controller to View
         */
        static function Controller($ControllerName, $Data = []): string
        {
            if(str_contains($ControllerName, "@")){
                extract($Data);
                $ControllerArray = explode("@", $ControllerName);

                require_once(__DIR__.'/../controller/'.$ControllerArray[0].'.php');
                $ClassWithNameSpace = '\munchy\controller\\'.$ControllerArray[0];

                $Controller = new $ClassWithNameSpace($Data);
                $Function = $ControllerArray[1];
                $Controller->$Function();
            }

            //handle if file exist
            return "Controller Does Not Exist";
        }
    }
?>