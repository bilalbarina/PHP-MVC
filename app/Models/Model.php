<?php

namespace App\Models;

use PDO;

abstract class Model {

    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbName = 'tasks';
    protected $pdo;
    protected $query = '';
    protected $table = '';
    protected $id;

    public function __construct()
    {
        $pdo = new PDO("mysql:host={$this->host};dbname={$this->dbName}", $this->user, $this->pass);
        $this->pdo = $pdo;
    }

    public function all()
    {
        $this->query = "SELECT * FROM {$this->table}";
        return $this;
    }

    public function where($column, $value)
    {
        $this->query .= " WHERE $column = $value";
        return $this;
    }

    public function find($id)
    {
        $this->id = $id;
        $this->all();
        $this->where('id', $this->id);
        return $this;
    }

    public function get()
    {
        return $this->pdo->query($this->query, PDO::FETCH_ASSOC)->fetchAll();
    }
    
    public function first()
    {
        return $this->get()[0];
    }

    public function create(array $data)
    {
        $columns = array_keys($data);
        
        $values = array_values($data);
    
        $columnsQuery = implode(",", $columns);
        $valuesQuery = implode("','", $values);
       

        $query = "INSERT INTO {$this->table} ($columnsQuery) VALUES ('$valuesQuery')";
        return $this->pdo->exec($query);
    }

    public function update(array $data)
    {
        $setQuerys = [];

        foreach ($data as $key=>$value) {
            $setQuerys[] = "$key = '$value'";
        }

        $setQuery = implode(', ', $setQuerys);
        
        $query = "UPDATE {$this->table} SET $setQuery WHERE id = '{$this->id}'";
        return $this->pdo->exec($query);
    }

    public function delete()
    {
        $query = "DELETE FROM {$this->table} WHERE id = '{$this->id}'";
        return $this->pdo->exec($query);
    }
}