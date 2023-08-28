<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Page Title</title>
  <!-- Include your CSS and JS libraries here -->

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

    .topnav a {
      border-bottom: 3px solid transparent;
    }

    .topnav a:hover {
      border-bottom: 3px solid red;
    }

    .topnav a.active {
      border-bottom: 3px solid red;
    }
  </style>
</head>
<body>
  <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg bg-default navbar-light position-sticky top-0 shadow py-0">
    <div class="container-fluid">
      <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
        <li class="nav-item">
          <a href="index.php" class="navbar-brand mr-lg-5 text-white">
            কৃষি সেবা <!-- Replaced the image with text -->
          </a>
        </li>
      </ul>

      <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-white"></span>
      </button>
      <div class="navbar-collapse collapse bg-default" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-10 collapse-brand">
              <a href="index.html">
                কৃষি সেবা <!-- Replaced the image with text -->
              </a>
            </div>
            <div class="col-2 collapse-close bg-danger">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>

        <!-- Rest of your code... -->

        <ul class="navbar-nav align-items-lg-center ml-auto topnav" id="nav">
          <li class="nav-item">
            <a class="nav-link text-white <?php if (basename($_SERVER['PHP_SELF']) === 'videos.php') echo 'active'; ?>" href="videos.php">
              <i class="text-white fas fa-video"></i> ভিডিও দেখে শিখি

            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white <?php if (basename($_SERVER['PHP_SELF']) === 'weather_fetch.php') echo 'active'; ?>" href="weather_fetch.php">
              <i class="text-white fas fa-cloud"></i> আবহাওয়া সম্পর্কে জানি

            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white <?php if (basename($_SERVER['PHP_SELF']) === 'crop_recommendation.php') echo 'active'; ?>" href="crop_recommendation.php">
              <i class="text-white fas fa-seedling"></i> 
ফসল নির্বাচন

            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white <?php if (basename($_SERVER['PHP_SELF']) === 'fertilizer_recommendation.php') echo 'active'; ?>" href="fertilizer_recommendation.php">
              <i class="text-white fas fa-flask"></i> সার নির্বাচন
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link text-white <?php if (basename($_SERVER['PHP_SELF']) === 'blog.php') echo 'active'; ?>" href="blog.php">
              <i class="text-white fas fa-newspaper"></i> পড়ে পড়ে শিখি

            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white <?php if (basename($_SERVER['PHP_SELF']) === 'hd_data_fetch.php') echo 'active'; ?>" href="hd_data_fetch.php">
              <i class="text-white fas fa-wifi"></i> জমির অবস্থা দেখি
 <!-- Added "Read Sensor Data" link -->
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Include your HTML content here -->

  <script>
    $(document).ready(function() {
      var currentPage = "<?php echo basename($_SERVER['PHP_SELF']); ?>";
      $("#nav li a").each(function() {
        if ($(this).attr("href") === currentPage) {
          $(this).addClass("active");
        } else {
          $(this).removeClass("active");
        }
      });
    });
  </script>
  
  <!-- Include your JS scripts here -->
</body>
</html>
