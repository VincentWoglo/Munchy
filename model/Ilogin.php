<?php
    interface Ilogin
    {
        /**
         * Checks cookie for a session
         * If the user wants to be remembered in the session, return true
         * 
         * @return bool
         */
        public function rememberMe();

        public function isAdmin(); //Boolean
    }
?>