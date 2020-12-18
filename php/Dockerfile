FROM php:8.0-apache
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli
copy ./php /var/www/html
RUN chown -R www-data:www-data /var/www