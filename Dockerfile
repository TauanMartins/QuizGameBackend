FROM php:8.1-fpm

# set your user name, ex: user=bernardo
ARG user=tauan
ARG uid=1111

# Install system dependencies
RUN apt-get update && apt-get install -y \
    vim \
    git \
    curl \
    libpq-dev \
    libonig-dev \
    libxml2-dev \
    zlib1g-dev \
    libpng-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_pgsql mbstring exif pcntl bcmath gd sockets

# Get latest Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Composer dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Copy the composer.json and composer.lock files
COPY composer.json composer.lock /var/www/

# Install Laravel dependencies with Composer
RUN composer install --prefer-dist --no-interaction --no-progress --no-scripts

# Install redis
RUN pecl install -o -f redis \
    &&  rm -rf /tmp/pear \
    &&  docker-php-ext-enable redis

# Set working directory
WORKDIR /var/www

# Copy custom configurations PHP
COPY docker/php/custom.ini /usr/local/etc/php/conf.d/custom.ini

USER $user
