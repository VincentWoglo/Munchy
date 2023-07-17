<?php
    namespace munchy\validation\validation;

    class validation{
        /**
         * @param int $minChars
         * @return bool
         */
        public function isMinLength(int $minChars){}


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