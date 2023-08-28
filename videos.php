<!DOCTYPE html>
<html>
<head>
    <title>ভিডিও থেকে শিখি</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .video-row {
            display: flex;
            flex-wrap: wrap;
            margin: -15px;
        }
        .video-item {
            width: calc(33.3333% - 30px);
            margin: 15px;
            border: 1px solid #ccc;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s;
        }
        .video-item:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        .video-title {
            font-size: 18px;
            margin: 10px 0;
        }
        .video-description {
            font-size: 14px;
            color: #666;
        }
        .video-container {
            position: relative;
            overflow: hidden;
            padding-bottom: 56.25%; /* 16:9 aspect ratio for YouTube videos */
        }
        .video-iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <!-- Include your navigation/header code here -->
    <?php include('header.php'); ?>
    <?php include('nav.php'); ?>
    <div class="container">
        <h1></h1>
        <div class="video-row">
            <!-- Video items will be dynamically generated here -->
        </div>
    </div>

    <!-- Include your footer code here -->

    <script>
        // Fetch the video data from the JSON file
        fetch('videos.json')
            .then(response => response.json())
            .then(videos => {
                const videoRow = document.querySelector('.video-row');

                // Loop through each video and create video elements
                videos.forEach(video => {
                    const videoItem = document.createElement('div');
                    videoItem.classList.add('video-item');

                    videoItem.innerHTML = `
                        <div class="video-container">
                            <iframe class="video-iframe" src="${video.embedUrl}" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <h3 class="video-title">${video.title}</h3>
                        <p class="video-description">${video.description}</p>
                    `;

                    videoRow.appendChild(videoItem);
                });
            })
            .catch(error => console.error('Error fetching videos:', error));
    </script>
</body>
</html>
