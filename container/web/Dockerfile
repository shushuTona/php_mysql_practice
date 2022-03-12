# CentOS 7
FROM centos:7

RUN yum update -y && yum clean all

# EPEL
RUN yum install -y epel-release
# remi
RUN yum -y install http://rpms.famillecollet.com/enterprise/remi-release-7.rpm

# Apache sudo curl
RUN yum install -y httpd httpd-tools sudo curl

# git ver2系インストール
RUN yum install -y http://opensource.wandisco.com/centos/7/git/x86_64/wandisco-git-release-7-1.noarch.rpm
RUN yum install -y git

# PHP
RUN yum -y install --enablerepo=remi,remi-php74 php php-devel php-mbstring php-pdo php-xml php-gd php-fpm php-mysqlnd php-opcache php-pecl-zip libzip5

# composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# MySQL Clientのインストール（DBコンテナにmysqlコマンドで接続できるようにするため）
RUN rpm --import https://repo.mysql.com/RPM-GPG-KEY-mysql-2022
RUN yum install -y https://dev.mysql.com/get/mysql80-community-release-el7-3.noarch.rpm
RUN yum install -y mysql-community-client.x86_64

# Node.js
RUN curl -sL https://rpm.nodesource.com/setup_14.x | sudo bash -
RUN yum -y install nodejs

COPY ./httpd.conf /etc/httpd/conf/httpd.conf

WORKDIR /var/www

RUN git clone https://github.com/shushuTona/php_mysql_practice.git

EXPOSE 80

ENTRYPOINT apachectl -D FOREGROUND
