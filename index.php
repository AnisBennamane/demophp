<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil - Mon Site Web Dynamique</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 1rem 0;
        }
        header h1 {
            margin: 0;
        }
        main {
            padding: 2rem;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 1rem 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bienvenue sur Mon Site Web Dynamique</h1>
    </header>
    <main>
        <h2><?php echo "Bonjour, visiteur!"; ?></h2>
        <p><?php echo "Aujourd'hui, nous sommes le " . date("d/m/Y") . "."; ?></p>
        <p><?php echo "Il est " . date("H:i:s") . "."; ?></p>
    </main>
    <footer>
        <p>Mon Site Web &copy; 2024</p>
    </footer>
</body>
</html>
