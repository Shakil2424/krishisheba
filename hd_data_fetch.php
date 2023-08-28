<?php
// Fetch the latest reading from your FastAPI server
function fetchLatestReading() {
    $apiUrl = 'http://localhost:8000/sensor-readings';
    $response = file_get_contents($apiUrl);
    
    if ($response !== false) {
        $data = json_decode($response, true);
        return end($data); // Return the latest reading
    } else {
        return false;
    }
}

$latestReading = fetchLatestReading(); // Fetch the latest reading
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latest Sensor Reading</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .refresh-btn {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: block;
            font-size: 16px;
            margin: 20px auto 0;
            border-radius: 5px;
            cursor: pointer;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin-bottom: 15px;
            padding-left: 30px;
            position: relative;
        }
        .icon {
            position: absolute;
            left: 0;
            top: 0;
            font-size: 24px;
        }
        h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
<?php include('header.php'); ?>
    <?php include('nav.php'); ?>


    <div class="container">
        <h2 class="text-center">Latest Sensor Reading</h2>

        <?php if ($latestReading !== false): ?>
        <ul>
            <li>
                <i class="fas fa-thermometer-half icon"></i>
                <strong>Temperature:</strong> <?php echo $latestReading['temperature']; ?>
            </li>
            <li>
                <i class="fas fa-tint icon"></i>
                <strong>Humidity:</strong> <?php echo $latestReading['humidity']; ?>
            </li>
            <li>
                <i class="fas fa-tint icon"></i>
                <strong>Soil Moisture:</strong> <?php echo $latestReading['soil_moisture']; ?>
            </li>
            <li>
                <i class="fas fa-map-marker-alt icon"></i>
                <strong>Location:</strong> <?php echo $latestReading['location']; ?>
            </li>
            <li>
                <i class="fas fa-clock icon"></i>
                <strong>Timestamp:</strong> <?php echo $latestReading['timestamp']; ?>
            </li>
        </ul>
        <?php else: ?>
        <p>Error fetching sensor readings.</p>
        <?php endif; ?>

        <!-- Refresh button with Font Awesome icon and centered -->
        <button class="refresh-btn" onclick="window.location.reload();">
            <i class="fas fa-sync"></i> Refresh
        </button>
    </div>
</body>
</html>
