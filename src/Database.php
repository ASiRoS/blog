<?php

declare(strict_types=1);

namespace App;

class Database
{
    private
        $db,
        $sql,
        $whereValues,
        $type,
        $query
    ;

    const TYPES = [
        self::TYPE_SELECT => 'select',
        self::TYPE_INSERT => 'insert',
        self::TYPE_UPDATE => 'update',
    ];

    const
        TYPE_SELECT = 'select',
        TYPE_INSERT = 'insert',
        TYPE_UPDATE = 'update'
    ;

    public function __construct(string $host, string $username, string $password, string $name)
    {
        $this->db = new \PDO("mysql:dbname=$name;host=$host", $username, $password);
    }

    public function select(string $table) : self
    {
        $this->sql = "SELECT * FROM $table";

        $this->setType(self::TYPE_SELECT);

        return $this;
    }

    public function where(array $where) : self
    {
        if(empty($where)) {
            return $this;
        }

        $this->sql .= " WHERE";

        $values = [];
        $last = array_key_last($where);

        foreach ($where as $field => $value) {
            $this->sql .= " $field = ?";

            $values[] = $value;

            if($field !== $last) {
                $this->sql .= " AND";
            }
        }

        $this->whereValues = $values;

        return $this;
    }

    public function execute() : self
    {
        $query = $this->db->prepare($this->sql);

        $query->execute($this->whereValues);

        $this->query = $query;

        return $this;
    }

    public function fetchAll() : array
    {
        if($this->query) {
            return $this->query->fetchAll(\PDO::FETCH_ASSOC);
        }

        return [];
    }

    public function getSql() : string
    {
        return $this->sql;
    }

    private function setType(string $type) : bool
    {
        if(in_array($type, self::TYPES)) {
            $this->type = $type;

            return true;
        }

        return false;
    }
}