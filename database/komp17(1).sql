-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Mar 2011 pada 05.54
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `komp17`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
`id_anggota` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `no_tlp` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `gambar` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `username`, `password`, `no_tlp`, `alamat`, `gambar`, `status`) VALUES
(1, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '098098098', 'tulungagung', '../../assets/img/20110308051034phone_07.png', '1'),
(2, 'junico', 'c4ca4238a0b923820dcc509a6f75849b', '098708098', 'kepatihan ', '../../assets/img/20110308094952bb_03.jpg', '1'),
(3, 'kiki', 'c4ca4238a0b923820dcc509a6f75849b', '089782981990', 'Jl. Letjend Suprapto No.101 E, Jawa Timur', '../../assets/img/20110309045408Hydrangeas.jpg', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
`id_artikel` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  `tgl` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi`, `gambar`, `tgl`) VALUES
(1, 'robot Moderns', 'JPL RoboSimian, Robot Kera Dengan Empat Anggota Badan Multi Sendi & Tangan Unik Yang Dapat Bergerak Secara Lebih Fleksibel\r\nAuthor thePinkFighter, 21 Aug 2013\r\n 0 komentar\r\n \r\nSetelah sukses menghadirkan beberapa robot Mars Rovers tangguh yang ditujukan untuk keperluan misi penjelajahan luar angkasa di planet Mars, tim NASA JPL kabarnya telah kembali menggarap proyek-proyek robot yang lebih duniawi.\r\n\r\n\r\n\r\n\r\nDikenal sebagai RoboSimian, robot JPL terbaru ini mirip seekor kera yang dirancang khusus untuk misi pencarian dan penyelamatan yang diperkirakan akan segera bersaing dalam ajang kompetisi DARPA Robotics Challenge.\r\n\r\nKeempat anggota badan multi sendi dengan tangan unik yang tidak jelas mana bagian depan atau belakangnya, memungkinkan robot ini bisa bergerak secara lebih fleksibel. Terlebih berkat gerakan dan posturnya yang mirip seperti primata (kera), robot ini kabarnya sanggup dinavigasikan pada medan yang sulit, jenjang tangga yang menanjak, dan bahkan mengendarai kendaraan sekalipun.\r\n\r\nMeskipun proyek robot ini bukanlah hal yang baru, namun JPL kabarnya baru saja mempublikasi video menarik yang menunjukkan RoboSimian bisa mencekram sebuah tools, mengangkat beratnya sendiri dan menyeimbangkan benda-benda halus.       ', '../../../assets/img/20110308035638robosimian01.jpg', '08-03-2011'),
(2, 'Martin Jetpack ', 'Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . Penemuan yang paling menghebohkan di dunia . ', '../../../assets/img/20110309032824martin-jetpack.jpg', '09-03-2011'),
(3, 'google glass', 'Kacamata google-glass . Produk terbaru yang dikembangkan oleh amerika . Kacamata google-glass . Produk terbaru yang dikembangkan oleh amerika . Kacamata google-glass . Produk terbaru yang dikembangkan oleh amerika . Kacamata google-glass . Produk terbaru yang dikembangkan oleh amerika . Kacamata google-glass . Produk terbaru yang dikembangkan oleh amerika . Kacamata google-glass . Produk terbaru yang dikembangkan oleh amerika . Kacamata google-glass . Produk terbaru yang dikembangkan oleh amerika .     ', '../../../assets/img/20110309050211google-glass.jpg', '09-03-2011'),
(4, 'mesin printer makanan instan', 'Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil Mesin ini terbuat dari bahan anti karat . Yang tentunnya juga berkualitas tinggi. Hasil ', '../../../assets/img/201103090506093d-pizza-mesin-printer-makanan-instan.jpg', '09-03-2011');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
`id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `stok` int(50) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` text NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga`, `stok`, `keterangan`, `gambar`, `kategori`) VALUES
(3, 'Baju Spongebob', 120000, 0, 'baju khusus baju khusus baju khusus baju khusus baju khusus baju khusus baju khusus baju khusus           ', '../../../assets/img/20110309050046Jaket Spongebob (Kids) - 7938.jpg', 'anak - anak'),
(5, 'baju koko', 100000, 5, 'baju dengan kain halus dan design menarik . baju dengan kain halus dan design menarik . baju dengan kain halus dan design menarik . baju dengan kain halus dan design menarik . baju dengan kain halus dan design menarik . baju dengan kain halus dan design menarik . baju dengan kain halus dan design menarik . baju dengan kain halus dan design menarik . baju dengan kain halus dan design menarik . baju dengan kain halus dan design menarik . baju dengan kain halus dan design menarik .   ', '../../../assets/img/20110308095511Baju Koko Lengan Panjang - 7870_1.jpg', 'islam'),
(6, 'white islamic', 120000, 6, 'baju koko warna putih dengan bahan kain sejuk . baju koko warna putih dengan bahan kain sejuk . baju koko warna putih dengan bahan kain sejuk . baju koko warna putih dengan bahan kain sejuk . baju koko warna putih dengan bahan kain sejuk . ', '../../../assets/img/20110308095545Sarimbit Fatima Couple - 5535_2.jpg', 'islam'),
(7, 'kaos laki - laki', 100000, 10, 'kaos untuk laki - laki. bahan katun . kaos untuk laki - laki. bahan katun . kaos untuk laki - laki. bahan katun . kaos untuk laki - laki. bahan katun . kaos untuk laki - laki. bahan katun . kaos untuk laki - laki. bahan katun . kaos untuk laki - laki. bahan katun . kaos untuk laki - laki. bahan katun .   ', '../../../assets/img/20110309034122Man Round Neck - 4918.jpg', 'baju'),
(8, 'kaos', 100000, 10, 'kaos dari bahan katun. Kualitas terjamin . kaos dari bahan katun. Kualitas terjamin . kaos dari bahan katun. Kualitas terjamin . kaos dari bahan katun. Kualitas terjamin . ', '../../../assets/img/20110309030834Batman Boy Tee - 4919.jpg', 'baju'),
(9, 'Kayana Batik Dress', 100000, 9, 'kayana batik dress . design modern . kayana batik dress . design modern . kayana batik dress . design modern . kayana batik dress . design modern . kayana batik dress . design modern . ', '../../../assets/img/20110309031155Kayana Batik Dress - 3612_1.jpg', 'batik'),
(10, 'Batik Long Dress ', 100000, 10, 'Batik Long Dress - 8393. design menarik . Batik Long Dress - 8393. design menarik . Batik Long Dress - 8393. design menarik . ', '../../../assets/img/20110309031357Batik Long Dress - 8393.jpg', 'batik'),
(11, 'Simply Blouse Long Sleeves ', 400000, 10, 'Simply Blouse Long Sleeves. Pas dikenakan di musim panas . Simply Blouse Long Sleeves. Pas dikenakan di musim panas . Simply Blouse Long Sleeves. Pas dikenakan di musim panas . ', '../../../assets/img/20110309031445Simply Blouse Long Sleeves - 4746_1.jpg', 'baju'),
(12, 'Simply Blouse Long Sleeves - 4746_2', 70000, 10, 'Simply Blouse Long Sleeves. Cocok untuk anda . Simply Blouse Long Sleeves. Cocok untuk anda . ', '../../../assets/img/20110309031555Simply Blouse Long Sleeves - 4746_2.jpg', 'baju'),
(13, 'Hand Phone XXX', 1500000, 9, 'hand phone canggih. dilengkapi berbagai aplikasi menarik di dalamnya . hand phone canggih. dilengkapi berbagai aplikasi menarik di dalamnya . hand phone canggih. dilengkapi berbagai aplikasi menarik di dalamnya . hand phone canggih. dilengkapi berbagai aplikasi menarik di dalamnya . hand phone canggih. dilengkapi berbagai aplikasi menarik di dalamnya . ', '../../../assets/img/201103090420361.-Tips-Hadapi-Pacar-yang-Sibuk-dengan-Smartphone-nya-2.jpg', 'elektronik'),
(14, 'Gracia Shirt', 100000, 12, 'Gracia Shirt bahan katun. sejuk di badan. Gracia Shirt bahan katun. sejuk di badan. Gracia Shirt bahan katun. sejuk di badan. Gracia Shirt bahan katun. sejuk di badan. ', '../../../assets/img/20110309042144Gracia Shirt - 8536.jpg', 'baju'),
(15, 'Overall Denim With Inner', 300000, 9, 'Overall Denim With Inner. Tampilan menarik. Kualitas internasiaonal . Overall Denim With Inner. Tampilan menarik. Kualitas internasiaonal . Overall Denim With Inner. Tampilan menarik. Kualitas internasiaonal . ', '../../../assets/img/20110309042241Overall Denim With Inner - 8362.jpg', 'wanita'),
(16, 'Dress Lacey - 8530', 400000, 30, 'Tampil menarik. cocok untuk anda ketika bepergian . Tampil menarik. cocok untuk anda ketika bepergian . ', '../../../assets/img/20110309042327Dress Lacey - 8530.jpg', 'wanita'),
(17, 'Setelan Rok Chanel ', 70000, 30, 'Setelan Rok Chanel . Design menarik . cocok untuk anda . Setelan Rok Chanel . Design menarik . cocok untuk anda . ', '../../../assets/img/20110309045000Setelan Rok Chanel - 8457.jpg', 'wanita'),
(18, '3 in 1 Hijab Sungkar', 300000, 20, '3 in 1 Hijab Sungkar terbuat dari bahan yang lembut. Nyaman untuk dikenakan . 3 in 1 Hijab Sungkar terbuat dari bahan yang lembut. Nyaman untuk dikenakan . ', '../../../assets/img/201103090459123 in 1 Hijab Sungkar - 8441.jpg', 'islam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id_kategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'anak - anak'),
(3, 'baju'),
(4, 'islam'),
(5, 'batik'),
(6, 'elektronik'),
(7, 'wanita');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE IF NOT EXISTS `keranjang` (
`id_keranjang` int(11) NOT NULL,
  `jml` int(50) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `id_barang` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `jml`, `tgl`, `username`, `nama_barang`, `status`, `id_barang`) VALUES
(9, 1, '08-03-2011', 'user', 'Baju anak - anak', '2', '3'),
(10, 1, '08-03-2011', 'user', 'Baju anak - anak', '2', '3'),
(12, 3, '09-03-2011', 'user', 'baju koko', '2', '5'),
(13, 1, '09-03-2011', 'junico', 'Kayana Batik Dress', '2', '9'),
(14, 1, '09-03-2011', 'junico', 'baju koko', '2', '5'),
(15, 1, '09-03-2011', 'kiki', 'Hand Phone XXX', '2', '13'),
(16, 4, '09-03-2011', 'kiki', 'white islamic', '2', '6'),
(17, 1, '09-03-2011', 'kiki', 'Overall Denim With Inner', '2', '15'),
(18, 1, '11-03-2011', 'junico', 'baju koko', '2', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `id_barang` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `username`, `tgl`, `isi`, `id_barang`) VALUES
(1, 'tes', '08-03-2011', '', 'bagus\r\n'),
(2, 'tes', '08-03-2011', 'bagus nih\r\n', '3'),
(3, 'user', '08-03-2011', 'ayo lagi\r\n', '3'),
(4, 'tes 2', '08-03-2011', 'haha', '3'),
(5, 'junico', '09-03-2011', 'wahh . bagus batiknya\r\n', '9'),
(6, 'junico', '09-03-2011', 'warnanya menarik', '5'),
(7, 'kiki', '09-03-2011', 'keren nih', '9'),
(8, 'kiki', '09-03-2011', 'aku suka\r\n', '12'),
(9, 'kiki', '09-03-2011', 'aku mau dong', '13'),
(10, 'kiki', '09-03-2011', 'bagus\r\n', '15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `id_barang` varchar(50) NOT NULL,
  `jml_rating` int(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `rating`
--

INSERT INTO `rating` (`id`, `username`, `id_barang`, `jml_rating`) VALUES
(3, 'user', '3', 4),
(4, 'junico', '5', 2),
(5, 'user', '5', 4),
(6, 'user', '6', 2),
(7, 'junico', '9', 2),
(8, 'junico', '3', 5),
(9, 'kiki', '3', 1),
(10, 'kiki', '13', 3),
(11, 'admin', '3', 1),
(12, 'kiki', '15', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`id_transaksi` int(11) NOT NULL,
  `id_barang` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `total` int(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jml` int(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_barang`, `username`, `status`, `total`, `nama_barang`, `jml`) VALUES
(8, 3, 'user', '1', 0, '1', 0),
(9, 3, 'user', '1', 0, '1', 0),
(10, 5, 'user', '1', 0, '3', 0),
(11, 5, 'junico', '1', 0, '1', 0),
(12, 9, 'junico', '1', 0, '1', 0),
(13, 6, 'kiki', '1', 0, '4', 0),
(14, 13, 'kiki', '1', 0, '1', 0),
(15, 15, 'kiki', '1', 0, '1', 0),
(16, 5, 'junico', '1', 0, '1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
 ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
 ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
 ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
 ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
