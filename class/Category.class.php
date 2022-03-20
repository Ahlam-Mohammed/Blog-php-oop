<?php


class Category {

    public $conn;

    public function __construct()
    {
        $this->conn = new DB();
    }

    public function getAll()
    {
        $this->conn->table('categories')->get();
        return $this->conn->result;
    }

}