<?php
    /**
     * Created by PhpStorm.
     * User: andrey
     * Date: 11.04.18
     * Time: 23:43
     */


    require 'DBConnection.php';
    require 'MyRegistry.php';

    use \DBC\DBConnection as DBconn;
    use \Registry\MyRegistry as Reg;


    $db_params = new Reg();


        $db_params->set('db_name', 'articles');

        $db_params->set('host', '127.0.0.1');

        $db_params->set('user', 'root');

        $db_params->set('password', '1');



        $db_name=$db_params->get('db_name');

        $host=$db_params->get('host');

$user=$db_params->get('user');

$password=$db_params->get('password');




    $db_conn = DBConn::getInstance($host, $user, $password, $db_name);
var_dump($db_conn,1);
echo "<br>";
var_dump($db_conn::$cnt_instance);

$db_conn1 = DBConn::getInstance('1.1.1.1', 'andrey', '1', $db_name);
var_dump($db_conn1,1);
echo "<br>";
var_dump($db_conn::$cnt_instance);


//}