<?php
class UploadController {
    public function index() {
        // Cek apakah form sudah disubmit
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Panggil model untuk mengolah file yang diupload
            $fileModel = new FileModel();
            $result = $fileModel->uploadFile($_FILES['file']);
            
            // Tampilkan hasilnya
            include 'views/uploadResult.php';
        } else {
            // Tampilkan form upload
            include 'views/uploadForm.php';
        }
    }
}
?>
