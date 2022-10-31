FROM alpine:3.15
RUN apk update && apk add nginx openssl && rm -rf /var/cache/apk*
RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
    -subj "/C=DE/ST=Hamburg/L=Hamburg/O=42Wolfsburg/CN=ehosu" \
    -keyout /etc/nginx-selfsigned.key \
    -out /etc/nginx-selfsigned.crt
COPY conf/nginx.conf /etc/nginx/nginx.conf
EXPOSE 443
ENTRYPOINT ["nginx", "-g", "daemon off;"]