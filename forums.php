<?php
session_start();
include('includes/protect.php');
include('db_connect.php'); 

// instead of checking for a logged-in user, we will redirect to ProBoards
header("Location: https://greenhub.freeforums.net");
exit();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forums - GreenHub</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Forums</h1>
    </header>

    <?php include('nav.php'); ?> 

    <main>
        <div class="welcome-box">
            <p>Please note that you will need to register and log in to the ProBoards forum to post and participate in discussions.</p>
        </div>

        <h2>Create a New Post</h2>
        <p>To create a new post, please visit the forum after logging in.</p>

        <h2>All Posts</h2>
        <p>To view all posts, please check the ProBoards forum directly.</p>
    </main>

    <?php include('footer.php'); ?>
</body>
</html>
