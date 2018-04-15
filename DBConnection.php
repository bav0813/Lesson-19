<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 14.04.18
     * Time: 11:29
     */

    namespace DBC;


    class DBConnection


    {

        private static $instance = null;

        private static $host, $user, $password, $db_name,$connection;
        public static $cnt_instance=0;




        private function __construct()

        {



            self::$connection = new \mysqli(self::$host, self::$user, self::$password, self::$db_name);
            self::$cnt_instance++;


            if( !self::$connection ) {

                echo "Could not connect to DB";
            }
            else
                echo "connected!!!";



        }



        public static function getInstance($host, $user, $password, $db_name)

        {

            self::$host=$host;

            self::$user=$user;

            self::$password=$password;

            self::$db_name=$db_name;





            if (is_null(self::$instance)) {

                self::$instance = new self();

            }



            return self::$instance;

        }



        private function __clone()

        {

        }

        private function __wakeup()

        {
        }

    }




