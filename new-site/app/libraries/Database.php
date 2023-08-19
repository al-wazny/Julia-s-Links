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

    /*
     * This is the bind the values
     * Binds a value to a corresponding named or question mark placeholder in the SQL statement that was used to prepare the statement.
     *
     */
    public function bind($param, $value, $type = null)
    {
        if(is_null($type)){
            switch(true){
                case is_int($value): // if the value is an integer, set the $type to int
                    $type = SQLITE3_INTEGER;
                    break;
                case is_bool($value): // if the value is an integer, set the $type to bool
                    $type = SQLITE3_INTEGER;
                    break;
                case is_null($value): // if the value is an integer, set the $type to null
                    $type = SQLITE3_NULL;
                    break;
                default: // if otherwise, set it to string
                    $type = SQLITE3_TEXT;
            }
        }
        /*
         * This function would actually bind the values, don't forget we are still within the public function bind() block,
         * so, we can access the $param, $value, $type below: $this->stmt->bindValue($param, $value, $type);
         *
         */

        $this->stmt->bind_para($param, $value, $type);
    }

    public function Exist($select, $table, $col, $row)
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