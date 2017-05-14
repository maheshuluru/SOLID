<?php

// DIP : Dipendency Inversion Principle
// Depend on abstractions, not on concertions
// High level module depends upon abstraction not concrete class

interface ConnectionInterface
{
    public function connect();
}

class MysqlConnection implements ConnectionInterface
{
    public function connect()
    {
        // connection logic goes here
    }
}

class PasswordReminder
{
    protected $connection;

    function __construct(ConnectionInterface $connection)
    {
        $this->connection = $connection;
    }
}
// Now its completely decoupled.
