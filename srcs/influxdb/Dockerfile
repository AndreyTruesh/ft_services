FROM	alpine:latest

RUN		apk update
RUN		apk add influxdb
RUN		rm -rf /var/cache/apk/*

EXPOSE	8086

ENTRYPOINT ["/usr/sbin/influxd"]
