FROM php:8.2-cli
WORKDIR /var/www
RUN apt-get update && apt-get install -y git unzip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY . .
RUN composer install
CMD ["php", "-S", "0.0.0.0:80", "index.php"]