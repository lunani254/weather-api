# Weather API (Backend)

A Laravel API for fetching weather data from OpenWeatherMap.

## Setup
1. Clone the repository: `git clone https://github.com/yourusername/weather-api.git`
2. Install dependencies: `composer install`
3. Copy `.env.example` to `.env` and add `OPENWEATHERMAP_API_KEY`.
4. Start Docker: `./vendor/bin/sail up`
5. Access API at `http://localhost/api`

## Endpoints
- `GET /api/weather/{city}`: Fetch current weather.
- `GET /api/forecast/{city}`: Fetch 5-day forecast.

## Requirements
- PHP 8.1+
- Composer
- Docker Desktop
