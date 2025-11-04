<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>components  Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Components Details</h1>
        <nav class="menu">
            <a href="index.php">Back to Home</a>
        </nav>
    </header>

    <main>
        <?php
        // Get details from query string
        $file = isset($_GET['file']) ? htmlspecialchars($_GET['file']) : '';
        $name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Unknown';
        $description = isset($_GET['description']) ? htmlspecialchars($_GET['description']) : 'No description available.';
        $price = isset($_GET['price']) ? htmlspecialchars($_GET['price']) : 'Unknown';
        $uses = isset($_GET['uses']) ? htmlspecialchars($_GET['uses']) : 'Uses information not provided.';

        if ($file && file_exists($file)) {
            echo '<div class="details">';
            echo '<img src="' . $file . '" alt="' . $name . '">';
            echo '<h3>' . $name . '</h3>';
            echo '<p><strong>Description:</strong> ' . $description . '</p>';
            echo '<p><strong>Uses:</strong> ' . $uses . '</p>';
            echo '<p><strong>Price:</strong> ' . $price . '</p>';
            echo '</div>';
        } else {
            echo '<p style="color:red;">Error: Image not found.</p>';
        }
        ?>
    </main>

    <footer>
        <p>&copy; 2024 Digital Electronics Components. All rights reserved.</p>
        <p>
            Share our website: 
            <a href="http://localhost/gallery/index.php#home" target="_blank" id="shareLink">http://localhost/gallery/index.php#home</a>
        </p>
        <button onclick="copyLink()">Copy Link</button>
    </footer>

    </footer>
</body>
</html>
