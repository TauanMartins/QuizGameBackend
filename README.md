## To Run this application in Docker

- Clone this project to your EC2 machine for example
- Adjust your .env with "cp .env.example .env" and replace 
    - APP_DEBUG=false
    - APP_NAME=QuizGameBackend
    - APP_ENV=production
    - Database settings
- Run "docker-compose up -d" to up your containers
- Run "docker-compose exec QuizBackend bash" to get into the main container

## Inside the container

- Run "composer install"
- Run "php artisan key:generate"
- Run "php artisan migrate"
- Run "php artisan db:seed"

## DONE! Your application is configured!