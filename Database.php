<?php
    class Database {
        private $host = "localhost";
        private $user = "willywangky";
        private $pass = "willywangky";
        private $name = "willywangky";

        private $connection;
        private $statement;

        public function __construct() {
            $dsn = "mysql:host" . $this->host . ";dbname=" . $this->name;
            try {
                $this->connection = new PDO($dsn, $this->user, $this->pass);
            }
            catch (PDOException $err) {
                die($err->getMessage());
            }
        }

        public function query($query) {
            $this->statement = $this->connection->prepare($query);
        }

        public function bind($value, $param, $type = null) {
            if (is_null($type)) {
                if ($is_int($value)) {
                    $type = PDO::PARAM_INT;
                }
                elseif (is_null($type)) {
                    $type = PDO::PARAM_NULL;
                }
                elseif (is_bool($typr)) {
                    $type = PDO::PARAM_BOOL;
                }
                else {
                    $type = PDO::PARAM_STR;
                }
            }
            $this->statement->bindValue($param, $value, $type);
        }

        public function execute() {
            $this->statement->execute();
        }

        public function result() {
            $this->statement->execute();
            return $this->statement->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>