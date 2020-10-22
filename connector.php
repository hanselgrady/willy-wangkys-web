<?php
    
    class Connector {
        private $server;
        private $username;
        private $password;
        public $connection;
        function __construct() {
            $this->server = "willywangky";
            $this->username = "willywangky";
            $this->passoword = "willywangky";
            $this->connection = new mysqli($this->server, $this->username, $this->password);
            if ($this->connection->connect_error) {
                die("Connection failed: " . $this->connection->connect_error);
            }
            echo "Connected successfully";
        }
        function run($query) {
            if ($this->connection->query($query) === TRUE) {
                echo "Query success";
            } else {
                echo "Error: " . $query . "<br>" . $this->connection->error;
            }
        }

        function close() {
            $this->connection->close();
        }
        
    }
    
?>