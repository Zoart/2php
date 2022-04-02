<?php

class Database {
  private $servername, $username, $password, $dbname;

  function __construct($servername, $username, $password, $dbname, 
  $autoconnect = true) {
    $this->servername = $servername;
    $this->username = $username;
    $this->password = $password;
    $this->dbname = $dbname;

    if ($autoconnect) $this->open();
  }

  function open() {
    $this->connection = new mysqli($this->servername, $this->username,
    $this->password, $this->dbname);
  }

  function close() {
    $this->connection->close();
  }

  function query($query) {
    return $this->connection->query($query);
  }

  function escape($string) {
    return $this->connection->escape_string($string);
  }
}