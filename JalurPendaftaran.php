<?php
// File: JalurPendaftaran.php
require_once 'Pendaftaran.php';

// 1. Kelas Anak untuk Jalur Reguler
class Reguler extends Pendaftaran {
    private $pilihan_prodi;
    private $lokasi_kampus;

    public function __construct($data = []) {
        parent::__construct($data); // Memanggil constructor induk
        $this->pilihan_prodi = $data['pilihan_prodi'] ?? '';
        $this->lokasi_kampus = $data['lokasi_kampus'] ?? '';
    }

    // OVERRIDING: Jalur Reguler biaya total = biaya dasar tetap
    public function hitungTotalBiaya() {
        return $this->biayaPendaftaranDasar;
    }

    // OVERRIDING: Menampilkan info khusus reguler
    public function tampilkanInfoJalur() {
        echo "Jalur: Reguler | Prodi: {$this->pilihan_prodi} | Kampus: {$this->lokasi_kampus}";
    }
}

// 2. Kelas Anak untuk Jalur Prestasi
class Prestasi extends Pendaftaran {
    private $jenis_prestasi;
    private $tingkat_prestasi;

    public function __construct($data = []) {
        parent::__construct($data);
        $this->jenis_prestasi = $data['jenis_prestasi'] ?? '';
        $this->tingkat_prestasi = $data['tingkat_prestasi'] ?? '';
    }

    // OVERRIDING: Jalur Prestasi dapat potongan biaya 50.000 jika tingkat Nasional/Internasional
    public function hitungTotalBiaya() {
        if ($this->tingkat_prestasi == 'Nasional' || $this->tingkat_prestasi == 'Internasional') {
            return $this->biayaPendaftaranDasar - 50000;
        }
        return $this->biayaPendaftaranDasar;
    }

    // OVERRIDING: Menampilkan info khusus prestasi
    public function tampilkanInfoJalur() {
        echo "Jalur: Prestasi | Jenis: {$this->jenis_prestasi} | Tingkat: {$this->tingkat_prestasi}";
    }
}

// 3. Kelas Anak untuk Jalur Kedinasan
class Kedinasan extends Pendaftaran {
    private $sk_ikatan_dinas;
    private $instansi_sponsor;

    public function __construct($data = []) {
        parent::__construct($data);
        $this->sk_ikatan_dinas = $data['sk_ikatan_dinas'] ?? '';
        $this->instansi_sponsor = $data['instansi_sponsor'] ?? '';
    }

    // OVERRIDING: Jalur Kedinasan ditanggung penuh sponsor (Biaya = 0)
    public function hitungTotalBiaya() {
        return 0.0;
    }

    // OVERRIDING: Menampilkan info khusus kedinasan
    public function tampilkanInfoJalur() {
        echo "Jalur: Kedinasan | Sponsor: {$this->instansi_sponsor} | No SK: {$this->sk_ikatan_dinas}";
    }
}
?>