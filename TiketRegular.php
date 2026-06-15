<?php
require_once 'Tiket.php';

class TiketRegular extends Tiket {
    // Properti tambahan spesifik untuk TiketRegular
    private $tipeAudio;
    private $lokasiBaris;

    // Constructor Kelas Anak
    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $HargaDasarTiket, $tipeAudio, $lokasiBaris) {
        // Mengirimkan data global ke constructor abstract class Tiket
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $HargaDasarTiket);
        
        $this->tipeAudio = $tipeAudio;
        $this->lokasiBaris = $lokasiBaris;
    }

    // Mengimplementasikan metode abstrak hitungTotalHarga
    public function hitungTotalHarga() {
        // Studio Regular menggunakan tarif standar (Harga Dasar x Jumlah Kursi)
        return $this->HargaDasarTiket * $this->jumlah_kursi;
    }

    // Mengimplementasikan metode abstrak tampilkanInfoFasilitas
    public function tampilkanInfoFasilitas() {
        return "Studio: Regular | Audio: " . $this->tipeAudio . " | Kursi: " . $this->lokasiBaris;
    }
}
?>