# Use an official PHP image as the base image
FROM php:8.1-fpm

# Install required dependencies and libraries
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev

# Configure the GD extension with the correct options
RUN docker-php-ext-configure gd --with-freetype --with-jpeg

# Install the GD extension
RUN docker-php-ext-install -j$(nproc) gd

# Other PHP configurations and extensions go here

# Set the working directory
WORKDIR /var/www/html

# Expose port 9000 for PHP-FPM
EXPOSE 9000