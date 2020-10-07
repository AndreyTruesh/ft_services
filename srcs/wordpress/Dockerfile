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

RUN		wget https://wordpress.org/latest.tar.gz 
RUN		tar -xzvf latest.tar.gz -C /etc
RUN		rm -f ./latest.tar.gz
COPY	wp-config.php /etc/wordpress/wp-config.php
COPY	start.sh ./

EXPOSE	5050

CMD		bash start.sh
