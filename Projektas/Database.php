<?php

require_once __DIR__ . '/DatabaseExeption.php';

class Database
{
    private $host;
    private $username;
    private $password;
    private $database;
    private $port;
    private $connection;

    public function __construct($host, $username, $password, $database,$port)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        $this->port = $port;
    }

    public function connect()
    {
        $this->connection = mysqli_connect($this->host, $this->username, $this->password,$this->database,$this->port);
        if (!$this->connection) {
            throw new DatabaseException(mysqli_connect_error());
        }

        mysqli_select_db($this->connection, $this->database);
    }

    public function disconnect()
    {
        mysqli_close($this->connection);
    }

    public function execute($query)
    {
        if (!$this->connection) {
            throw new DatabaseException('Connect to database first.');
        }

        $res = mysqli_query($this->connection, $query);

        if (!$res) {
            throw new DatabaseException(mysqli_error($this->connection));
        }

        if (is_bool($res)) {
            return $res;
        }

        $result = [];

        while($row = mysqli_fetch_assoc($res)) {
            $result[] = $row;
        }

        return $result;
    }
}