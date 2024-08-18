<?php
// Bad example: High-level class depends on low-level class
class MySQLConnection
{
    public function connect()
    {
        // Connect to MySQL database
    }
}

class User
{
    private $dbConnection;

    public function __construct(MySQLConnection $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function saveUser($data)
    {
        $this->dbConnection->connect();
        // Save user to database
    }
}

// Good example: Both classes depend on an abstraction
interface DBConnectionInterface
{
    public function connect();
}

class MySQLConnection2 implements DBConnectionInterface
{
    public function connect()
    {
        // Connect to MySQL database
    }
}

class PostgreSQLConnection implements DBConnectionInterface
{
    public function connect()
    {
        // Connect to PostgreSQL database
    }
}

class User2
{
    private $dbConnection;

    public function __construct(DBConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function saveUser($data)
    {
        $this->dbConnection->connect();
        // Save user to database
    }
}
