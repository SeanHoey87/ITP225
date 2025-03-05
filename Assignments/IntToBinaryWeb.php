<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integer to Binary Converter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .convert {
            background: #28a745;
            color: white;
        }
        .reset {
            background: #dc3545;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Integer to Binary Converter</h2>
    <form method="POST">
        <input type="text" name="integer" placeholder="Enter an integer" required>
        <br>
        <input type="text" name="binary" placeholder="Binary Output" readonly
               value="<?php echo isset($_POST['integer']) && is_numeric($_POST['integer']) ? decbin((int)$_POST['integer']) : ''; ?>">
        <br>
        <button type="submit" class="convert">Convert</button>
        <button type="reset" class="reset" onclick="window.location.href='IntToBinaryWeb.php'">Reset</button>
    </form>
</div>

</body>
</html>
