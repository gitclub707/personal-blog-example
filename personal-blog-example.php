<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Blog</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        header { background: #333; color: white; padding: 10px; text-align: center; }
        article { border-bottom: 1px solid #ccc; padding: 10px 0; }
        footer { background: #333; color: white; text-align: center; padding: 10px; margin-top: 20px; }
    </style>
</head>
<body>

<header>
    <h1>Welcome to My Blog</h1>
    <p>Sharing thoughts and ideas</p>
</header>

<main>
    <?php
    // Sample blog posts
    $posts = [
        ["title" => "First Blog Post", "date" => "June 6, 2025", "content" => "This is my first blog post where I share my thoughts on coding and life."],
        ["title" => "Another Blog Post", "date" => "June 1, 2025", "content" => "Here’s another post about my recent Docker debugging experiences and lessons learned."]
    ];

    // Loop through posts and display them
    foreach ($posts as $post) {
        echo "<article>";
        echo "<h2>{$post['title']}</h2>";
        echo "<p><strong>Posted on:</strong> {$post['date']}</p>";
        echo "<p>{$post['content']}</p>";
        echo "</article>";
    }
    ?>
</main>

<footer>
    <p>© 2025 My Personal Blog. All rights reserved.</p>
</footer>

</body>
</html>
