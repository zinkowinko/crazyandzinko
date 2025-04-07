<!DOCTYPE html>
<html>
<head>
    <title>Zinko and Crazy</title>
    <style>
        body {
            margin: 0;
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
            gap: 100px;
        }

        .card {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .card p {
            margin-top: 20px;
            font-size: 24px;
            font-weight: bold;
            white-space: pre-line;
        }

        .about-link {
            margin-top: 20px;
        }

        .about-link a {
            color: #00bfff;
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
        }

        .about-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <img src="zinko.jpg" alt="zinko">
            <p>hi my<br>name is<br>zinko<br>I have a<br>best friend named<br>crazy!</p>
        </div>
        <div class="card">
            <img src="crazy.jpg" alt="crazy">
            <p>hi my<br>name is<br>crazy<br>I’m cool and<br>i have a<br>best friend named<br>zinko!</p>
        </div>
    </div>

    <div class="about-link">
        <a href="about.php">click to learn why we made this →</a>
    </div>
</body>
</html>
