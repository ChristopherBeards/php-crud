<?php 
  class Category {
    // DB Stuff
    private $conn;
    private $table = 'categories';
    
    // Properties
    public $id;
    public $name;
    public $created_at;

    // Constructor
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get categories
    public function read() {
      // Create query
      $query = 'SELECT
        id,
        name,
        created_at
      FROM
        ' . $this->table . '
      ORDER BY
        created_at DESC';

      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute statement
      $stmt->execute();

      return $stmt;
    }

    // Create Category
    public function create() {
      // Create query
      $query = 'INSERT INTO ' . $this->table . '
        SET 
          name = :name';
      
      // Preapare statement
      $stmt = $this->conn->prepare($query);

      // Clean data
      $this->name = htmlspecialchars(strip_tags($this->name));

      // Bind data
      $stmt->bindParam(':name', $this->name);

      // Execute query
      if ($stmt->execute()) {
        return true;
      }

      // Print error if something goes wrong
      printf("Error: %s.\n", $stmt->error);

      return false;

    }

    public function update() {
      // Create query
      $query = 'UPDATE ' . 
        $this->table . ' 
        SET
          name = :name
        WHERE
          id = :id';

      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Clean data
      $this->name = htmlspecialchars(strip_tags($this->name));
      $this->id = htmlspecialchars(strip_tags($this->id));

      // Bind data
      $stmt->bindParam(':name', $this->name);
      $stmt->bindParam(':id', $this->id);

      // Execute query
      if ($stmt->execute()) {
        return true;
      }

      // Print error if something goes wrong
      printf("Error: %s.\n", $stmt->error);

      return false;
    }

    public function delete() {
      // Create query
      $query = 'DELETE from ' . $this->table . '
      WHERE id = :id';

      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Sanitize ID
      $this->id = htmlspecialchars(strip_tags($this->id));

      // Bind data
      $stmt->bindParam(':id', $this->id);

      // Execute query
      if ($stmt->execute()) {
        return true;
      }

      // Print error if something goes wrong
      printf("Error: %s.\n", $stmt->error);

      return false;
    }
  }
?>