<?php
require_once 'Tiket.php';

class TiketIMAX extends Tiket {
    // Properti tambahan spesifik untuk TiketIMAX
    private $kacamata3dId;
    private $efekGerakFitur;

    // Constructor Kelas Anak
    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $HargaDasarTiket, $kacamata3dId, $efekGerakFitur) {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $HargaDasarTiket);
        
        $this->kacamata3dId = $kacamata3dId;
        $this->efekGerakFitur = $efekGerakFitur;
    }

    // Mengimplementasikan metode abstrak hitungTotalHarga
    public function hitungTotalHarga() {
        // Contoh Overriding: Studio IMAX dikenakan biaya tambahan Rp 25.000 per kursi untuk efek gerak & kacamata 3D
        $biayaTambahan = 25000 * $this->jumlah_kursi;
        return ($this->HargaDasarTiket * $this->jumlah_kursi) + $biayaTambahan;
    }

    // Mengimplementasikan metode abstrak tampilkanInfoFasilitas
    public function tampilkanInfoFasilitas() {
        $kacamata = $this->kacamata3dId ? $this->kacamata3dId : "Tidak Ada / Tidak Pakai";
        return "Studio: IMAX | Kacamata ID: " . $kacamata . " | Efek Gerak: " . $this->efekGerakFitur;
    }
}
?>