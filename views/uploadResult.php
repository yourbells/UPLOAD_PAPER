<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Result</title>
</head>
<body>
    <div class="upload-container">
        <h2>Hasil Upload</h2>
        <p style="color: <?php echo $result['success'] ? 'green' : 'red'; ?>">
            <?php echo htmlspecialchars($result['message']); ?>
        </p>
        <a href="index.php">Kembali</a>
    </div>
</body>
</html>
