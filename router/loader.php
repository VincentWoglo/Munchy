<?php
    namespace  Munchy\router;

    class loader{
        public static function fileExist(string $path)
        {
            $isValid = false; //set to bool

            if(file_exists(__DIR__.'/../view/'.$path.'.php'))
                return $isValid = true;
            else
                return self::view('404');
        }

        public static function view(string $path, array $data = [] )
        {
            if( self::fileExist($path) )
            {
                extract($data);
                require_once(__DIR__.'/../view/'.$path.'.php');
            }
        }
    }
?>