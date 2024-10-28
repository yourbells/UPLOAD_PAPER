<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Full Paper</title>
    <style>
        /* Gaya CSS sama dengan sebelumnya */
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .upload-container {
            display: inline-block;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        input[type="file"], input[type="submit"] {
            padding: 10px;
            background-color: #4d004d;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="upload-container">
    <h2>Upload Full Paper</h2>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <label for="file">Full Paper:</label>
        <input type="file" name="file" id="file" accept=".doc,.docx,.pdf">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
