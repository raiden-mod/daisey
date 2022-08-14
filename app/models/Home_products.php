<?php
class Home_products {
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
     // this will pull product from the database
    public function findAllProducts(){
        // this is a prepared statement
        $this->db->query('SELECT * FROM daisey_product ORDER BY id DESC');

        // then we execute the function
        $results = $this->db->resultSet();
        // this  willl return the result
        return $results;
    }
}