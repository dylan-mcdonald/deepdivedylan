FROM richarvey/nginx-php-fpm
RUN rm /var/www/html/index.php
COPY php /var/www
COPY vendor /var/www
COPY public_html /var/www/html
EXPOSE 80