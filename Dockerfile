# Use the official PHP 8.2 image as base
FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libzip-dev \
    zip \
    unzip

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql zip

# Set the working directory in the container
WORKDIR /var/www

# Copy the local codebase to the container
COPY . /var/www

COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY .docker/server.crt /etc/apache2/ssl/server.crt
COPY .docker/server.key /etc/apache2/ssl/server.key

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN chown -R www-data:www-data /var/www/
RUN a2enmod rewrite
RUN a2enmod ssl

RUN service apache2 restart

# Expose port 80 to the outside world
#EXPOSE 80

# Command to run the PHP application
#CMD ["php", "-S", "0.0.0.0:80"]