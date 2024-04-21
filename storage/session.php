<?php
    namespace munchy\storage;

    use munchy\validation\userValidation;
    use  munchy\database\databaseConnection;

    class session 
    {
        public function __construct()
        {
            // session_start();

        }


        /**
         * 
         */
        public function generateLoginSession(string $userEmail) : array
        {
            $userInfo = [
                "userEmail" => $userEmail,
                "Created on" => date("H:i:s d.m.y")
            ];

            $_SESSION['userLogin'] = $userInfo;

            return $_SESSION['userLogin'];
            // return $_SESSION['userLogin'];
        }

        public function is_session_started() : bool
        {
            return false;
        }
    }
?>