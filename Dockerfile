FROM httpd:latest
LABEL authors="Dmytro"
ADD . /usr/local/apache2/htdocs

#WORKDIR /var/www/html
#ADD . .

EXPOSE 80
