FROM ctfhub/web_nginx_php_5.6

COPY php.ini /usr/local/etc/php/php.ini
COPY src /var/www/html
COPY files/flag.sh /flag.sh

RUN sh -c "chmod +x /flag.sh"