/usr/bin/mysql_install_db --user=root --datadir="/var/lib/mysql"
rc default
rc-service mariadb start
mysql -u root < init.sql
mysql wordpress -u root < wordpress.sql
rc-service mariadb stop
/usr/bin/mysqld_safe --datadir="/var/lib/mysql"
