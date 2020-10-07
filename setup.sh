minikube start --vm-driver=virtualbox --disk-size=5000MB
minikube addons enable metallb
minikube addons enable dashboard

eval $(minikube -p minikube docker-env)
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.3/manifests/namespace.yaml
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.3/manifests/metallb.yaml
kubectl create secret generic -n metallb-system memberlist --from-literal=secretkey="$(openssl rand -base64 128)"
kubectl apply -f ./srcs/metallb/metallb.yaml

docker build -t mysql-image ./srcs/mysql
kubectl apply -f ./srcs/mysql/mysql-deployment.yaml

docker build -t phpmyadmin-image ./srcs/phpmyadmin
kubectl apply -f ./srcs/phpmyadmin/phpmyadmin-deployment.yaml

docker build -t wordpress-image ./srcs/wordpress
kubectl apply -f ./srcs/wordpress/wordpress-deployment.yaml

docker build -t nginx-image ./srcs/nginx
kubectl apply -f ./srcs/nginx/nginx-deployment.yaml

docker build -t ftps-image ./srcs/ftps
kubectl apply -f ./srcs/ftps/ftps-deployment.yaml

docker build -t influxdb-image ./srcs/influxdb
kubectl apply -f ./srcs/influxdb/influxdb-config.yaml
kubectl apply -f ./srcs/influxdb/influxdb-deployment.yaml

docker build -t telegraf-image ./srcs/telegraf
kubectl apply -f ./srcs/telegraf/telegraf-config.yaml
kubectl apply -f ./srcs/telegraf/telegraf-deployment.yaml

docker build -t grafana-image ./srcs/grafana
kubectl apply -f ./srcs/grafana/grafana-config.yaml
kubectl apply -f ./srcs/grafana/grafana-deployment.yaml
