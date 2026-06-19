<?php
// File: Pendaftaran.php

abstract class Pendaftaran {
    // Properti Terenkapsulasi (Protected)
    protected $id_pendaftaran;
    protected $nama_calon;
    protected $asal_sekolah;
    protected $nilai_ujian;
    protected $biayaPendaftaranDasar; // Mapping dari biaya_pendaftaran_dasar

    // Constructor untuk memetakan data dari database ke properti objek
    public function __construct($data = []) {
        $this->id_pendaftaran        = $data['id_pendaftaran'] ?? null;
        $this->nama_calon            = $data['nama_calon'] ?? '';
        $this->asal_sekolah          = $data['asal_sekolah'] ?? '';
        $this->nilai_ujian           = $data['nilai_ujian'] ?? 0.0;
        $this->biayaPendaftaranDasar = $data['biaya_pendaftaran_dasar'] ?? 0.0;
    }

    // ================= METODE ABSTRAK =================
    abstract public function hitungTotalBiaya();
    abstract public function tampilkanInfoJalur();
}
?>