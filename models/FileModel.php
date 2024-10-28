<?php
class FileModel {
    private $allowed_types = ['doc', 'docx', 'pdf'];
    private $upload_dir = 'uploads/';

    public function uploadFile($file) {
        // Cek apakah folder upload sudah ada
        if (!is_dir($this->upload_dir)) {
            mkdir($this->upload_dir, 0777, true);
        }

        // Dapatkan nama file dan ekstensi
        $file_name = basename($file["name"]);
        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $target_file = $this->upload_dir . $file_name;

        // Cek tipe file
        if (!in_array($file_type, $this->allowed_types)) {
            return ['success' => false, 'message' => 'Hanya file dengan format DOC, DOCX, dan PDF yang diperbolehkan.'];
        }

        // Pindahkan file ke folder tujuan
        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            return ['success' => true, 'message' => "File $file_name berhasil diupload."];
        } else {
            return ['success' => false, 'message' => 'Terjadi kesalahan saat mengupload file.'];
        }
    }
}
?>
