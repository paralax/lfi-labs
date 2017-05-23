FROM ubuntu:16.04
MAINTAINER jose nazario <jose@monkey.org>
LABEL version="1.0" description="lfi-labs Docker image"

ARG DEBIAN_FRONTEND=noninteractive

# set up packages
RUN apt-get -qq update \
  && apt-get install -y --no-install-recommends \
    apache2 \
    libapache2-mod-php7.0 \
    php7.0 \
  && rm -f /var/www/html/index.html \
  && apt-get -qy autoremove \
  && apt-get -qy clean \
  && rm -rf /var/lib/apt/lists/* \
  && a2enmod php7.0 \
  && a2enmod rewrite \
  && echo "ServerRoot /var/www/html" >> /etc/apache2/apache2.conf

ADD . /var/www/html
WORKDIR /var/www/html

# configure apache

EXPOSE 80
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]

# docker build -t lfi-labs .
# docker run -p 8080:80 lfi-labs

# % docker ps
# CONTAINER ID        IMAGE               COMMAND                  CREATED              STATUS              PORTS                  NAMES
# a7d9efa998bf        lfi-labs            "/bin/sh -c '/usr/..."   About a minute ago   Up About a minute   0.0.0.0:8080->80/tcp   keen_shirley
# % docker exec -it a7d9efa998bf /bin/bash
