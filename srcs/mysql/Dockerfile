FROM	alpine:latest

RUN		apk update
RUN		apk add mysql mysql-client
RUN		apk add bash
RUN		apk add openrc
RUN		rm -rf /var/cache/apk/*

COPY	start.sh ./
COPY	init.sql ./
COPY	wordpress.sql ./
COPY	my.cnf /etc/mysql/
EXPOSE	3306
VOLUME	["/var/lib/mysql"]
CMD		bash start.sh
