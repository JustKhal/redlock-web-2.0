CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(365) NOT NULL,
  `Alamat` varchar(365) NOT NULL,
  `Jabatan` varchar(365) NOT NULL,
  PRIMARY KEY (`ID`)
);

INSERT INTO users (id, nama, alamat, jabatan)
VALUES ('1', 'Agus', 'Kober', 'Admin');
INSERT INTO users (id, nama, alamat, jabatan)
VALUES ('2', 'Budi', 'Gedong', 'Manager');
INSERT INTO users (id, nama, alamat, jabatan)
VALUES ('3', 'Cecep', 'Tengah', 'OB');
