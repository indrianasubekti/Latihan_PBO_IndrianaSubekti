<?php
require_once 'Tiket.php';

class TiketRegular extends Tiket {
    private $tipeAudio;
    private $lokasiBaris;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $HargaDasarTiket, $tipeAudio, $lokasiBaris) {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $HargaDasarTiket);
        $this->tipeAudio = $tipeAudio;
        $this->lokasiBaris = $lokasiBaris;
    }

    // Mengambil data spesifik dari database untuk studio Regular
    public static function ambilData() {
        $db = new Database();
        $sql = "SELECT id_tiket, nama_film, jadwal_tayang, jumlah_kursi, harga_dasar_tiket, tipe_audio, lokasi_baris 
                FROM tabel_tiket WHERE jenis_studio = 'Regular'";
        
        $result = $db->conn->query($sql);
        $daftar = [];

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $daftar[] = new self(
                    $row['id_tiket'], $row['nama_film'], $row['jadwal_tayang'], 
                    $row['jumlah_kursi'], $row['harga_dasar_tiket'], 
                    $row['tipe_audio'], $row['lokasi_baris']
                );
            }
        }
        return $daftar;
    }

    // Method Overriding dari kelas induk (Tiket)
    public function hitungTotalHarga() {
        // Tarif standar murni tanpa biaya tambahan
        return $this->HargaDasarTiket * $this->jumlah_kursi;
    }

public function tampilkanInfoFasilitas() {
        return "Studio: Regular | Audio: " . $this->tipeAudio . " | Baris: " . $this->lokasiBaris;
    }
}