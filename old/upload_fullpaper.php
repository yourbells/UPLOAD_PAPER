<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $target_dir = "uploads/";
    
    $file_name = basename($_FILES["file"]["name"]);
    $target_file = $target_dir . $file_name;

    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $allowed_types = array('doc', 'docx', 'pdf');

    if (in_array($file_type, $allowed_types)) {
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "<p style='color:green;'>File " . htmlspecialchars($file_name) . " berhasil diupload.</p>";
        } else {
            echo "<p style='color:red;'>Terjadi kesalahan saat mengupload file.</p>";
        }
    } else {
        echo "<p style='color:red;'>Hanya file dengan format DOC, DOCX, dan PDF yang diperbolehkan.</p>";
    }
} else {
    echo "<p style='color:red;'>Tidak ada file yang diupload.</p>";
}
?>
