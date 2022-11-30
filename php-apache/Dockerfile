ARG VARIANT="apache"
FROM php:${VARIANT}

# Enviroment variables
ENV TZ='America/Recife'
ENV LC_ALL pt_BR.UTF-8
ENV LANG pt_BR.UTF-8
ENV LANGUAGE pt_BR.UTF-8

# Extensões e dependências do eOffice
RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt-get install locales -y
# RUN apt-get install -y locales locales-all
RUN apt-get install -y libc6
RUN apt-get install -y libpq5
RUN apt-get install -y ucf
RUN apt-get install -y libpq-dev
RUN apt-get install -y zlib1g-dev
RUN apt-get install -y libpng-dev
RUN apt-get install -y libonig-dev
RUN apt-get install -y libedit-dev
RUN apt-get install -y libxml2-dev
RUN docker-php-ext-install pdo_pgsql
RUN docker-php-ext-install pgsql
RUN docker-php-ext-install gd
# RUN docker-php-ext-install json
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install opcache
RUN docker-php-ext-install xml

RUN apt-get install python3 -y

#Configurações de Container
RUN echo "America/Recife" > /etc/timezone
# RUN apt-get install -y locales locales-all
RUN sed -i -e 's/# pt_BR.UTF-8 UTF-8/pt_BR.UTF-8 UTF-8/' /etc/locale.gen && \locale-gen
RUN dpkg-reconfigure -f noninteractive tzdata

# Configurações do Apache
COPY ./apache_configs/apache2.conf /etc/apache2
COPY ./apache_configs/php.ini /usr/local/etc/php/

RUN a2enmod rewrite && service apache2 restart