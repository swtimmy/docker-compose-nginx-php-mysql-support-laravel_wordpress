FROM php:7.4-fpm

# Use the default production configuration
# Can make the error log appear to "docker logs -f php"
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

RUN ["apt-get", "update"]
RUN ["apt-get", "install", "-y", "vim"]

RUN docker-php-ext-install pdo pdo_mysql mysqli && docker-php-ext-enable mysqli

RUN ["apt-get", "install", "-y", "zlib1g-dev"]
RUN ["apt-get", "install", "-y", "libfreetype6-dev"]
RUN ["apt-get", "install", "-y", "libjpeg62-turbo-dev"]
RUN ["apt-get", "install", "-y", "libpng-dev"]
RUN docker-php-ext-configure gd --with-jpeg --with-freetype && docker-php-ext-install gd

USER root

#install editor
#RUN sudo apt-get update
#RUN sudo apt-get install -y vim
#RUN sudo apt-get install wget

#enable ls -l shortcut
RUN alias ll="ls -al"

#Add user 
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

COPY --chown=www:www . /var/www
RUN chown -R www-data:www-data /var/www

USER www