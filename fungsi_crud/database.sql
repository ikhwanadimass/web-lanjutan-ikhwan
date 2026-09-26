-- Database: berita
CREATE DATABASE IF NOT EXISTS berita;
USE berita;

-- Struktur tabel berita
CREATE TABLE IF NOT EXISTS berita (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    gambar VARCHAR(255) DEFAULT '',
    isi TEXT NOT NULL,
    penulis VARCHAR(100) NOT NULL,
    tanggal DATE NOT NULL
);
