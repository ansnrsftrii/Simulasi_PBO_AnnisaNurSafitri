<?php
// File: JalurPendaftaran.php
require_once 'Pendaftaran.php';

// =========================================================================
// 1. Kelas Anak: PendaftaranReguler
// =========================================================================
class PendaftaranReguler extends Pendaftaran {
    private $pilihanProdi;
    private $lokasiKampus;

    public function __construct($data = []) {
        parent::__construct($data);
        $this->pilihanProdi = $data['pilihan_prodi'] ?? '';
        $this->lokasiKampus = $data['lokasi_kampus'] ?? '';
    }

    // TAHAP 5 OVERRIDING: Total Biaya = biayaPendaftaranDasar (Tarif standar murni)
    public function hitungTotalBiaya() {
        return $this->biayaPendaftaranDasar;
    }

    public function tampilkanInfoJalur() {
        echo "<b>Prodi:</b> {$this->pilihanProdi} <br> <b>Kampus:</b> {$this->lokasiKampus}";
    }

    public static function getDaftarReguler($db) {
        $query = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Reguler'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

// =========================================================================
// 2. Kelas Anak: PendaftaranPrestasi
// =========================================================================
class PendaftaranPrestasi extends Pendaftaran {
    private $jenisPrestasit;
    private $tingkatPrestasi;

    public function __construct($data = []) {
        parent::__construct($data);
        $this->jenisPrestasi   = $data['jenis_prestasi'] ?? '';
        $this->tingkatPrestasi = $data['tingkat_prestasi'] ?? '';
    }

    // TAHAP 5 OVERRIDING: Total Biaya = biayaPendaftaranDasar - 50000 (Potongan insentif)
    public function hitungTotalBiaya() {
        return $this->biayaPendaftaranDasar - 50000;
    }

    public function tampilkanInfoJalur() {
        echo "<b>Prestasi:</b> {$this->jenisPrestasi} <br> <b>Tingkat:</b> {$this->tingkatPrestasi}";
    }

    public static function getDaftarPrestasi($db) {
        $query = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Prestasi'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

// =========================================================================
// 3. Kelas Anak: PendaftaranKedinasan
// =========================================================================
class PendaftaranKedinasan extends Pendaftaran {
    private $skIkatanDinas;
    private $instansiSponsor;

    public function __construct($data = []) {
        parent::__construct($data);
        $this->skIkatanDinas   = $data['sk_ikatan_dinas'] ?? '';
        $this->instansiSponsor = $data['instansi_sponsor'] ?? '';
    }

    // TAHAP 5 OVERRIDING: Total Biaya = biayaPendaftaranDasar * 1.25 (Surcharge 25%)
    public function hitungTotalBiaya() {
        return $this->biayaPendaftaranDasar * 1.25;
    }

    public function tampilkanInfoJalur() {
        echo "<b>Sponsor:</b> {$this->instansiSponsor} <br> <b>No SK:</b> {$this->skIkatanDinas}";
    }

    public static function getDaftarKedinasan($db) {
        $query = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Kedinasan'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>