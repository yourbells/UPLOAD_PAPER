<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Full Paper</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #3d008c;
            padding: 15px;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            margin: 0;
            font-size: 24px;
        }

        .navbar .nav-links {
            display: flex;
            gap: 20px;
        }

        .navbar .nav-links a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }

        .navbar .nav-links a:hover {
            color: #ffccff;
        }

        .upload-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
        }

        label {
            font-weight: bold;
            color: #000;
            font-size: 18px;
            display: inline-block;
            margin-bottom: 10px;
        }

        .file-input-container {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: -100px;
            margin-top: -40px;
        }

        .choose-file-btn,
        .submit-btn {
            padding: 10px 20px;
            background-color: #3d008c;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            display: inline-block;
        }

        input[type="file"] {
            display: none;
        }

        .submit-btn {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="navbar">
    <h1>ICOSSCOPER</h1>
    <div class="nav-links">
        <a href="#">Home</a>
        <a href="#">Upload</a>
        <a href="#">Logout</a>
    </div>
</div>

<div class="upload-container">
    <form action="index.php" method="post" enctype="multipart/form-data">
        <label for="file">Full Paper:</label>

        <div class="file-input-container">
            <label class="choose-file-btn" for="file">Choose File</label>
            <input type="file" name="file" id="file" accept=".doc,.docx,.pdf">
            <input type="submit" value="Submit" class="submit-btn">
        </div>
    </form>
</div>

<script>
    const fileInput = document.getElementById('file');
    const chooseFileButton = document.querySelector('.choose-file-btn');

    fileInput.addEventListener('change', () => {
        const fileName = fileInput.files[0] ? fileInput.files[0].name : "Choose File";
        chooseFileButton.innerText = fileName;
    });
</script>

</body>
</html>
