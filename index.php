<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ꕥ TᕼᖇIᖴTY ᕼᗩᐯEᑎ</title>
        <link href="https://fonts.googleapis.com/css2?family=GT+Sectra+Display:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <style>
            body {
                font-family: 'Arial', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f9f9f9;
                color: #333;
            }
            header {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                background-color: transparent;
                display: flex;
                justify-content: space-between;
                align-items: center;
                z-index: 2;
            }
            .brand {
                font-size: 1.5em;
                font-weight: bold;
                color: white;
                z-index: 10;
                background-color: rgba(0, 0, 0, 0.7);
                padding: 10px 20px;
                border-radius: 5px;
                display: inline-block;
            }
            nav {
                position: relative;
                z-index: 10;
                background-color: rgba(0, 0, 0, 0.5);
                padding: 10px;
                border-radius: 5px;
            }
            nav ul {
                list-style: none;
                display: flex;
                margin: 0;
                padding: 0;
            }
            nav a {
                margin-left: 20px;
                text-decoration: none;
                color: white;
                font-weight: bold;
                transition: color 0.3s;
            }
            nav a:hover {
                color: #ffd700;
            }
            .hero {
                background-image: url('images/coffee-date.jpg');
                background-size: cover;
                background-position: center;
                height: 100vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                position: relative;
                z-index: 1;
                padding-top: 300px;
            }
            .hero h1 {
                font-size: 3em;
                color: white;
                margin: 150px 0;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
                text-align: center;
            }
            .container {
                max-width: 1200px;
                margin: auto;
                padding: 20px;
            }
            .post {
                background: white;
                margin-bottom: 20px;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            }
            .post-image {
                max-width: 100%;
                border-radius: 5px;
            }
            footer {
                text-align: center;
                padding: 20px;
                background-color: #f1f1f1;
                color: #333;
            }
        </style>
    </head>
    <body>

        <header>
            <div class="brand">GᖇEEᑎᕼᑌᗷ ꕥ</div>
            <?php include('nav.php'); ?>
        </header>

        <div class="hero">
            <h1>𝙷𝚘𝚠 𝚃𝚘 𝙷𝚊𝚟𝚎 𝚃𝚑𝚎 𝙿𝚎𝚛𝚏𝚎𝚌𝚝 𝙲𝚘𝚏𝚏𝚎𝚎 𝙳𝚊𝚝𝚎</h1>
        </div>

        <div class="container">
            <div class="post">
                <img src="images/img1.webp" alt="Thrift Shopping" class="post-image">
                <h2>Discover the Joy of Sustainable Shopping</h2>
                <p>Forget the mall — second-hand shopping is where the real treasures are! It’s not just eco-friendly; it’s like a treasure hunt with a side of guilt-free shopping. From quirky vintage outfits to furniture that has more stories than your grandma, every find is a win for the planet. So, grab your thrift-store cape and start your adventure!</p>
            </div>

            <div class="post">
                <img src="images/img2.webp" alt="Treasure Hunt" class="post-image">
                <h2>Join the Treasure Hunt for Unique Finds!</h2>
                <p>Imagine having a magical map that leads you to all the coolest genbrugs and second-hand shops in Denmark. With GreenHub, that’s basically what you get! We provide the inside scoop on local shops, their quirks, and even the best times to score great deals. Plus, join swap meets where you can trade your old stuff for someone else's treasures. It’s like a shopping party where everyone wins!</p>
            </div>

            <div class="post">
                <img src="images/img3.webp" alt="User Reviews" class="post-image">
                <h2>Real Experiences, Real Recommendations</h2>
                <p>Our community is like a sitcom with everyone sharing their shopping shenanigans! With reviews and ratings, you’ll get the scoop on the best places to shop, what gems to look for, and how to snag the best deals without breaking a sweat. Join our forums to swap tips and tales of thrift triumphs. Together, we’ll keep the green revolution rolling, one fabulous find at a time!</p>
            </div>

            <div class="sidebar">
                <h3>Follow Us on Social Media!</h3>
                <p>Stay connected and get inspired by following us on our social media channels!</p>
                <p>Instagram: @ThriftyHaven<br>
                    Facebook: Thrifty Haven Community<br>
                    Twitter: @ThriftyHaven</p>
            </div>
        </div>

        <footer>
            <p>&copy; 2023 Thrifty Haven. All Rights Reserved.</p>
        </footer>

    </body>
</html>