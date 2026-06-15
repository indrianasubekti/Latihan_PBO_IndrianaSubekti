<?php

class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "DB_LATIHAN_PBO_TI1C_INDRIANASUBEKTI"; // Disesuaikan dengan database bioskop baru Anda
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }
}
// Menguji koneksi dengan membuat objek dari kelas Database
$db = new Database();
?>