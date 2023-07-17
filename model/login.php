<?php
    abstract class login
    {
        private $emailInput;
        private $passwordInput;

        public function __construct(array $request)
        {
            $this->requestInput = $request['input'];
            $this->emailInput = $request['input'];
        }


        /**
         * Logs the user out and returns a boolean
         * 
         * @param string $userId
         * @return bool
         */
        function userLogout($userId): bool
        {
            //check for sessions and update database
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


        /**
         * @return array
         * 
         */
        private function isValidPassword()
        {

        }


        /**
         * @return array
         * 
         */
        private function isValidEmail()
        {

        }






        /**
         * @return int
         */
        public function isMinLength($minChars): bool
        {
            $passwordLength = count($this->password);

            if($passwordLength >= $minChars)
                return true;
            return false;
        }


        /**
         * Check if the email is valid with right
         * Check if if email is not example at example.com
         * 
         * @return bool
         */
        public function containsAtSymbol(){}

        /**
         * Check if the user is using a valid email client
         * Checks for popular email clients
         * 
         * @return bool
         */
        public function isValidEmailClient(){}


        /**
         * Check if the input contains numbers [0-9]
         * 
         * @return bool
         */
        public function containsNumbers(){}


        /**
         * Check if the input contains special characters. Ex: ~!@#$%^&*()
         * 
         * @return bool
         */
        public function containsSpecialChars(){}
        
    }
?>