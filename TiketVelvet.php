<?php
require_once 'Tiket.php';

class TiketVelvet extends Tiket {
    // Properti tambahan spesifik untuk TiketVelvet
    private $bantalSelimutPack;
    private $layananButler;

    // Constructor Kelas Anak
    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $HargaDasarTiket, $bantalSelimutPack, $layananButler) {
        parent::__construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $HargaDasarTiket);
        
        $this->bantalSelimutPack = $bantalSelimutPack;
        $this->layananButler = $layananButler;
    }

    // Mengimplementasikan metode abstrak hitungTotalHarga
    public function hitungTotalHarga() {
        // Contoh Overriding: Velvet Studio dikenakan surcharge layanan premium sebesar Rp 50.000 flat per transaksi
        $biayaPremium = 50000;
        return ($this->HargaDasarTiket * $this->jumlah_kursi) + $biayaPremium;
    }

    // Mengimplementasikan metode abstrak tampilkanInfoFasilitas
    public function tampilkanInfoFasilitas() {
        return "Studio: Velvet Premium | Fasilitas: " . $this->bantalSelimutPack . " | Butler Service: " . $this->layananButler;
    }
}
?>