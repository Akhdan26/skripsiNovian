-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2022 pada 23.01
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_loker`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenjang` varchar(5) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `program_studi` varchar(50) NOT NULL,
  `ipk` varchar(5) NOT NULL,
  `tahun_lulus` int(11) NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_active` int(1) NOT NULL,
  `resume` varchar(100) NOT NULL,
  `sertifikat` varchar(100) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `id_skill` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `tanggal_lahir`, `alamat`, `kota`, `no_hp`, `email`, `jenjang`, `jurusan`, `program_studi`, `ipk`, `tahun_lulus`, `jenis_kelamin`, `password`, `is_active`, `resume`, `sertifikat`, `id_perusahaan`, `id_skill`) VALUES
(3, '1841720095', 'Novian Nurrohman Sopian Tes', '1999-11-15', 'Jl. La. Sucipto No 312B', 'Malang', '085707807491', 'noviannurrohman99@gmail.com', 'D4', 'Teknologi Informasi', 'Teknik Informatika', '3,51', 2022, 'Male', '0192023a7bbd73250516f069df18b500', 1, 'pokokcv.pdf', '', 0, '2,3'),
(5, '1841720096', 'lukman', '0000-00-00', '', '', '', 'lukman@gmail.com', '', '', '', '', 0, '', 'b5bbc8cf472072baffe920e4e28ee29c', 1, '', '', 0, '0'),
(8, '1098', 'Tono', '2000-07-19', 'Jl. Danau Bratan', 'Malang', '082142720024', 'tono@gmail.com', 'D4', 'Teknik Informatika', 'Web Development', '3.7', 2019, 'Male', '0192023a7bbd73250516f069df18b500', 1, '17_TI-4C_MayangMuriaCahyaningsih_Quiz1_CoverLetter.pdf', '', 0, '1,2,4'),
(9, '1841720012', 'Jono', '2022-03-11', 'surabaya', 'surabaya', '12123213', 'jono@gmail.com', 'D4', 'TI', 'Ti', '3.95', 2015, 'Male', 'ef9322a1a342a36856e9e8929b19437a', 0, '', '', 0, '0'),
(11, '12312413414', 'fani', '2022-03-21', 'turen', 'malang', '12', 'fani@gmail.com', 'S1', 'ekon', 'apaaja', '3,81', 2022, 'Female', '5a6c3117f5348275ca26005ae5e40f3c', 0, '', '', 0, '0'),
(12, '201910130311089', 'M Farisi Ardiansyah', '0000-00-00', '', '', '', '', '', '', '', '', 0, '', '0192023a7bbd73250516f069df18b500', 1, '', '', 0, '0'),
(13, '1841720123', 'Tona Toni', '2022-03-25', 'batu', 'malang', '21332', 'tona@gmail.com', 'D3', 'Teknologi Informasi', 'Teknik Informatika', '3,55', 2022, 'Male', '0192023a7bbd73250516f069df18b500', 1, '', '', 0, '0'),
(17, '18417200982', 'Novian Nurrohman', '2000-02-12', 'malang', 'malang', '082142720024', 'bibitkukuh@yahoo.co.id', 'S1', 'asdawd', 'adawd', '123', 2000, 'Male', '0192023a7bbd73250516f069df18b500', 1, '', '', 0, '2,3'),
(19, '184172009533', 'dsadas', '2022-03-25', 'adsads', 'adsdsa', '21', 'noviannurrohman1@gmail.com', 'D1', 'dsa', 'ads', '213', 213, 'Female', '0192023a7bbd73250516f069df18b500', 1, '', '', 0, '1,5'),
(20, '1841721111', 'cobacoba', '2022-04-02', 'malang', 'malang', '2123', 'cobacoba@gmail.com', 'D3', 'Teknologi Informasi', 'Teknik Informatika', '3,54', 2021, 'Male', '0192023a7bbd73250516f069df18b500', 1, '', '', 0, '1,2'),
(21, '201810160311620', 'Alfanita', '2000-11-07', 'Jakarta', '', '081334247842', 'alfanita@gmail.com', 'S1', 'FEB', 'MANAJEMEN', '3.80', 2022, 'Female', 'f04751dca5443d161904b0b252fc72db', 1, '', '', 0, '0'),
(23, 'cobadong', 'cobadong', '1111-11-01', 'asds', 'das', '1213', 'cobadong@gmail.com', 'D4', 'dasd', 'sad', '121', 2222, 'Male', '5830a65b20dcf9cefdb21826597fd33c', 1, '', '', 0, '1,2,4'),
(24, '2019', 'Farisi', '0000-00-00', '', '', '', 'farisi@gmail.com', 'S1', '', 'IT', '', 0, 'Male', 'f0ff3778499f2c12d2e7a35f36d91870', 1, '', '', 0, '1,2'),
(25, '222', 'nov22', '2022-06-03', 'ads', 'ads', '32', 'nov22@gmail.com', 'S1', '', '', '', 0, '', '0192023a7bbd73250516f069df18b500', 1, '1841720085_Muhammad_Falaah_Azmi1.pdf', '', 0, '2,4'),
(27, '123', 'nov123', '0000-00-00', '', '', '', 'nov123@gmail.com', '', '', '', '', 0, '', '0192023a7bbd73250516f069df18b500', 1, 'coba.pdf', 'BAB_V_5.pdf', 0, '1,3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(11) NOT NULL,
  `nama_pekerjaan` varchar(100) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `posted_date` date NOT NULL,
  `deskripsi_pekerjaan` longtext NOT NULL,
  `tingkat_pekerjaan` varchar(100) NOT NULL,
  `jenis_pekerjaan` varchar(50) NOT NULL,
  `id_skill` text NOT NULL,
  `application_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `nama_pekerjaan`, `id_perusahaan`, `lokasi`, `posted_date`, `deskripsi_pekerjaan`, `tingkat_pekerjaan`, `jenis_pekerjaan`, `id_skill`, `application_date`) VALUES
(1, 'Operator Maintenance Plant Purwakarta', 2, 'Purwakarta', '2022-03-18', 'It is a long established fact that a reader will beff distracted by vbthe creadable content of a page when looking at its layout. The pointf of using Lorem Ipsum is that it has ahf mcore or-lgess normal distribution of letters, as opposed to using, Content here content here making it look like readable.', 'Staff (non-management & non-supervisor)', 'Full-Time', '1,2,3', '2022-03-31'),
(4, 'Staff', 1, 'malang', '2022-03-20', '<p>ini</p><ul><li>cuma</li><li>contoh</li></ul><p>ya</p><ul><li>adick</li><li>adick</li></ul>', 'staff', 'Full-Time', '3', '2022-03-30'),
(14, 'Web Developer', 1, 'Malang', '2022-03-20', '<p>Requirement</p><ul><li>sing penting iso</li></ul><p>deskripsi</p><ul><li>opo ae</li></ul>', 'Staff Management', 'Full-Time', '1,2,3', '2022-03-31'),
(15, 'Staf', 1, 'Malang', '2022-05-21', '<p>adawdsd</p>', 'staff', 'Full-Time', '2', '2022-05-27'),
(18, 'ads', 8, 'ads', '2022-05-21', '<p>ads</p>', 'ads', 'Part-Time', '2,3', '2022-05-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelamar`
--

CREATE TABLE `pelamar` (
  `id` int(11) NOT NULL,
  `id_pekerjaan` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `status_daftar` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelamar`
--

INSERT INTO `pelamar` (`id`, `id_pekerjaan`, `id_mahasiswa`, `id_perusahaan`, `status_daftar`) VALUES
(4, 1, 3, 2, '3'),
(6, 14, 3, 1, ''),
(7, 14, 24, 1, ''),
(9, 4, 3, 1, ''),
(10, 1, 25, 2, '4'),
(11, 18, 25, 8, 'lolos'),
(12, 1, 27, 2, '3'),
(13, 4, 27, 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_instansi` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `username`, `nama_instansi`, `alamat`, `email`, `no_telp`, `fax`, `website`, `deskripsi`, `password`, `foto`, `is_active`) VALUES
(1, 'perusahaan', 'tekstil', 'Malang', 'perusahaan@gmail.com', '123', '123', 'mm.com', 'tes seh', '0192023a7bbd73250516f069df18b500', 'd07f08b6c4c6e260f7ecc827662a8014.png', 1),
(2, 'ebengkel', 'bengkel', 'malang', 'bengkel@gmail.com', '1221321', '1212121', 'bengkel.com', 'pokoknya ini deskripsi', '0192023a7bbd73250516f069df18b500', 'bd83555a70531780c67968c6ecd2d8a8.jpg', 1),
(3, 'perusahaan2', 'coba', '', 'perusahaan2@gmail.com', '', '', '', '', '1e929bacafd5f92a9e548ad384fcde43', '', 1),
(5, 'perusahaan3', 'perus', 'malang', 'perusahaan3@gmail.com', '3213', '3213', 'tes.com', 'deskrip', '2aa14cda0501f697a4da80eb8503db8d', '4a5333ea62842b25f94cd5f4b0c6a53e.jpg', 1),
(7, 'indmrt', 'indomaret', 'Turen', 'indomaret@gmail.com', '0812345434543', '0341345434', 'indomaret.com', 'pelayanan dibidang jasa', '990d76ffafb01bcd9dd6ecd7edbfee4a', 'default.png', 1),
(8, 'infomedia', 'PT Infomedia Indonesia', 'jl malang', 'infomedia@gmail.com', '12', '12', 'web.com', 'tetete', '0192023a7bbd73250516f069df18b500', 'default.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id_sertif` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `create_at` int(11) NOT NULL DEFAULT current_timestamp(),
  `id_mahasiswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sertifikat`
--

INSERT INTO `sertifikat` (`id_sertif`, `nama_file`, `create_at`, `id_mahasiswa`) VALUES
(8, '13__Internasionalisasi_Karir.pdf', 2147483647, 3),
(9, '09012021_Undangan_Sos_MSIB_2022.pdf', 2147483647, 3),
(10, '04-2022-PENGUMUMAN_DAFUL_KERINGANAN.pdf', 2147483647, 3),
(11, '07-2022-PENGUMUMAN_SYARAT_SKLA.pdf', 2147483647, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `nama_skill` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `skill`
--

INSERT INTO `skill` (`id`, `nama_skill`) VALUES
(1, 'Web Master'),
(2, 'Web Programming'),
(3, 'Web Design'),
(4, 'Digital Marketing'),
(5, 'Graphic Design');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `pekerjaan` ADD FULLTEXT KEY `id_skill` (`id_skill`);

--
-- Indeks untuk tabel `pelamar`
--
ALTER TABLE `pelamar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`id_sertif`);

--
-- Indeks untuk tabel `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `pelamar`
--
ALTER TABLE `pelamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `id_sertif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
