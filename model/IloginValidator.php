<?php
    interface IloginValidator{
        /**
         * @return string
         */
        function getNameLength();


        /**
         * Check if the email is valid with right
         * Check if if email is not example at example.com
         * 
         * @return bool
         */
        function isValidEmail();
    }
?>