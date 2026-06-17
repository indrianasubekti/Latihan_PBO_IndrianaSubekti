<?php
require_once 'Tiket.php';

class TiketIMAX extends Tiket {
    private $kacamata3dId;
    private $efekGerakFitur;

    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $HargaDasarTiket, $kacamata3dId, $efekGerakFitur) {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $HargaDasarTiket);
        $this->kacamata3dId = $kacamata3dId;
        $this->efekGerakFitur = $efekGerakFitur;
    }

    // Mengambil data spesifik dari database untuk studio IMAX
    public static function ambilData() {
        $db = new Database();
        $sql = "SELECT id_tiket, nama_film, jadwal_tayang, jumlah_kursi, harga_dasar_tiket, kacamata_3d_id, efek_gerak_fitur 
                FROM tabel_tiket WHERE jenis_studio = 'IMAX'";
        
        $result = $db->conn->query($sql);
        $daftar = [];

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $daftar[] = new self(
                    $row['id_tiket'], $row['nama_film'], $row['jadwal_tayang'], 
                    $row['jumlah_kursi'], $row['harga_dasar_tiket'], 
                    $row['kacamata_3d_id'], $row['efek_gerak_fitur']
                );
            }
        }
        return $daftar;
    }

    // Method Overriding dari kelas induk (Tiket)
    public function hitungTotalHarga() {
       // Total harga dasar + biaya flat IMAX Rp 35.000
       return ($this->HargaDasarTiket * $this->jumlah_kursi) + 35000;
    }

    public function tampilkanInfoFasilitas() {
        return "Studio: IMAX | Kacamata ID: " . ($this->kacamata3dId ?? '-') . " | Efek Gerak: " . $this->efekGerakFitur;
    }
}