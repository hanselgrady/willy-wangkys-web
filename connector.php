<?php
    
    class Connector {
        private $server;
        private $username;
        private $password;
        public $connection;
        function __construct() {
            $this->server = 'localhost';
            $this->username = 'willywangky';
            $this->password = 'willywangky';
            $this->database = 'willywangky';
            if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
                echo "Mysqli doesnt loaded";
            } else {
                /* echo "Mysqli loaded"; */
            }
            $this->connection = new mysqli($this->server, $this->username, $this->password, $this->database);
            if ($this->connection->connect_error) {
                die("<script> alert('Connection failed: {$this->connection->connect_error}') </script>");
            }
        }
        
        function run($query) {
            if ($this->connection->query($query) == TRUE) {
                echo "<script> alert('Query success') </script>";
            } else {
                echo "<script> alert('Error: {$this->connection->error}') </script>";
            }
        }

        public function getAllData($query) {
            $result = $this->connection->query($query);
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
            return $rows;
        }

        public function close() {
            $this->connection->close();
        }
        
    }
    
?>
