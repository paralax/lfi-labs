#!/usr/bin/env bash

apt-get -qq update
apt-get install -y --no-install-recommends \
    apache2 \
    libapache2-mod-php7.0 \
    php7.0 \
    git
apt-get -qy autoremove
apt-get -qy clean 

# configure apache
a2enmod php7.0 rewrite
echo "ServerRoot /var/www/html" >> /etc/apache2/apache2.conf
echo "ServerName lfiweb" >> /etc/apache2/httpd.conf
rm -f /var/www/html/index.html

# download and install lfi-labs
cd && git clone https://github.com/paralax/lfi-labs.git && cd lfi-labs && cp -r * /var/www/html/

# start apache
service apache2 reload