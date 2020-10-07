FROM	alpine:latest

RUN		apk update
RUN		apk add grafana --repository=http://dl-cdn.alpinelinux.org/alpine/edge/testing/
RUN		rm -rf /var/cache/apk/*
COPY	datasource.yaml /usr/share/grafana/conf/provisioning/datasources/influxdb.yaml
COPY	dashboards.yaml /usr/share/grafana/conf/provisioning/dashboards/dashboards.yaml
COPY	services.json /var/lib/grafana/dashboards/services.json
EXPOSE	3000

ENTRYPOINT ["/usr/sbin/grafana-server", "--homepath=/usr/share/grafana"]
