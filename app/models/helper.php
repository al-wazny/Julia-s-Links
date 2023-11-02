<?php

class helper {

    private $db;
    private $data;

    public function __construct()
    {
        $this->db = new Database();
    }
    

    public function saveElement($data) {
        
        $lang = $_COOKIE['lang'] ? $_COOKIE['lang'] : $this->getDefaultLanguage();

        foreach ($data as $name => $text) {
            list($name, $id) = explode("_", $name);
            //$uuid = $this->uuidv4(bin2hex(random_bytes(8)));
            
            $sql = "UPDATE translations SET text = '$text' WHERE name = '$name' AND element_id = '$id'";            
            $this->db->insert($sql);
        }
    }

    private function getDefaultLanguage() {
        $this->db->query("SELECT language_id FROM languages WHERE name='Deutsch'");

        return $this->db->single()->language_id;
    }

    private function uuidv4($data) {
        assert(strlen($data) == 16);

        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
            
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    /*private function saveTranslation() {
        $this->db->insert("INSERT INTO translations (translation_id, language_id, element_id, text, name) VALUES ()");
    }*/
}