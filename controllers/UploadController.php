<?php
class UploadController {
    public function index() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fileModel = new FileModel();
            $result = $fileModel->uploadFile($_FILES['file']);
            
            include 'views/uploadResult.php';
        } else {
            include 'views/uploadForm.php';
        }
    }
}
?>
