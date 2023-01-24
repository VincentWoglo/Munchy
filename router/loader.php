<?php
    namespace  munchy\router;

    class Loader
    {

        /**
         * Load the pages in the Views folder
         * 
         * @param string $FilePath
         */
        public static function View($FIlePath): void
        {
            require_once(__DIR__.'/../view/'.$FIlePath.'.php');
        }

        
        /**
         * Checks if the file being loaded exist and returns false if not
         * 
         * @param string $directory
         * @param string $fileName
         */
        private static function fileExist($directory, $fileName): bool
        {
            if(file_exists(__DIR__.'\\/..\\/'.$directory.'/'.$fileName.'.php'))
                return true;
            return false;
        }


        /**
         * @param string $controllerName
         * @param string $function
         * @param array $data
         */
        private static function instantiateClass($controllerName, $function, $data): void
        {
            $classWithNameSpace = '\munchy\controller\\'.$controllerName;
            $controller = new $classWithNameSpace($data);
            $controller->$function();
        }


        /**
         * Instantiate a class in the Controller folder
         * And also call function from the controller class
         * 
         * @param string $controlName
         * @param array The $data param allow you to pass data from Controller to View
         */
        public static function controller($controllerName, $data = []): void
        {
            $controllerArray = explode("@", $controllerName);
            
            //handle if file exist
            if(self::fileExist('controller', $controllerArray[0]) == false)
                echo "Controller Does Not Exist"; //Show 404 view

            if(str_contains($controllerName, "@")){
                extract($data);

                require_once(__DIR__.'/../controller/'.$controllerArray[0].'.php');

                self::instantiateClass($controllerArray[0], $controllerArray[1], $data);
            }
        }
    }
?>