<?php
class Class_{
  
    // database connection and table name
    private $conn;
    private $table_name = "class";
  
    // object properties
    public $id;
    public $name;
    public $description;
    public $create_by;
    public $date_create;
  
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // read products
function getClassByUser($id_user){
  
    // select all query
    $query = "SELECT
                c.id , c.name, c.decription, c.create_by, c.date_create
            FROM
                " . $this->table_name . " c 
             WHERE
                    c.id = (select id_class from classinfo where id_user = '" . $id_user . "')" ;
  
    // prepare query statement
    $stmt = $this->conn->prepare($query);

    
    // execute query
    $stmt->execute();
  
    return $stmt;
}

}

?>