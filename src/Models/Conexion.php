<?php
    define("host", "localhost");
    define("user", "root");
    define("pass", "");
    define("nameDB", "sistemas");
    define("port", 3306);

    class Conexion
    {
        private $db;

        public function connect()
        {
            try {
                $this->db = new mysqli(host, user, pass, nameDB, port);
            } catch (Exception $err) {
                die($err);
            }
        }

        public function getDB()
        {
            return $this->db;
        }

        public function setDB($mysql)
        {
            $this->db = $mysql;
        }
    }
?>