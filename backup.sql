
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+07:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE TABLE buku_tamu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_lengkap VARCHAR(100),
    instansi VARCHAR(100),
    tujuan TEXT,
    waktu_kedatangan DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO buku_tamu (nama_lengkap, instansi, tujuan, waktu_kedatangan) VALUES
('Ahmad Yani', 'Universitas Negeri Jakarta', 'Mengurus surat rekomendasi', '2025-05-17 08:30:00'),
('Siti Nurhaliza', 'PT Telekomunikasi Indonesia', 'Rapat koordinasi proyek', '2025-05-17 09:15:00'),
('Budi Santoso', 'Kementerian Pendidikan', 'Peninjauan fasilitas', '2025-05-17 10:00:00'),
('Dewi Lestari', 'Bank Mandiri', 'Presentasi produk perbankan', '2025-05-17 10:45:00'),
('Rizki Hidayat', 'SMAN 1 Jakarta', 'Kunjungan edukatif', '2025-05-17 11:30:00'),
('Nina Kusuma', 'PT Astra Honda Motor', 'Pelatihan dan seminar', '2025-05-17 13:00:00'),
('Taufik Hidayat', 'Universitas Indonesia', 'Penelitian lapangan', '2025-05-17 13:45:00'),
('Linda Mariani', 'BPJS Kesehatan', 'Sosialisasi program baru', '2025-05-17 14:30:00'),
('Agus Salim', 'Pemprov DKI Jakarta', 'Evaluasi program kerja', '2025-05-17 15:15:00'),
('Maya Sari', 'PT PLN Persero', 'Koordinasi jaringan listrik', '2025-05-17 16:00:00');

COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
