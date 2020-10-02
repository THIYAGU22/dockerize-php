FROM php:7.4-apache

MAINTAINER imthiyagu

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

COPY . /var/www/html/

EXPOSE 8080

CMD ["apachectl", "-D", "FOREGROUND"]