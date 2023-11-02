<?php

class adminpageLoader {

    private $db;
    private $data;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function load() {
        $data = [
            'lang' => $this->getLanguageSelection(),
        ];

        return $data;
    }

    private function getLanguageSelection() {
        $this->db->query('select * from languages');

        return $this->db->resultSet();
    }
}