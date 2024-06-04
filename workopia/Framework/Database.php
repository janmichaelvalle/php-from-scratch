<?php
namespace Framework;

use PDO;

/*
The Database class provides a simple way to establish a connection to a MySQL database using PDO. The connection details are passed to the constructor in an associative array ($config). If the connection is successful, a PDO instance is stored in the $conn property, and a success message is printed. If the connection fails, an exception is thrown with an appropriate error message. 
 */
class Database {
  public $conn;

  /**
   * Constructor for DB class
   * @param array $config
   * 
   */
  public function __construct($config)
  {
    $dsn = "mysql:host{$config['host']};port={$config['port']};dbname={$config['dbname']}";

    $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ];
    try {
      $this->conn = new PDO($dsn, $config['username'], $config['password'], $options);

      echo "DB connected" . "<br>";
    } catch (PDOException $e) {
      throw new Exception("Database connection failed: {$e->getMessage()}");
    }
  }
  /**
   * Query the database
   * 
   * @param string $query
   * @return PDOStatement
   * @throws PDOException
   */

   public function query($query, $params = []) {
    try {
      $sth = $this->conn->prepare($query);

      // Bind names params
      foreach($params as $param => $value) {
        $sth->bindValue(':' . $param, $value);
      }

      $sth->execute();
      return $sth;
    } catch (PDOException $e) {
      throw new Exception("Query failed to execute: {$e->getMessage()}");
    }
   }

}