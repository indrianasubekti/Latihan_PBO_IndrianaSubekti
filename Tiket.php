<?php

require_once 'koneksi/database.php';

// Mendeklarasikan abstract class Tiket yang mewarisi Database
abstract class Tiket extends Database {
    // Properti Terenkapsulasi (protected) sesuai pemetaan kolom database
    protected $id_tiket;
    protected $nama_film;
    protected $jadwal_tayang;
    protected $jumlah_kursi;
    protected $HargaDasarTiket;

    // Constructor untuk memetakan data dari database ke properti kelas
    public function __construct($id_tiket, $nama_film, $jadwal_tayang, $jumlah_kursi, $HargaDasarTiket) {
        // Menjalankan constructor parent (Database) untuk mengaktifkan koneksi
        parent::__construct(); 
        
        $this->id_tiket = $id_tiket;
        $this->nama_film = $nama_film;
        $this->jadwal_tayang = $jadwal_tayang;
        $this->jumlah_kursi = $jumlah_kursi;
        $this->HargaDasarTiket = $HargaDasarTiket;
    }

    // Metode Abstrak (Wajib dideklarasikan tanpa isi/body)
    abstract public function hitungTotalHarga();
    abstract public function tampilkanInfoFasilitas();
}
?>