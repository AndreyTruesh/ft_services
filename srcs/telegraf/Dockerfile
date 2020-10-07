FROM	alpine:latest

RUN		apk update
RUN		apk add telegraf --repository http://dl-cdn.alpinelinux.org/alpine/edge/testing/
RUN		rm -rf /var/cache/apk/*

ENTRYPOINT ["/usr/bin/telegraf"]
