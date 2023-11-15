FROM nginx:1.20.2

COPY conf/nginx.conf /etc/nginx/
COPY conf/default.conf /etc/nginx/conf.d/
COPY conf/upstream.conf /etc/nginx/conf.d/

COPY cert/loc.ast.ru.crt /etc/nginx/ssl/
COPY cert/loc.ast.ru.pem /etc/nginx/ssl/

RUN usermod -u 1000 www-data

CMD ["nginx"]

EXPOSE 80 443
