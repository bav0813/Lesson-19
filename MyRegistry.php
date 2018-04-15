<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 14.04.18
     * Time: 11:27
     */

    namespace Registry;


    class MyRegistry
    {

        private $data = [];



        public function set($name, $val)

        {

            if (! isset($this->data[$name])) {

                $this->data[$name] = $val;

            } else {

                echo 'Error: can`t set new value for ' . $name;

            }

        }



        public function get($name)

        {

            if (isset($this->data[$name])) {

                return $this->data[$name];

            } else {

                echo 'Error: property ' . $name . ' does not exists!';

            }

        }

    }