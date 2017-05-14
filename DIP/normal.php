<?php

// DIP : Dipendency Inversion Principle
// Depend on abstractions, not on concertions
// High level module depends upon abstraction not concrete class

class PasswordReminder
{
    protected $connection;

    function __construct(MySqlConnection $connection)
    {
        $this->connection = $connection;
    }
}
// It is tightly coupled with MySqlConnection
