-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Nov 2021 pada 12.11
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `iku2_b`
--

CREATE TABLE `iku2_b` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `nama_lomba` varchar(100) NOT NULL,
  `tingkat_lomba` varchar(100) NOT NULL,
  `penyelenggara` varchar(100) NOT NULL,
  `prestasi` varchar(100) NOT NULL,
  `dospem` varchar(100) NOT NULL,
  `sk_dospem` varchar(100) NOT NULL,
  `tautan_sertif` varchar(100) NOT NULL,
  `bukti_pddikti` varchar(100) NOT NULL,
  `status_validasi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `iku4_kualifikasi_akademiks3`
--

CREATE TABLE `iku4_kualifikasi_akademiks3` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `prodi_mengajar` varchar(50) NOT NULL,
  `prodi_s3` varchar(50) NOT NULL,
  `tautan_ijazah` varchar(100) NOT NULL,
  `bukti_update_sister` varchar(100) NOT NULL,
  `status_validasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `iku4_pengalaman_praktisi`
--

CREATE TABLE `iku4_pengalaman_praktisi` (
  `id` int(11) NOT NULL,
  `jenis_pengalaman` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `tautan_pengalam_kerja` varchar(100) NOT NULL,
  `bukti_update_sister` varchar(100) NOT NULL,
  `status_validasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `iku4_sertifikasi_profesi`
--

CREATE TABLE `iku4_sertifikasi_profesi` (
  `id` int(11) NOT NULL,
  `jenis_lembaga` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `lembaga_sertifikasi` varchar(100) NOT NULL,
  `tautan_sertifikat` varchar(100) NOT NULL,
  `bukti_update_sister` varchar(100) NOT NULL,
  `status_validasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `iku5_karyailmiah`
--

CREATE TABLE `iku5_karyailmiah` (
  `id` int(11) NOT NULL,
  `karya_ilmiah` varchar(250) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `afiliasi` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `quartile` varchar(50) NOT NULL,
  `link_scopus` varchar(100) NOT NULL,
  `volume` varchar(20) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `tautan_jurnal` varchar(100) NOT NULL,
  `tautan_buku` varchar(100) NOT NULL,
  `tautan_sertifikat` varchar(100) NOT NULL,
  `tautan_ss` varchar(100) NOT NULL,
  `jml_sitasi` varchar(100) NOT NULL,
  `tautan_case_study` varchar(100) NOT NULL,
  `tautan_laporan_penelitian` varchar(100) NOT NULL,
  `tautan_mou` varchar(100) NOT NULL,
  `tautan_update_sister` varchar(100) NOT NULL,
  `status_validasi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `iku5_karyaseni`
--

CREATE TABLE `iku5_karyaseni` (
  `id` int(11) NOT NULL,
  `jenis_karya` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tautan_katalog` varchar(100) NOT NULL,
  `sertif_pameran` varchar(100) NOT NULL,
  `tautan_mou` varchar(100) NOT NULL,
  `bukti_update_sister` varchar(100) NOT NULL,
  `status_validasi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `iku5_karyaterapan`
--

CREATE TABLE `iku5_karyaterapan` (
  `id` int(11) NOT NULL,
  `jenis_karya` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `inventor` varchar(100) NOT NULL,
  `tautan_penghargaan_internasional` varchar(100) NOT NULL,
  `no_hak_paten` varchar(100) NOT NULL,
  `tautan` varchar(100) NOT NULL,
  `tautan_sertif_asosiasi` varchar(100) NOT NULL,
  `tautan_mou` varchar(100) NOT NULL,
  `tautan_update_sister` varchar(100) NOT NULL,
  `status_validasi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `iku6`
--

CREATE TABLE `iku6` (
  `id` int(11) NOT NULL,
  `mata_kuliah` varchar(100) NOT NULL,
  `jml_sks` int(11) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `jenjang_studi` varchar(10) NOT NULL,
  `jenis_matkul` varchar(50) NOT NULL,
  `jenis_pembelajaran` varchar(50) NOT NULL,
  `formula` varchar(100) NOT NULL,
  `tautan_rps` varchar(100) NOT NULL,
  `tautan_laporan` varchar(100) NOT NULL,
  `tautan_bukti_pddikti` varchar(100) NOT NULL,
  `status_validasi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `iku8_akreditasi_internasional`
--

CREATE TABLE `iku8_akreditasi_internasional` (
  `id` int(11) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `jenjang_studi` varchar(100) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `status_keaktifan` varchar(20) NOT NULL,
  `akreditasi_internasional` varchar(100) NOT NULL,
  `lembaga_akreditasi_internasional` varchar(100) NOT NULL,
  `tautan_sertif_akreditasi` varchar(100) NOT NULL,
  `tautan_bukti_pddikti` varchar(100) NOT NULL,
  `status_validasi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `iku_1`
--

CREATE TABLE `iku_1` (
  `id` int(11) NOT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `jenjang` varchar(20) DEFAULT NULL,
  `prodi` varchar(20) DEFAULT NULL,
  `fakultas` varchar(20) DEFAULT NULL,
  `no_ijazah` varchar(20) DEFAULT NULL,
  `masa_tunggu` int(11) DEFAULT NULL,
  `nama_perusahaan` varchar(250) DEFAULT NULL,
  `lokasi_perusahaan` varchar(250) DEFAULT NULL,
  `pendapatan` varchar(100) DEFAULT NULL,
  `lanjut_studi` varchar(100) DEFAULT NULL,
  `tautan_bukti` varchar(100) DEFAULT NULL,
  `status_validasi` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `iku_1`
--

INSERT INTO `iku_1` (`id`, `jenis`, `nama`, `nim`, `jenjang`, `prodi`, `fakultas`, `no_ijazah`, `masa_tunggu`, `nama_perusahaan`, `lokasi_perusahaan`, `pendapatan`, `lanjut_studi`, `tautan_bukti`, `status_validasi`) VALUES
(0, 'as', 'as', '12', 'as', 'as', 'as', '12ww', 12, 'as', 'as', 'as', 'as', 'https', 0),
(4, 'sa', 'sa', '12', 'sa', 'sa', 'sa', 'sa23', 23, 'sa', 'sa', 'sa', 'sa', 'sa', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `iku_2_a`
--

CREATE TABLE `iku_2_a` (
  `id` int(11) NOT NULL,
  `jenis_kegiatan` varchar(250) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `prodi` varchar(20) NOT NULL,
  `fakultas` varchar(20) NOT NULL,
  `kegiatan_merdeka_belajar` varchar(50) NOT NULL,
  `sks_diakui` int(11) NOT NULL,
  `dosen_pembimbing` varchar(100) NOT NULL,
  `tautan_sk_rektor` varchar(100) NOT NULL,
  `tautan_sk_konversi` varchar(100) NOT NULL,
  `tautan_panduan_kegiatan` varchar(100) NOT NULL,
  `tautan_data_lainnya` varchar(100) NOT NULL,
  `tautan_bukti_pddikti` varchar(100) NOT NULL,
  `status_validasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `iku_2_a`
--

INSERT INTO `iku_2_a` (`id`, `jenis_kegiatan`, `nama`, `nim`, `prodi`, `fakultas`, `kegiatan_merdeka_belajar`, `sks_diakui`, `dosen_pembimbing`, `tautan_sk_rektor`, `tautan_sk_konversi`, `tautan_panduan_kegiatan`, `tautan_data_lainnya`, `tautan_bukti_pddikti`, `status_validasi`) VALUES
(1, 'as', 'as', '123', 'as', 'as', 'as', 123, 'as', 'as', 'as', 'as', 'as', 'as', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `iku_3_dosenbinamahasiswa`
--

CREATE TABLE `iku_3_dosenbinamahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nama_mahasiswa` varchar(250) NOT NULL,
  `nama_kompetisi` varchar(100) NOT NULL,
  `tingkat_kompetisi` varchar(50) NOT NULL,
  `tahun_kompetisi` varchar(50) NOT NULL,
  `tautan_data_dukung` varchar(100) NOT NULL,
  `tautan_sk` varchar(100) NOT NULL,
  `bukti_prestasi_mahasiswa` varchar(100) NOT NULL,
  `status_validasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `iku_3_dosen_praktisi`
--

CREATE TABLE `iku_3_dosen_praktisi` (
  `id` int(11) NOT NULL,
  `kriteria_pengalaman` varchar(50) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tempat_kegiatan` varchar(50) NOT NULL,
  `tahun_kegiatan` varchar(20) NOT NULL,
  `tautan_dukung_data` varchar(100) NOT NULL,
  `tautan_sk` varchar(100) NOT NULL,
  `tautan_update_sister` varchar(100) NOT NULL,
  `tautan_bukti_pddikti` varchar(100) NOT NULL,
  `status_validasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `iku_3_ptlain`
--

CREATE TABLE `iku_3_ptlain` (
  `id` int(11) NOT NULL,
  `jenis_pt` varchar(50) NOT NULL,
  `jenis_kegiatan` varchar(50) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `nama_kegiatan` varchar(50) NOT NULL,
  `tempat_kegiatan` varchar(50) NOT NULL,
  `tahun_kegiatan` varchar(20) NOT NULL,
  `tautan_data_dukung` varchar(100) NOT NULL,
  `tautan_sk` varchar(100) NOT NULL,
  `bukti_update_sister` varchar(100) NOT NULL,
  `tautan_bukti_pddikti` varchar(100) NOT NULL,
  `status_validasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `nidn_user` int(11) NOT NULL,
  `password` varchar(10) NOT NULL,
  `fakultas` varchar(250) NOT NULL,
  `prodi` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `iku2_b`
--
ALTER TABLE `iku2_b`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `iku4_kualifikasi_akademiks3`
--
ALTER TABLE `iku4_kualifikasi_akademiks3`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `iku4_pengalaman_praktisi`
--
ALTER TABLE `iku4_pengalaman_praktisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `iku4_sertifikasi_profesi`
--
ALTER TABLE `iku4_sertifikasi_profesi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `iku5_karyaseni`
--
ALTER TABLE `iku5_karyaseni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `iku5_karyaterapan`
--
ALTER TABLE `iku5_karyaterapan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `iku6`
--
ALTER TABLE `iku6`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `iku8_akreditasi_internasional`
--
ALTER TABLE `iku8_akreditasi_internasional`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `iku_1`
--
ALTER TABLE `iku_1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `iku_2_a`
--
ALTER TABLE `iku_2_a`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `iku_3_dosenbinamahasiswa`
--
ALTER TABLE `iku_3_dosenbinamahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `iku_3_dosen_praktisi`
--
ALTER TABLE `iku_3_dosen_praktisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `iku_3_ptlain`
--
ALTER TABLE `iku_3_ptlain`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `iku2_b`
--
ALTER TABLE `iku2_b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `iku4_kualifikasi_akademiks3`
--
ALTER TABLE `iku4_kualifikasi_akademiks3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `iku4_pengalaman_praktisi`
--
ALTER TABLE `iku4_pengalaman_praktisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `iku4_sertifikasi_profesi`
--
ALTER TABLE `iku4_sertifikasi_profesi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `iku5_karyaseni`
--
ALTER TABLE `iku5_karyaseni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `iku5_karyaterapan`
--
ALTER TABLE `iku5_karyaterapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `iku6`
--
ALTER TABLE `iku6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `iku8_akreditasi_internasional`
--
ALTER TABLE `iku8_akreditasi_internasional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `iku_1`
--
ALTER TABLE `iku_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `iku_2_a`
--
ALTER TABLE `iku_2_a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `iku_3_dosenbinamahasiswa`
--
ALTER TABLE `iku_3_dosenbinamahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `iku_3_dosen_praktisi`
--
ALTER TABLE `iku_3_dosen_praktisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `iku_3_ptlain`
--
ALTER TABLE `iku_3_ptlain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
