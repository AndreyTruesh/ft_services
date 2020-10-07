FROM alpine:latest

RUN		apk update
RUN		apk add nginx
RUN		apk add	openssh
RUN		apk add openssl
RUN		apk add openrc
RUN		apk add supervisor
RUN		apk add bash
RUN		rm -rf /var/cache/apk/*

VOLUME	["/sys/fs/cgroup"]
RUN		mkdir -p /run/nginx
RUN		rm -f /etc/nginx/conf.d/*.conf
COPY	./nginx.conf /etc/nginx/conf.d/default.conf
RUN		echo -e "qwerty\nqwerty" | adduser ssh_user
RUN		openssl req -x509 -out /etc/nginx/localhost.crt -keyout /etc/nginx/localhost.key -newkey rsa:2048 -nodes -sha256 -subj '/CN=localhost'
COPY 	id_rsa_ft_services /etc/ssh/ssh_host_rsa_key
RUN		chmod 400 /etc/ssh/ssh_host_rsa_key
COPY 	sshd_config /etc/ssh/
COPY	supervisord.conf ./
EXPOSE	443 80 22

ENTRYPOINT	["/usr/bin/supervisord", "-c", "supervisord.conf"]
