if [ ! -d /var/lib/mysql/wordpress ]; then
	mariadb-install-db --user=mysql --ldata=/var/lib/mysql
	mkdir -p /var/run/mysqld
	chown -R mysql:root /var/run/mysqld
	(sleep 4; mysql --user=wp_user --password=wp_password wordpress < /tmp/dump.sql ) & 
	exec  mysqld --user=mysql --init-file=/tmp/init_db.sql
else
	mkdir -p /var/run/mysqld
	chown -R mysql:root /var/run/mysqld
	exec  mysqld --user=mysql
fi
