FROM ubuntu:latest
MAINTAINER chase <adogthatcantalk@gmail.com>

RUN apt-get update
RUN apt-get install software-properties-common -y
RUN apt-add-repository ppa:ondrej/php
RUN apt-get upgrade -y
RUN apt-get install -y zip unzip
RUN apt-get install -y \
	php7.3 \
	php7.3-cgi \
	php7.3-cli \
	php7.3-common \
	php7.3-curl \
	php7.3-json \
	php7.3-mysql \
	php7.3-zip
RUN apt-get install apache2 libapache2-mod-php7.0 -y

COPY 000-default.conf /etc/apache2/sites-enabled/000-default.conf

ENV TERM dumb

RUN a2enmod rewrite
RUN chown -R www-data:www-data /var/www

EXPOSE 80

CMD apachectl -D FOREGROUND
