<?php

require_once "inc/Koneksi.php";

class Kategori extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_post";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }
}