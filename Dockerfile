FROM php:7.0-apache
MAINTAINER jose nazario <jose@monkey.org>
LABEL version="1.0" description="lfi-labs Docker image"

RUN apt-get -qq update && \
  apt-get install whois

COPY . /var/www/html

# docker build -t lfi-labs .
# docker run -p 8080:80 lfi-labs

# % docker ps
# CONTAINER ID        IMAGE               COMMAND                  CREATED              STATUS              PORTS                  NAMES
# a7d9efa998bf        lfi-labs            "/bin/sh -c '/usr/..."   About a minute ago   Up About a minute   0.0.0.0:8080->80/tcp   keen_shirley
# % docker exec -it a7d9efa998bf /bin/bash
