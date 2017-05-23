FROM ubuntu
LABEL version="1.0" description="lfi-labs Docker image"
RUN apt-get -y update  
RUN apt-get -y install apache2
RUN apt-get -y install php7.0 libapache2-mod-php7.0
RUN apt-get -y install git
RUN git clone https://github.com/paralax/lfi-labs.git
