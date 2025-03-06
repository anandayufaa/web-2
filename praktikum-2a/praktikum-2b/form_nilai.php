<!DOCTYPE html>
<html>
<head>
    <title>Form Nilai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Nilai</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>

            <label for="score">Nilai:</label>
            <input type="text" id="score" name="score" required>

            <input type="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $score = htmlspecialchars($_POST['score']);
            echo "<div class='result'><h3>Hasil:</h3>";
            echo "Nama: $name<br>";
            echo "Nilai: $score";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>