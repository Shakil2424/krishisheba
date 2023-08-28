<!DOCTYPE html>
<html>
<head>
    <title>Blog Post</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add your head content here -->
    <style>
        /* Custom CSS styles */
        .blog-post {
            border: 1px solid #e5e5e5;
            padding: 1rem;
            margin-bottom: 1.5rem;
            transition: transform 0.2s ease-in-out;
        }
    </style>
</head>
<body>

<?php include('header.php'); ?>
    <?php include('nav.php'); ?>

<div class="container my-5">
    <?php
    // Check if the 'id' parameter is provided in the URL
    if (isset($_GET['id'])) {
        $blog_id = $_GET['id'];
        $blog_data = file_get_contents('blog_posts.json');
        $blog_posts = json_decode($blog_data, true);

        // Find the blog post with the matching 'id'
        $selected_post = null;
        foreach ($blog_posts as $post) {
            if ($post['id'] == $blog_id) {
                $selected_post = $post;
                break;
            }
        }

        if ($selected_post) {
            echo '<div class="blog-post">';
            echo '<img class="img-fluid mb-3" src="' . $selected_post['image_url'] . '" alt="' . $selected_post['title'] . '">';
            echo '<h2>' . $selected_post['title'] . '</h2>';
            echo '<p>' . $selected_post['description'] . '</p>';
            echo '</div>';
        } else {
            echo '<p>Blog post not found.</p>';
        }
    } else {
        echo '<p>Invalid URL.</p>';
    }
    ?>
</div>

<!-- Include your footer here -->

<!-- Link to Bootstrap JS (optional, if you want to use Bootstrap features) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
