<?php
    namespace munchy\model\register;

    use munchy\validation\userValidation;
    use  munchy\database\databaseConnection;

    class register 
    {
        protected string $userName;
        protected string $email;
        protected string $password;
        protected string $rePassword;

        /**
         * 
         */
        public function __construct(string $userName, string $email, string $password, string $rePassword)
        {
            $this->$userName = $userName;
            $this->$email = $email;
            $this->$password = $password;
            $this->$rePassword = $rePassword;
        }


        public function main()
        {
            $databaseConnection = new databaseConnection();
            $databaseConnection->connectDatabase();
        }

    }

?>