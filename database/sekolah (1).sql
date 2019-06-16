-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2019 pada 07.01
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alamat`
--

CREATE TABLE `alamat` (
  `id` int(11) NOT NULL,
  `rt` varchar(10) DEFAULT NULL,
  `rw` varchar(10) DEFAULT NULL,
  `dusun` varchar(20) DEFAULT NULL,
  `desa` varchar(30) DEFAULT NULL,
  `kecamatan` varchar(30) DEFAULT NULL,
  `kabupaten` varchar(30) DEFAULT NULL,
  `lainnya` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alamat`
--

INSERT INTO `alamat` (`id`, `rt`, `rw`, `dusun`, `desa`, `kecamatan`, `kabupaten`, `lainnya`) VALUES
(145, '', '', '', '', '', '', ''),
(146, '', '', '', '', '', '', ''),
(147, '', '', '', '', '', '', ''),
(148, '', '', '', '', '', '', ''),
(149, '', '', '', '', '', '', ''),
(150, '', '', '', '', '', '', ''),
(151, '', '', '', '', '', '', ''),
(152, '', '', '', '', '', '', ''),
(153, '', '', '', '', '', '', ''),
(154, '', '', '', '', '', '', ''),
(155, '', '', '', '', '', '', ''),
(156, '', '', '', '', '', '', ''),
(157, '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama` varchar(5) NOT NULL,
  `kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `path` varchar(40) NOT NULL,
  `icon` varchar(35) NOT NULL,
  `urutan` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `role_id`, `nama`, `path`, `icon`, `urutan`, `active`) VALUES
(1, 4, 'Dashboard', 'home', 'fa fa-dashboard', 1, 1),
(2, 4, 'Pendaftaran Murid Baru', 'home/pendaftaran_murid', 'fa fa-book', 2, 1),
(3, 4, 'Seleksi Murid Baru', 'home/seleksi_murid', 'fa fa-calendar', 3, 1),
(4, 4, 'Penempatan Murid Baru', 'home/penempatan_murid', 'fa fa-table', 4, 1),
(5, 4, 'Berita dan Pemberitahuan', 'home/berita_pemberitahuan', 'fa fa-newspaper-o', 5, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `murid`
--

CREATE TABLE `murid` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat_id` int(11) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `asal_sekolah` varchar(30) DEFAULT NULL,
  `tinggal_bersama` varchar(20) DEFAULT NULL,
  `jumlah_saudara` int(11) DEFAULT NULL,
  `orangtua_id` int(11) DEFAULT NULL,
  `wali_id` int(11) DEFAULT NULL,
  `persyaratan_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `murid`
--

INSERT INTO `murid` (`id`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat_id`, `agama`, `no_hp`, `asal_sekolah`, `tinggal_bersama`, `jumlah_saudara`, `orangtua_id`, `wali_id`, `persyaratan_id`) VALUES
(33, 'intan destiyanti', 'perempuan', 'indramayu', '2019-06-11', 156, 'islam', '986394834', 'smk n 1 losarang', '', 1, 67, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orangtua`
--

CREATE TABLE `orangtua` (
  `id` int(11) NOT NULL,
  `nama_ibu` varchar(30) DEFAULT NULL,
  `pendidikan_terakhir_ibu` varchar(20) DEFAULT NULL,
  `tempat_lahir_ibu` varchar(20) DEFAULT NULL,
  `tanggal_lahir_ibu` date DEFAULT NULL,
  `alamat_id_ibu` int(11) DEFAULT NULL,
  `pekerjaan_ibu` varchar(30) DEFAULT NULL,
  `nama_ayah` varchar(30) DEFAULT NULL,
  `pendidikan_terakhir_ayah` varchar(20) DEFAULT NULL,
  `tempat_lahir_ayah` varchar(20) DEFAULT NULL,
  `tanggal_lahir_ayah` date DEFAULT NULL,
  `alamat_id_ayah` int(11) DEFAULT NULL,
  `pekerjaan_ayah` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orangtua`
--

INSERT INTO `orangtua` (`id`, `nama_ibu`, `pendidikan_terakhir_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `alamat_id_ibu`, `pekerjaan_ibu`, `nama_ayah`, `pendidikan_terakhir_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `alamat_id_ayah`, `pekerjaan_ayah`) VALUES
(64, 'pathanah', 'Sarjana', 'bandung', '2019-06-25', 146, 'ibu rumah tangga', 'ade supriyanto', 'SMA', 'jakarta', '2019-06-11', 146, 'wirausaha'),
(65, 'pathanah', 'Sarjana', 'bandung', '2019-06-25', 149, 'ibu rumah tangga', 'ade supriyanto', 'SMA', 'jakarta', '2019-06-11', 149, 'wirausaha'),
(66, 'pathanah', 'Sarjana', 'bandung', '2019-06-25', 152, 'ibu rumah tangga', 'ade supriyanto', 'SMA', 'jakarta', '2019-06-11', 152, 'wirausaha'),
(67, 'pathanah', 'Sarjana', 'bandung', '2019-06-25', 155, 'ibu rumah tangga', 'ade supriyanto', 'SMA', 'jakarta', '2019-06-11', 155, 'wirausaha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `pembayaran` int(11) NOT NULL,
  `bukti_pembayaran` varchar(50) NOT NULL,
  `status_id` int(11) NOT NULL,
  `murid_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `persyaratan`
--

CREATE TABLE `persyaratan` (
  `id` int(11) NOT NULL,
  `path_akta` varchar(50) DEFAULT NULL,
  `path_ijazah` varchar(50) DEFAULT NULL,
  `path_kk` varchar(50) DEFAULT NULL,
  `path_pas_foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `persyaratan`
--

INSERT INTO `persyaratan` (`id`, `path_akta`, `path_ijazah`, `path_kk`, `path_pas_foto`) VALUES
(28, '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_user`
--

CREATE TABLE `role_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role_user`
--

INSERT INTO `role_user` (`id`, `nama`) VALUES
(1, 'guru'),
(2, 'wali murid'),
(3, 'wali kelas'),
(4, 'admin psb'),
(5, 'admin keuangan'),
(6, 'murid'),
(7, 'admin umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_pendaftar`
--

CREATE TABLE `status_pendaftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_pendaftar`
--

INSERT INTO `status_pendaftar` (`id`, `nama`) VALUES
(1, 'baru mendaftar'),
(2, 'sudah bayar'),
(3, 'ikut seleksi'),
(4, 'lolos seleksi'),
(5, 'sudah membayar'),
(6, 'selesai'),
(7, 'gagal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `submenu`
--

CREATE TABLE `submenu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `path` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_awal` varchar(30) NOT NULL,
  `nama_akhir` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(30) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama_awal`, `nama_akhir`, `username`, `password`, `email`, `role_id`, `created_at`, `updated_at`) VALUES
(5, 'intan', 'destiyanti', '087832590662', '$2y$10$ZmDp9n3xllaxCAR4SrbjEOdPnNXn4taDs3pV4EBvOtq6vxOq9YTwe', 'intandesti25@gmail.com', 2, '2019-06-15', '2019-06-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wali`
--

CREATE TABLE `wali` (
  `id` int(11) NOT NULL,
  `nama_wali` varchar(30) DEFAULT NULL,
  `pendidikan_terakhir_wali` varchar(20) DEFAULT NULL,
  `alamat_id_wali` int(11) DEFAULT NULL,
  `pekerjaan_wali` varchar(30) DEFAULT NULL,
  `tempat_lahir_wali` varchar(30) DEFAULT NULL,
  `tanggal_lahir_wali` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wali`
--

INSERT INTO `wali` (`id`, `nama_wali`, `pendidikan_terakhir_wali`, `alamat_id_wali`, `pekerjaan_wali`, `tempat_lahir_wali`, `tanggal_lahir_wali`) VALUES
(33, '', 'Sarjana', 157, 'ibu rumah tangga', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indeks untuk tabel `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alamat_fk` (`alamat_id`),
  ADD KEY `orangtua_fk` (`orangtua_id`),
  ADD KEY `wali_fk` (`wali_id`),
  ADD KEY `persyaratan_fk` (`persyaratan_id`);

--
-- Indeks untuk tabel `orangtua`
--
ALTER TABLE `orangtua`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alamat_fk_ibu` (`alamat_id_ibu`),
  ADD KEY `alamat_fk_ayah` (`alamat_id_ayah`);

--
-- Indeks untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `murid_fk` (`murid_id`),
  ADD KEY `user_fk` (`user_id`);

--
-- Indeks untuk tabel `persyaratan`
--
ALTER TABLE `persyaratan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_pendaftar`
--
ALTER TABLE `status_pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indeks untuk tabel `wali`
--
ALTER TABLE `wali`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alamat_fk_wali` (`alamat_id_wali`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `murid`
--
ALTER TABLE `murid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `orangtua`
--
ALTER TABLE `orangtua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `persyaratan`
--
ALTER TABLE `persyaratan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `status_pendaftar`
--
ALTER TABLE `status_pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `wali`
--
ALTER TABLE `wali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role_user` (`id`);

--
-- Ketidakleluasaan untuk tabel `murid`
--
ALTER TABLE `murid`
  ADD CONSTRAINT `alamat_fk` FOREIGN KEY (`alamat_id`) REFERENCES `alamat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orangtua_fk` FOREIGN KEY (`orangtua_id`) REFERENCES `orangtua` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `persyaratan_fk` FOREIGN KEY (`persyaratan_id`) REFERENCES `persyaratan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wali_fk` FOREIGN KEY (`wali_id`) REFERENCES `wali` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `orangtua`
--
ALTER TABLE `orangtua`
  ADD CONSTRAINT `alamat_fk_ayah` FOREIGN KEY (`alamat_id_ayah`) REFERENCES `alamat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alamat_fk_ibu` FOREIGN KEY (`alamat_id_ibu`) REFERENCES `alamat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD CONSTRAINT `murid_fk` FOREIGN KEY (`murid_id`) REFERENCES `murid` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role_user` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `wali`
--
ALTER TABLE `wali`
  ADD CONSTRAINT `alamat_fk_wali` FOREIGN KEY (`alamat_id_wali`) REFERENCES `alamat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
