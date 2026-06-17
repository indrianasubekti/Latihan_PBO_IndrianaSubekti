<?php
require_once 'Tiket.php';

class TiketVelvet extends Tiket {
    private $bantalSelimutPack;
    private $layananButler;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $HargaDasarTiket, $bantalSelimutPack, $layananButler) {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $HargaDasarTiket);
        $this->bantalSelimutPack = $bantalSelimutPack;
        $this->layananButler = $layananButler;
    }

    // Mengambil data spesifik dari database untuk studio Velvet
    public static function ambilData() {
        $db = new Database();
        $sql = "SELECT id_tiket, nama_film, jadwal_tayang, jumlah_kursi, harga_dasar_tiket, bantal_selimut_pack, layanan_butler 
                FROM tabel_tiket WHERE jenis_studio = 'Velvet'";
        
        $result = $db->conn->query($sql);
        $daftar = [];

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $daftar[] = new self(
                    $row['id_tiket'], $row['nama_film'], $row['jadwal_tayang'], 
                    $row['jumlah_kursi'], $row['harga_dasar_tiket'], 
                    $row['bantal_selimut_pack'], $row['layanan_butler']
                );
            }
        }
        return $daftar;
    }

    // Method Overriding dari kelas induk (Tiket)
    public function hitungTotalHarga() {
        // Menggunakan tarif murni
        return $this->HargaDasarTiket * $this->jumlah_kursi;
    }

    public function tampilkanInfoFasilitas() {
        return "Studio: Velvet | Pack: " . $this->bantalSelimutPack . " | Butler Service: " . $this->layananButler;
    }
}