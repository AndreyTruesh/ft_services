FROM	alpine:latest

RUN		apk update
RUN 	apk add php7 
RUN		apk add php7-fpm
RUN		apk add php7-opcache
RUN		apk add php7-gd
RUN		apk add php7-mysqli
RUN		apk add php7-zlib
RUN		apk add php7-curl
RUN		apk add php7-mbstring
RUN		apk add php7-json
RUN		apk add php7-session
RUN		apk add bash
RUN		rm -rf /var/cache/apk/*

RUN		wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-all-languages.tar.gz
RUN		tar -xzvf phpMyAdmin-5.0.2-all-languages.tar.gz -C /etc/.
RUN		rm -f ./phpMyAdmin-5.0.2-all-languages.tar.gz
RUN		mv /etc/phpMyAdmin-5.0.2-all-languages /etc/phpmyadmin
COPY	config.inc.php /etc/phpmyadmin/config.inc.php
COPY	start.sh ./

EXPOSE	5000

CMD		bash start.sh
