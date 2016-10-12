FROM mysql:5.7

ENV MYSQL_ROOT_PASSWORD secret
ENV MYSQL_DATABASE app 


COPY *.sql /docker-entrypoint-initdb.d/
