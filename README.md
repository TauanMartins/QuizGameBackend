## To Run this application in Docker

First you will need to have Docker and Composer installed.
So if you are running Linux, run these commands first:
    -- "sudo apt update && apt upgrade -y"
    -- "sudo apt install docker docker-compose"
    -- "sudo apt install composer"
    -- "sudo apt install php8.1-dom php8.1-xml php8.1-curl"
    
And finally, let's build:
- Clone this project to your EC2 machine for example
- Adjust your .env with "cp .env.example .env" and replace 
    - APP_DEBUG=false
    - APP_NAME=QuizGameBackend
    - APP_ENV=production
    - Database settings
- Run "docker-compose up -d" to up your containers
- Run "docker-compose exec app bash" to get into the main container

## Inside the container

- Run "composer install"
- Run "php artisan key:generate"
- Run "php artisan migrate"
- Run "php artisan db:seed"

## DONE! Your application is configured!
