FROM	alpine:latest

RUN		apk update
RUN		apk add openrc
RUN		apk add openssl
RUN		apk add vsftpd
RUN		apk add bash
RUN		rm -rf /var/cache/apk/*

RUN		echo -e "qwerty\nqwerty" | adduser ftp_user -h /ftp_dir;
RUN		chown ftp_user:ftp_user /ftp_dir
RUN		openssl req -x509 -out /etc/ssl/certs/vsftpd.crt -keyout /etc/ssl/private/vsftpd.key -newkey rsa:2048 -nodes -sha256 -subj '/CN=localhost'
COPY	./vsftpd.conf /etc/vsftpd/vsftpd.conf
COPY	start.sh ./

EXPOSE	20 21 31000

CMD		bash start.sh
