<?php
session_start();
include('db_connect.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ᗩᗷOᑌT GᖇEEᑎᕼᑌᗷ</title>
        <link rel="stylesheet" href="styles.css"> 
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
                display: flex;
                justify-content: space-between;
            }

            .main-content {
                flex: 1;
                margin-right: 20px;
            }

            .sidebar {
                width: 300px;
                background-color: brown;
                padding: 15px;
                border-radius: 5px;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                color: #fff;
            }

            .topic-list {
                list-style: none;
                padding: 0;
            }

            .topic-item {
                margin-bottom: 15px;
                padding: 10px;
                border: 1px solid #b29a8c;
                border-radius: 5px;
                background-color: #f9f9f9;
            }

            .topic-title {
                font-size: 1.2em;
                color: #333;
                margin: 0;
            }

            .topic-description {
                font-size: 0.9em;
                color: #555;
                margin: 5px 0 0;
            }

            .topic-title a {
                text-decoration: none;
                color: #333;
            }

            .topic-title a:hover {
                color: #ffcc00;
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
            <h1>𝙰𝚋𝚘𝚞𝚝 𝚞𝚜</h1>
        </div>

        <main class="container">
            <div class="main-content">
                <section id="about">
                    <h2>About Us!</h2>
                    <p>At GreenHub, we are passionate about fostering a sustainable and eco-friendly community right here in Denmark. Our mission is to connect individuals who share a love for the environment and wish to make a positive impact through sustainable living.</p>

                    <h3>Our Mission</h3>
                    <p>GreenHub is dedicated to promoting a greener lifestyle by encouraging the exchange of ideas, resources, and inspiration. We believe that by coming together, we can create a powerful movement towards a sustainable future. Our platform is designed to be a vibrant space where you can share tips, discover eco-friendly products, and find second-hand treasures in local genbrugs.</p>

                    <h3>What We Offer</h3>
                    <ul>
                        <li><strong>Community Forums:</strong> Engage in meaningful discussions about sustainable practices, share your favorite genbrug finds, and exchange eco-friendly living tips with fellow members.</li>
                        <li><strong>Local Insights:</strong> Discover sustainable initiatives and eco-friendly businesses throughout Denmark. Our platform offers insights into local efforts to promote green living.</li>
                        <li><strong>Inspiration and Resources:</strong> Access a wealth of information, including articles, guides, and stories that inspire and empower you to lead a more sustainable life.</li>
                    </ul>

                    <h3>Join Us</h3>
                    <p>Whether you're a seasoned sustainability advocate or just beginning your green journey, GreenHub welcomes you. Join our community to connect with like-minded individuals, learn from others, and contribute to the growing movement towards a sustainable Denmark.</p>

                    <h3>Contact Us</h3>
                    <p>We’re always eager to hear from our community. If you have any questions, suggestions, or would like to collaborate, feel free to reach out to us.</p>
                </section>
            </div>

            <aside class="sidebar">
                <h2>Latest Topics</h2>
                <ul class="topic-list">
                    <li class="topic-item">
                        <h3 class="topic-title"><a href="https://www.trvst.world/sustainable-living/10-reasons-why-you-should-buy-second-hand/" target="_blank">The Benefits of Second-Hand Shopping</a></h3>
                    </li>
                    <li class="topic-item">
                        <h3 class="topic-title"><a href="https://feelinggoodashail.com/how-to-thrift/" target="_blank">How to Thrift Like a Pro</a></h3>
                    </li>
                    <li class="topic-item">
                        <h3 class="topic-title"><a href="https://www.goodhousekeeping.com/uk/consumer-advice/consumer-rights/a38577923/sustainable-living/" target="_blank">Eco-Friendly Living: Tips and Tricks</a></h3>
                    </li>
                    <li class="topic-item">
                        <h3 class="topic-title"><a href="https://thriftstored.com/blog/hidden-gems-local-thrift-store" target="_blank">Finding Hidden Gems in Thrift Stores</a></h3>
                    </li>
                    <li class="topic-item">
                        <h3 class="topic-title"><a href="https://www.vogue.co.uk/fashion/article/sustainable-fashion" target="_blank">Sustainable Fashion: What You Need to Know</a></h3>
                    </li>
                </ul>
            </aside>
        </main>

<?php include('footer.php'); ?>
        <script src="scripts.js"></script>

    </body>
</html>