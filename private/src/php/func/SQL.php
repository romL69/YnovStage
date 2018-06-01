<?php

class SQL
{
    private $PDO = null;

    function __construct()
    {
        $dsn = 'mysql:dbname=ynovstage;host=localhost';
        $user = 'root';
        $password = '';
        $this->PDO = new PDO($dsn, $user, $password);
        

    }

    function queryGetData(string $sql)
    {

            $Statement = $this->PDO->prepare($sql);

            $Statement->execute();

            return $Statement->fetchAll();


    }

    function queryCreateData(string $sql)
    {

            $Statement = $this->PDO->prepare($sql);

            return $Statement->execute();

    }

}

?>
