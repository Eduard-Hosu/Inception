FROM alpine:3.15
RUN apk update && apk add php php-common php-fpm php-mysqli php-json && rm -fr /var/cache/apk*
ADD https://wordpress.org/latest.tar.gz /tmp
RUN tar -xzvf /tmp/latest.tar.gz -C /tmp && rm /tmp/latest.tar.gz
RUN adduser -S nginx && addgroup -S nginx && adduser nginx nginx
COPY conf/www.conf /etc/php7/php-fpm.d/www.conf
COPY ./conf/wp-conf.sh /usr/bin/wp-conf.sh
COPY conf/wp-config.php /tmp/wp-config.php
EXPOSE 9000
ENTRYPOINT [ "sh", "/usr/bin/wp-conf.sh" ]