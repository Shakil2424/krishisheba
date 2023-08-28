<?php
if (isset($_GET['city'])) {
    $apiKey = 'ac1d1d238a8409046aecd5ac08a55289';
    $city = $_GET['city'];

    $apiUrl = "http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey&units=metric";

    $response = file_get_contents($apiUrl);

    if ($response !== false) {
        $data = json_decode($response, true);

        if ($data && $data['cod'] === 200) {
            $temperature = $data['main']['temp'];
            $weatherDescription = $data['weather'][0]['description'];
            $windSpeed = $data['wind']['speed'];
            $humidity = $data['main']['humidity'];
            $pressure = $data['main']['pressure'];
            $visibility = $data['visibility'];
            $sunrise = date('H:i:s', $data['sys']['sunrise']);
            $sunset = date('H:i:s', $data['sys']['sunset']);

            echo "Temperature: " . round($temperature) . "°C<br>";
            echo "Weather: $weatherDescription<br>";
            echo "Wind Speed: $windSpeed m/s<br>";
            echo "Humidity: $humidity%<br>";
            echo "Pressure: $pressure hPa<br>";
            echo "Visibility: $visibility meters<br>";
            echo "Sunrise: $sunrise<br>";
            echo "Sunset: $sunset<br>";
        } else {
            echo "Error fetching weather data.";
        }
    } else {
        echo "Error fetching weather data.";
    }
}
?>
