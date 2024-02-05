<?php
    namespace munchy\validation;

    abstract class validation {
        public function __construct() {
            
        }


        /**
         * check if the string of the user is at least the minimum character
         * Returns a false if the length is not min length
         * 
         * @return bool
         */
        public function isMinLength($userPassword, $minChars): bool
        {
            return count($userPassword) >= $minChars;
        }


        /**
         * Check if the email is valid with right
         * Check if if email is not example at example.com
         * 
         * @return bool
         */
        public function containsAtSymbol($userInput) : bool
        {
            return str_contains($userInput, '@');
        }


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
        public function containsInteger($userInput) : bool
        {
            return preg_match('/\d/', $userInput) === 1;
        }


        /**
         * Check if the input contains special characters. Ex: ~!@#$%^&*()
         * 
         * @return bool
         */
        public function containsSpecialChars(){}
    }
?>