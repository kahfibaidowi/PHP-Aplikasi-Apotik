#
# TABLE STRUCTURE FOR: tb_pegawai
#

DROP TABLE IF EXISTS `tb_pegawai`;

CREATE TABLE `tb_pegawai` (
  `nip` varchar(15) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `aktif` varchar(2) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tb_pegawai` (`nip`, `nama_lengkap`, `alamat`, `no_telp`, `level`, `aktif`) VALUES ('190201', 'Reza Aditya Ramadhani', 'ds plumpungrejo kec wonoasri madiun  rt 16 rw 03', '081932785342', 'gudang', 'n');
INSERT INTO `tb_pegawai` (`nip`, `nama_lengkap`, `alamat`, `no_telp`, `level`, `aktif`) VALUES ('190202', 'Fahrul Firmansyah', 'wonoasri madiun rt 16 rw 03', '078948264824', 'pelayanan', 'y');
INSERT INTO `tb_pegawai` (`nip`, `nama_lengkap`, `alamat`, `no_telp`, `level`, `aktif`) VALUES ('190203', 'Laila Nurul Hidayah', 'dk pelem ds purwosari kec wonoasri madiun', '078958663764', 'administrator', 'n');
INSERT INTO `tb_pegawai` (`nip`, `nama_lengkap`, `alamat`, `no_telp`, `level`, `aktif`) VALUES ('678234', 'Faizal Fakhri Irfani', 'cilacap', '081289765323', 'gudang', 'y');
INSERT INTO `tb_pegawai` (`nip`, `nama_lengkap`, `alamat`, `no_telp`, `level`, `aktif`) VALUES ('678912', 'Aric Suprasetyo', 'sobrah', '089897675734', 'gudang', 'y');
INSERT INTO `tb_pegawai` (`nip`, `nama_lengkap`, `alamat`, `no_telp`, `level`, `aktif`) VALUES ('789123', 'Kahfi Baidowi', 'dk Gebangarum ds Plumpungrejo Wonoasri, Madiun', '087887654239', 'administrator', 'y');


#
# TABLE STRUCTURE FOR: tb_obat
#

DROP TABLE IF EXISTS `tb_obat`;

CREATE TABLE `tb_obat` (
  `id_obat` int(11) NOT NULL AUTO_INCREMENT,
  `nama_obat` varchar(30) CHARACTER SET latin1 NOT NULL,
  `satuan` varchar(15) CHARACTER SET latin1 NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  PRIMARY KEY (`id_obat`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `satuan`, `harga`, `stok`) VALUES (1, 'minyak butbut', 'botol', 70000, 83);
INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `satuan`, `harga`, `stok`) VALUES (2, 'paramex', 'tablet', 3000, 268);
INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `satuan`, `harga`, `stok`) VALUES (3, 'acylovir', 'sachet', 25000, 12);
INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `satuan`, `harga`, `stok`) VALUES (4, 'counterpain', 'sachet', 15000, 96);
INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `satuan`, `harga`, `stok`) VALUES (5, 'minyak tawon', 'botol', 30000, 22);
INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `satuan`, `harga`, `stok`) VALUES (6, 'balsem lang', 'botol', 5000, 31);
INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `satuan`, `harga`, `stok`) VALUES (7, 'bodrex', 'sachet', 2500, 186);
INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `satuan`, `harga`, `stok`) VALUES (8, 'Strepsils', 'sachet', 7000, 53);
INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `satuan`, `harga`, `stok`) VALUES (10, 'Hachijo', 'botol', 80000, 3);
INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `satuan`, `harga`, `stok`) VALUES (11, 'Minyak Telon Cap Lang', 'botol', 15000, 5);
INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `satuan`, `harga`, `stok`) VALUES (12, 'panadol', 'sachet', 1500, 17);
INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `satuan`, `harga`, `stok`) VALUES (13, 'contrexyn', 'sachet', 1500, 50);
INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `satuan`, `harga`, `stok`) VALUES (14, 'soffell', 'sachet', 500, 897);
INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `satuan`, `harga`, `stok`) VALUES (15, 'konidin', 'tablet', 2000, 86);
INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `satuan`, `harga`, `stok`) VALUES (16, 'konidin obh', 'botol', 8000, 19);
INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `satuan`, `harga`, `stok`) VALUES (17, 'obh combi', 'botol', 15000, 78);
INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `satuan`, `harga`, `stok`) VALUES (18, 'kalpana\'', 'lain lain', 30000, 8);


#
# TABLE STRUCTURE FOR: tb_transaksi
#

DROP TABLE IF EXISTS `tb_transaksi`;

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(15) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

INSERT INTO `tb_transaksi` (`id_transaksi`, `nip`, `nama_lengkap`, `tgl_transaksi`) VALUES (1, '789123', 'Laila Nurul', '2019-02-12');
INSERT INTO `tb_transaksi` (`id_transaksi`, `nip`, `nama_lengkap`, `tgl_transaksi`) VALUES (2, '789123', 'kahfi baidowi', '2019-02-14');
INSERT INTO `tb_transaksi` (`id_transaksi`, `nip`, `nama_lengkap`, `tgl_transaksi`) VALUES (3, '789123', 'reza aditya ramadhani', '2019-02-14');
INSERT INTO `tb_transaksi` (`id_transaksi`, `nip`, `nama_lengkap`, `tgl_transaksi`) VALUES (4, '789123', 'dian ayu', '2019-02-14');
INSERT INTO `tb_transaksi` (`id_transaksi`, `nip`, `nama_lengkap`, `tgl_transaksi`) VALUES (5, '789123', 'fahrul firmansyah', '2019-02-14');
INSERT INTO `tb_transaksi` (`id_transaksi`, `nip`, `nama_lengkap`, `tgl_transaksi`) VALUES (6, '789123', 'kahfi baidowi', '2019-02-15');
INSERT INTO `tb_transaksi` (`id_transaksi`, `nip`, `nama_lengkap`, `tgl_transaksi`) VALUES (7, '789123', 'ikmah', '2019-02-15');
INSERT INTO `tb_transaksi` (`id_transaksi`, `nip`, `nama_lengkap`, `tgl_transaksi`) VALUES (8, '190202', 'trisky', '2019-02-15');
INSERT INTO `tb_transaksi` (`id_transaksi`, `nip`, `nama_lengkap`, `tgl_transaksi`) VALUES (9, '190202', 'ninda', '2019-02-15');
INSERT INTO `tb_transaksi` (`id_transaksi`, `nip`, `nama_lengkap`, `tgl_transaksi`) VALUES (10, '190202', 'rifda', '2019-02-15');
INSERT INTO `tb_transaksi` (`id_transaksi`, `nip`, `nama_lengkap`, `tgl_transaksi`) VALUES (11, '190202', 'riska', '2019-02-16');
INSERT INTO `tb_transaksi` (`id_transaksi`, `nip`, `nama_lengkap`, `tgl_transaksi`) VALUES (12, '789123', 'eriska rein', '2019-02-17');
INSERT INTO `tb_transaksi` (`id_transaksi`, `nip`, `nama_lengkap`, `tgl_transaksi`) VALUES (13, '789123', 'rahma', '2019-02-19');
INSERT INTO `tb_transaksi` (`id_transaksi`, `nip`, `nama_lengkap`, `tgl_transaksi`) VALUES (14, '789123', 'rifka', '2019-02-19');
INSERT INTO `tb_transaksi` (`id_transaksi`, `nip`, `nama_lengkap`, `tgl_transaksi`) VALUES (15, '789123', 'maya', '2019-02-19');
INSERT INTO `tb_transaksi` (`id_transaksi`, `nip`, `nama_lengkap`, `tgl_transaksi`) VALUES (16, '789123', 'astri', '2019-02-19');
INSERT INTO `tb_transaksi` (`id_transaksi`, `nip`, `nama_lengkap`, `tgl_transaksi`) VALUES (17, '789123', 'hani', '2019-02-20');
INSERT INTO `tb_transaksi` (`id_transaksi`, `nip`, `nama_lengkap`, `tgl_transaksi`) VALUES (18, '190202', 'dika', '2019-02-20');
INSERT INTO `tb_transaksi` (`id_transaksi`, `nip`, `nama_lengkap`, `tgl_transaksi`) VALUES (19, '789123', 'fariha', '2019-02-22');
INSERT INTO `tb_transaksi` (`id_transaksi`, `nip`, `nama_lengkap`, `tgl_transaksi`) VALUES (20, '789123', 'luki', '2019-02-24');
INSERT INTO `tb_transaksi` (`id_transaksi`, `nip`, `nama_lengkap`, `tgl_transaksi`) VALUES (21, '789123', 'viya', '2019-02-24');
INSERT INTO `tb_transaksi` (`id_transaksi`, `nip`, `nama_lengkap`, `tgl_transaksi`) VALUES (22, '789123', '', '2019-02-24');
INSERT INTO `tb_transaksi` (`id_transaksi`, `nip`, `nama_lengkap`, `tgl_transaksi`) VALUES (23, '789123', 'fariha', '2019-02-24');
INSERT INTO `tb_transaksi` (`id_transaksi`, `nip`, `nama_lengkap`, `tgl_transaksi`) VALUES (24, '190202', 'arif', '2019-02-24');
INSERT INTO `tb_transaksi` (`id_transaksi`, `nip`, `nama_lengkap`, `tgl_transaksi`) VALUES (25, '190202', 'sintiya', '2019-02-24');


#
# TABLE STRUCTURE FOR: tb_login
#

DROP TABLE IF EXISTS `tb_login`;

CREATE TABLE `tb_login` (
  `nip` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tb_login` (`nip`, `password`, `last_login`) VALUES ('190202', '20700602d722c7b5193885fbdcb6a3fd69bf3cda', '2019-02-24 19:21:57');
INSERT INTO `tb_login` (`nip`, `password`, `last_login`) VALUES ('554221', '88bbe8a15615fd33256340fec6c437fda12a07cf', '0000-00-00 00:00:00');
INSERT INTO `tb_login` (`nip`, `password`, `last_login`) VALUES ('678234', 'a6addb9ffb18bd870b260590177a30e43a3d218d', '2019-02-20 21:12:40');
INSERT INTO `tb_login` (`nip`, `password`, `last_login`) VALUES ('678912', '249667a843553f60f916ef96fb5698a87f0da863', '2019-02-15 19:13:41');
INSERT INTO `tb_login` (`nip`, `password`, `last_login`) VALUES ('789123', '807237893baa73d6b7361c339a8145234614fc5a', '2019-02-25 11:24:32');


#
# TABLE STRUCTURE FOR: tb_detail_transaksi
#

DROP TABLE IF EXISTS `tb_detail_transaksi`;

CREATE TABLE `tb_detail_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (1, 2, 2, 3000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (1, 5, 1, 30000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (2, 3, 1, 25000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (2, 2, 2, 3000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (2, 1, 1, 70000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (3, 5, 1, 30000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (3, 12, 2, 1500);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (4, 2, 2, 3000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (4, 5, 1, 30000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (5, 10, 1, 80000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (6, 8, 1, 7000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (7, 8, 1, 7000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (7, 14, 5, 500);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (8, 12, 2, 1500);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (8, 2, 1, 3000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (9, 2, 2, 3000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (10, 1, 1, 70000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (10, 2, 2, 3000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (11, 16, 1, 8000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (11, 15, 2, 2000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (12, 3, 2, 25000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (12, 2, 1, 3000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (13, 6, 1, 5000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (13, 10, 1, 80000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (14, 10, 1, 80000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (14, 7, 1, 2500);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (15, 10, 2, 80000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (15, 15, 1, 2000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (16, 2, 1, 3000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (16, 1, 1, 70000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (17, 3, 1, 25000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (17, 1, 1, 70000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (18, 11, 1, 15000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (18, 8, 1, 7000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (19, 12, 2, 1500);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (20, 2, 1, 3000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (20, 1, 1, 70000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (21, 4, 1, 15000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (22, 18, 1, 30000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (23, 1, 1, 70000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (23, 10, 1, 80000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (24, 1, 1, 70000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (24, 5, 1, 30000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (25, 1, 1, 70000);
INSERT INTO `tb_detail_transaksi` (`id_transaksi`, `id_obat`, `qty`, `harga`) VALUES (25, 10, 1, 80000);


