<?php
    namespace munchy\model\login;
    use PhpParser\Node\Expr\BinaryOp\BooleanOr;

    class userLogin
    {

        private $userEmail;
        private $userPassword;

        public function __construct(array $userInputRequest)
        {
            $this->userEmail = $userInputRequest['email'];
            $this->userPassword = $userInputRequest['password'];
        }


        /**
         * Return true if the user is admin
         * Else false
         * 
         * @return bool
         */
        private function isAdminUser() : bool
        {
            //Need to query data based on email and get Id
            return false;
        }


        /**
         * Return false if the user is admin
         * Else true. This is for average users
         * 
         * @return bool
         */
        private function isNormalUser() : bool
        {
            //Need to query data based on email and get Id
            return false;
        }


        /**
         * Logs in the user and set cookies
         * 
         */
        public function loginUser() : array
        {
            //Code here
            return [];
        }


         /**
         * Logs the user out and destroys cookie
         * Returns boolean true if log out successful
         * 
         * @param string $userId
         * @return bool
         */
        function userLogout($userId) : bool
        {
            //check for sessions and update database
            return true;
        }


        /**
         * Takes session token that was generated and store it in database
         * Return false if the token has not been stored in the database
         * 
         */
        private function storeRememberMeToken()
        {
            //Use JWT token for session
        }
        
        
    }
?>