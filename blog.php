<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add your head content here -->
    <style>
        /* Custom CSS styles */
        .blog-header {
            background-color: #343a40;
            color: #fff;
            padding: 2rem 0;
        }
        
        .blog-post {
            border: 1px solid #e5e5e5;
            padding: 1rem;
            margin-bottom: 1.5rem;
            transition: transform 0.2s ease-in-out;
        }
        
        .blog-post:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<?php include('header.php'); ?>
    <?php include('nav.php'); ?>
    
    <!-- Blog Content -->
    <div class="container my-5">
        <h1 class="text-center mb-4">Blog</h1>
        
        <div class="row">
            <?php
            $blog_data = file_get_contents('blog_posts.json');
            $blog_posts = json_decode($blog_data, true);
            
            foreach ($blog_posts as $post) {
                echo '<div class="col-md-4">';
                echo '<div class="blog-post">';
                echo '<img class="img-fluid mb-3" src="' . $post['image_url'] . '" alt="' . $post['title'] . '">';
                echo '<h4 class="mb-2">' . $post['title'] . '</h4>';
                echo '<p class="mb-4">' . substr($post['description'], 0, 100) . '... ';
                echo '<a href="blog_post.php?id=' . $post['id'] . '">Read More</a></p>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
    
    <footer>
        <!-- Add your footer content here -->
    </footer>

    <!-- Link to Bootstrap JS (optional, if you want to use Bootstrap features) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
