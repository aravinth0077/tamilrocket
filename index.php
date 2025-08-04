<?php include('../private/check_flag.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>🔥 Tamilrockers 2025 🔥</title>
    <style>
        body {
            background-color: #111;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        h1 {
            color: #ff4444;
            margin-top: 30px;
        }
        #searchBar {
            margin: 20px auto;
            padding: 10px 20px;
            width: 80%;
            max-width: 400px;
            border-radius: 5px;
            border: none;
            font-size: 16px;
        }
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .card {
            background-color: #1a1a1a;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ff4444;
            text-align: left;
            transition: 0.3s ease;
        }
        .card:hover {
            transform: scale(1.03);
            box-shadow: 0 0 20px #ff6666;
        }
        a {
            color: #00bfff;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        .details {
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <h1>🔥 Tamilrockers 2025 🔥</h1>
    <input type="text" id="searchBar" placeholder="Search movies...">
    <div class="grid" id="movieGrid">
        <?php
        $dir = 'downloads';
        $files = array_diff(scandir($dir), array('.', '..'));

        foreach ($files as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) === 'mp4') {
                $sizes = ["1.5", "2", "2.5", "3"];
                $size = $sizes[array_rand($sizes)];
                echo '<div class="card">';
                echo '<strong class="filename">' . htmlspecialchars($file) . '</strong>';
                echo '<div class="details">';
                echo "Size: " . $size . " GB<br>";
                echo "Quality: 1080p<br>";
                echo '<a href="' . $dir . '/' . rawurlencode($file) . '" download>Download</a>';
                echo '</div>';
                echo '</div>';
            }
        }
        ?>
    </div>

    <script>
        const searchBar = document.getElementById('searchBar');
        const cards = document.querySelectorAll('.card');

        searchBar.addEventListener('input', function () {
            const query = this.value.toLowerCase();
            cards.forEach(card => {
                const name = card.querySelector('.filename').textContent.toLowerCase();
                card.style.display = name.includes(query) ? 'block' : 'none';
            });
        });
    </script>
</body>
</html>
