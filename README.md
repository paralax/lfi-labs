# lfi-labs

small set of PHP scripts to practice exploiting LFI, RFI and CMD injection vulns

# why?

for training and testing purposes. you can test detection products (e.g. vulnerability scanners), exploit tools, etc. 

these are NOT intended for evaluating appsec testing tools.

the idea is that you'd add these to an Apache VirtualHost directive for testing purposes. if you need to do some quick and dirty testing, fire up `php -S 0.0.0.0:8080` or something and go to town. 

# how?

three big options.

1. UN\*X + Apache + PHP, install lfi-labs under somewhere and get to work.
2. run a Docker instance using the Dockerfile. `docker-compose up`
3. run a Vagrant instance using the Vagrantfile. `vagrant up`

# who?

jose nazario @jnazario

# inspired by 

https://github.com/AUDI-1/sqli-labs

# useful links

## LFI/RFI/CMD injection background
- https://pentesterlab.com/exercises/php_include_and_post_exploitation/course
- http://hakipedia.com/index.php/Local_File_Inclusion
- http://www.ush.it/2009/02/08/php-filesystem-attack-vectors/
- https://websec.wordpress.com/2009/11/28/freebsd-directory-listing-with-php-file-functions/
- http://diablohorn.com/2010/01/16/interesting-local-file-inclusion-method/
- http://blog.ptsecurity.com/2010/08/another-alternative-for-null-byte.html
- https://www.notsosecure.com/2010/02/02/local-file-inclusion-with-magic_quotes_gpc-enabled/
- http://www.ush.it/2009/07/26/php-filesystem-attack-vectors-take-two/
- http://www.ush.it/2009/02/08/php-filesystem-attack-vectors/
- https://www.imperva.com/docs/HII_Remote_and_Local_File_Inclusion_Vulnerabilities.pdf

## walkthrough
- http://location-href.com/paralax-lfi-lab/ 
