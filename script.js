document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('weather-form');
    const weatherDataDiv = document.getElementById('weather-data');

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const city = document.getElementById('city').value;

        fetchWeatherData(city);
    });

    function fetchWeatherData(city) {
        fetch(`weather.php?city=${city}`)
            .then(response => response.text())
            .then(data => {
                weatherDataDiv.innerHTML = data;
            })
            .catch(error => {
                console.error('Error fetching weather data:', error);
            });
    }
});
