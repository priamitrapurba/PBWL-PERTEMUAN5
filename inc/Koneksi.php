<?php

class Koneksi {

    public object $db;

    public function __construct() {
        $this->db = new PDO("mysql:host=localhost;dbname=dbblog_si4", "root", "");
    }
}

?>