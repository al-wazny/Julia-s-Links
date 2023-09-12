<?php


class Database {
    /*
     * The properties are what we need to connect to the database
     */
    private $host = SERVERNAME;
    private $user = USERNAME;
    private $pass = PASSWORD;
    private $dbname = DB_NAME;

    // Database handler, we use it whenever we prepare SQL statements
    private $connection;
    private $stmt; // for the actual statement
    private $err; // whenever we have an error, we store it here

    public function __construct()
    {

        // Create MYSQLI instance
        try {
            $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        } catch (Exception $e) { // Catches Exception if it is thrown
            $this->err = $e->getMessage();
            echo $this->err;
        }

    }

    public function query($sql)
    {
        $this->stmt = $this->connection->query($sql);
    }

    public function prepare($sql)
    {
        $this->stmt = $this->connection->prepare($sql);
    }

    public function bind($param, $value)
    {
        $this->stmt->bind_param($param, $value);
    }
    
    public function exec() {
        $this->stmt->execute();
    }

    public function getResult() {
        return $this->stmt->get_result();
    }

    public function exist($select, $table, $col, $row)
    {
        $sql = "SELECT $select FROM $table WHERE $col = '$row'";

        $this->query($sql);

        return ($this->rowCount() > 0);

    }

    public function insert($sql)
    {
        $this->connection->query($sql);
    }

    public function getlastID()
    {
        return $this->connection->insert_id;
    }

    // Get result set as array of objects if more than one row
    public function resultSet()
    {
        return $this->stmt->fetch_all(MYSQLI_ASSOC);
    }

    // Get single record as object when editing a Task
    public function single()
    {
        return $this->stmt->fetch_object();
    }

    // Get row count
    public function rowCount()
    {
        return $this->stmt->num_rows;
    }

    // Close connection to database
    public function close()
    {
        $this->connection->close();
    }
}