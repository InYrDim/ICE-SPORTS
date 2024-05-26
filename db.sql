CREATE DATABASE db_ice_sports;
 
CREATE TABLE `db_ice_sports`.`divisi` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nama_divisi` VARCHAR(20) NOT NULL UNIQUE,
  `tugas` VARCHAR(50) NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;
 
INSERT INTO `db_ice_sports`.`divisi` (`nama_divisi`, `tugas`) VALUES
('Perlengkapan', 'Menyediakan perlengkapan olahraga'),
('Konsumsi', 'Mengatur penyediaan makanan dan minuman'),
('Acara', 'Mengatur jalannya acara-acara'),
('Pub Dok', 'Mengurus publikasi dan dokumentasi'),
('Kesekretariatan', 'Mengurus administrasi dan surat-menyurat'),
('Perlengkapan Medis', 'Menyediakan perlengkapan medis'),
('Konsumsi Atlet', 'Mengatur penyediaan makanan untuk atlet'),
('Acara Pembukaan', 'Mengatur acara pembukaan'),
('Pub Dok Hasil', 'Mempublikasikan hasil pertandingan'),
('Sekretariat Registrasi', 'Mengurus registrasi peserta');
 
CREATE TABLE `db_ice_sports`.`mahasiswa` (
  `nim` INT(12) NOT NULL UNIQUE,
  `nama` VARCHAR(20) NULL DEFAULT NULL,
  `role` VARCHAR(10) NOT NULL ,
  `kelas` VARCHAR(20) NULL DEFAULT NULL,
  `angkatan` YEAR NULL DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB;
 
INSERT INTO `db_ice_sports`.mahasiswa (`nim`, `nama`, `role`, `kelas`, `angkatan`) VALUES
(202212345, 'Ahmad Setiawan', 'Peserta', 'Kelas A', 2022),
(202112346, 'Siti Nurhaliza', 'Panitia', 'Kelas B', 2021),
(202012347, 'Budi Santoso', 'Peserta', 'Kelas C', 2020),
(201912348, 'Dewi Lestari', 'Panitia', 'Kelas D', 2019),
(202212349, 'Eko Prasetyo', 'Peserta', 'Kelas A', 2022),
(202112350, 'Fitri Ayu', 'Panitia', 'Kelas B', 2021),
(202012351, 'Guntur Hidayat', 'Peserta', 'Kelas C', 2020),
(201912352, 'Hesti Wulandari', 'Panitia', 'Kelas D', 2019),
(202212353, 'Indra Kusuma', 'Peserta', 'Kelas A', 2022),
(202112354, 'Joko Susanto', 'Panitia', 'Kelas B', 2021);
 
CREATE TABLE `db_ice_sports`.`cabang_olahraga` (
  `id_cabor` INT NOT NULL AUTO_INCREMENT,
  `nama_cabor` VARCHAR(20) NOT NULL UNIQUE,
  `deskripsi` VARCHAR(600) NULL DEFAULT NULL,
  `aturan` VARCHAR(600) NULL DEFAULT NULL,
  PRIMARY KEY (`id_cabor`)
) ENGINE=InnoDB;
 
INSERT INTO `db_ice_sports`.`cabang_olahraga` (`nama_cabor`, `deskripsi`, `aturan`) VALUES
('Hoki Es', 'Olahraga tim yang dimainkan di atas es dengan menggunakan stik dan puck untuk mencetak gol ke gawang lawan.', 'Aturan resmi IIHF (International Ice Hockey Federation)'),
('Seluncur Es', 'Olahraga individu yang dilakukan di atas es dengan menggunakan sepatu khusus untuk melakukan gerakan artistik, lompatan, dan putaran.', 'Aturan resmi ISU (International Skating Union)'),
('Ski Lintas Alam', 'Olahraga dengan menggunakan papan ski di atas lintasan bersalju untuk menempuh jarak tertentu dalam waktu sesingkat mungkin.', 'Aturan resmi FIS (Fédération Internationale de Ski)'),
('Snowboard', 'Olahraga dengan meluncur di atas papan di atas lereng bersalju untuk melakukan trik-trik dan gerakan menantang.', 'Aturan resmi FIS (Fédération Internationale de Ski)'),
('Curling', 'Olahraga tim yang dimainkan di atas es dengan meluncurkan batu ke arah sasaran.', 'Aturan resmi WCF (World Curling Federation)'),
('Ski Akrobatik', 'Olahraga dengan melakukan trik dan gerakan akrobatik di udara saat bermain ski.', 'Aturan resmi FIS (Fédération Internationale de Ski)'),
('Luncur Salju', 'Olahraga dengan meluncur di lereng bersalju menggunakan papan khusus.', 'Aturan resmi FIS (Fédération Internationale de Ski)'),
('Ski Nordik', 'Olahraga dengan bermain ski di lintasan dengan menggunakan teknik khusus.', 'Aturan resmi FIS (Fédération Internationale de Ski)'),
('Hoki Es Putri', 'Olahraga hoki es yang dimainkan oleh tim putri.', 'Aturan resmi IIHF (International Ice Hockey Federation)'),
('Seluncur Es Tunggal', 'Olahraga seluncur es yang dilakukan secara individu tanpa pasangan.', 'Aturan resmi ISU (International Skating Union)');
 
 
CREATE TABLE `db_ice_sports`.`tempat` (
  `id_tempat` INT NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(20) NOT NULL UNIQUE,
  `lokasi` VARCHAR(50) NULL DEFAULT NULL,
  `kapasitas` INT(5) NULL DEFAULT NULL,
  `keterangan` VARCHAR(50) NULL DEFAULT NULL,
  PRIMARY KEY (`id_tempat`)
) ENGINE=InnoDB;
 
INSERT INTO `db_ice_sports`.`tempat` (`nama`, `lokasi`, `kapasitas`, `keterangan`) VALUES
('Stadion Gelora Es', 'Jakarta, Indonesia', 15000, 'Stadion utama untuk hoki es dan seluncur cepat.'),
('Arena Salju Abadi', 'Bandung, Indonesia', 8000, 'Arena untuk berbagai olahraga es.'),
('Pusat Olahraga Es', 'Surabaya, Indonesia', 5000, 'Fasilitas untuk bobsleigh dan luge.'),
('Kompleks Es Nusantara', 'Medan, Indonesia', 6000, 'Tempat untuk seluncur cepat trek pendek.'),
('Gelanggang Es Bintang', 'Yogyakarta, Indonesia', 7000, 'Acara seluncur indah dan hoki es.'),
('Arena Es Sejuta Warna', 'Denpasar, Indonesia', 9000, 'Tempat untuk bandy dan skeleton.'),
('Stadion Es Merdeka', 'Makassar, Indonesia', 10000, 'Stadion baru untuk berbagai olahraga es.'),
('Olahraga Musim Dingin', 'Palembang, Indonesia', 12000, 'Kompleks untuk acara internasional.'),
('Arena Salju Lembah', 'Malang, Indonesia', 8500, 'Pertandingan curling dan bobsleigh.'),
('Gelanggang Salju Garuda', 'Semarang, Indonesia', 11000, 'Kompetisi seluncur cepat dan hoki es.');
 
 
CREATE TABLE `db_ice_sports`.`jobdesk` (
  `id_jobdesk` INT NOT NULL AUTO_INCREMENT,
  `id_mahasiswa` INT(12) NOT NULL,
  `id_divisi` INT NOT NULL,
  `deskripsi_jobdesk` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`id_jobdesk`),
  FOREIGN KEY (`id_mahasiswa`) REFERENCES `mahasiswa`(`nim`) ON UPDATE CASCADE ON DELETE CASCADE,
  FOREIGN KEY (`id_divisi`) REFERENCES `divisi`(`id`) ON UPDATE CASCADE ON DELETE CASCADE
) ENGINE=InnoDB;
 
INSERT INTO `db_ice_sports`.`jobdesk` (`id_mahasiswa`, `id_divisi`) VALUES
(201912348, 1),
(201912348, 2),
(201912352, 3),
(201912352, 4),
(202112346, 5),
(202112350, 1),
(202112350, 2),
(202112354, 3),
(202112354, 4),
(202112354, 5);
 
CREATE TABLE `db_ice_sports`.`Pertandingan` (
  `id_pertandingan` INT NOT NULL AUTO_INCREMENT,
  `id_cabang_olahraga` INT NOT NULL,
  `id_penanggung_jawab` INT(12) NOT NULL,
  `tanggal` DATE NOT NULL,
  `id_tempat` INT NOT NULL,
  PRIMARY KEY (`id_pertandingan`),
  FOREIGN KEY (`id_cabang_olahraga`) REFERENCES `cabang_olahraga`(`id_cabor`),
  FOREIGN KEY (`id_penanggung_jawab`) REFERENCES `mahasiswa`(`nim`),
  FOREIGN KEY (`id_tempat`) REFERENCES `tempat`(`id_tempat`)
) ENGINE=InnoDB;
 
INSERT INTO `db_ice_sports`.`Pertandingan` (`id_cabang_olahraga`, `id_penanggung_jawab`, `tanggal`, `id_tempat`) VALUES
(3, 202112346, '2024-07-22', 4),
(1, 201912348, '2024-12-10', 1),
(6, 202112350, '2025-03-05', 10),
(9, 202112350, '2024-08-15', 8),
(2, 201912348, '2024-11-25', 2),
(5, 201912352, '2024-06-18', 5),
(8, 202112346, '2025-01-03', 6),
(4, 202112354, '2024-09-28', 7),
(7, 202112346, '2024-05-12', 3),
(10, 202112350, '2024-10-31', 9);
 
 
CREATE VIEW `db_ice_sports`.peserta AS SELECT * FROM `db_ice_sports`.mahasiswa WHERE role = 'Peserta';
CREATE VIEW `db_ice_sports`.panitia AS SELECT * FROM `db_ice_sports`.mahasiswa WHERE role = 'Panitia';