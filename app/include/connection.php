<?php

class Db {

  protected static $connection;

  /**
   * @return bool false on failure / mysqli MySQLi object instance on success
   */
  public function connect() {

    if (!isset(self::$connection)) {
      $config = parse_ini_file("config.ini"); 
      self::$connection = new mysqli($config["host"], $config["username"], $config["password"], $config["database"]);
    }

    if (self::$connection === false) {
      print("<!-- Failed to connect to databse. -->\n");
      return false;
    }

    return self::$connection;
  }

  /**
   * @param $query The query string
   * @return mixed The result of the mysqli::query() function
   */
  public function query($query) {
    return $this->connect()->query($query);
  }

  /**
   * @param $query The query string
   * @return bool False on failure / array Database rows on success
   */
  public function select($query) {
    $rows = array();
    $result = $this->query($query);

    if ($result === false) {
      return false;
    }

    while ($row = $result->fetch_assoc()) {
      $rows[] = $row;
    }

    return $rows;
  }

  /**
   * @return string Database error message
   */
  public function error() {
    return $this->connect()->error;
  }

  /**
   * @param string $value The value to be quoted and escaped
   * @return string The quoted and escaped string
   */
  public function quote($value) {
    return "'" . $this->connect()->real_escape_string($value) . "'";
  }
}
