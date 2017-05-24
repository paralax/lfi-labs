apt-get -qq update
apt-get install -y --no-install-recommends \
    apache2 \
    libapache2-mod-php7.0 \
    php7.0 \
    git
apt-get -qy autoremove
apt-get -qy clean 
a2enmod php7.0 rewrite
echo "ServerRoot /var/www/html" >> /etc/apache2/apache2.conf
rm -f /var/www/html/index.html
service apache2 reload
