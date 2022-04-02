FROM centos:7

RUN yum -y update \
    && yum install -y httpd vim

RUN yum -y install \
    # epel
    https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm \
    # remi
    https://rpms.remirepo.net/enterprise/remi-release-7.rpm


RUN yum -y install --enablerepo=remi,remi-php81 install php

# Enable Apache
RUN chkconfig httpd on
# Enable systemd
CMD ["/usr/sbin/init"]

EXPOSE 80
