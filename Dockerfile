FROM php:7.0-apache
MAINTAINER jose nazario <jose@monkey.org>
LABEL version="1.0" description="lfi-labs Docker image"

# Debian stretch is EOL: deb.debian.org now returns 404 for it, and the archive
# signing key has expired (EXPKEYSIG), so apt refuses to install. Point apt at
# archive.debian.org, skip the Valid-Until check, and mark the source trusted.
# The missing -y also aborted non-interactive builds.
RUN printf 'deb [trusted=yes] http://archive.debian.org/debian stretch main\ndeb [trusted=yes] http://archive.debian.org/debian-security stretch/updates main\n' > /etc/apt/sources.list \
 && echo 'Acquire::Check-Valid-Until "false";' > /etc/apt/apt.conf.d/99no-valid-until \
 && apt-get -qq update \
 && apt-get install -y -qq whois

COPY . /var/www/html

# docker build -t lfi-labs .
# docker run -p 8080:80 lfi-labs

# % docker ps
# CONTAINER ID        IMAGE               COMMAND                  CREATED              STATUS              PORTS                  NAMES
# a7d9efa998bf        lfi-labs            "/bin/sh -c '/usr/..."   About a minute ago   Up About a minute   0.0.0.0:8080->80/tcp   keen_shirley
# % docker exec -it a7d9efa998bf /bin/bash
