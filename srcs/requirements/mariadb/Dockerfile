FROM alpine:3.15
RUN apk update && apk add mariadb mariadb-client && rm -fr /var/cache/apk*
COPY ./tools/db-script.sh /db-script.sh
COPY ./tools/init_db.sql /tmp/init_db.sql
COPY ./tools/mariadb-server.cnf /etc/my.cnf.d/mariadb-server.cnf
COPY ./tools/dump.sql /tmp/dump.sql
# COPY /tools/db-script.sh /docker-entrypoint-initdb.d/
EXPOSE 3306
ENTRYPOINT ["sh", "db-script.sh"]