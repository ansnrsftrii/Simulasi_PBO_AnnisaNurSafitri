<?php
// File: koneksi/database.php

class Database {
    private $host = "localhost";
    private $username = "root"; // Sesuaikan dengan username MySQL Anda (bawaan XAMPP adalah root)
    private $password = "";     // Sesuaikan dengan password MySQL Anda (bawaan XAMPP adalah kosong)
    private $db_name = "db_simulasi_pbo_kelas_annisa_nur_safitri";
    public $conn;

    // Metode untuk mendapatkan koneksi database
    public function getConnection() {
        $this->conn = null;

        try {
            // Membuat koneksi PDO
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            // Mengatur mode error PDO ke Exception untuk mempermudah debugging
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Koneksi ke database gagal: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>