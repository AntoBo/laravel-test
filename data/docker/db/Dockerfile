# FROM mysql:8.0.3
FROM mariadb:10.5

MAINTAINER Stanislav Ashykhmin <ashykhminstanislav@gmail.com>

ARG HOST_UID=1000

VOLUME ["/var/lib/mysql"]

RUN usermod -u ${HOST_UID} mysql

EXPOSE 3306
