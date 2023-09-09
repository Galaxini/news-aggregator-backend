# Use an official PHP image as a base image
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libmcrypt-dev

# Install PHP extensions required by Laravel
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install pdo pdo_mysql gd zip mbstring exif

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory to /var/www/html (the default Laravel directory)
WORKDIR /var/www/html

# Expose port 9000 (this can be useful if you're using a PHP debugger)
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm"]