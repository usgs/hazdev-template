# build template
FROM usgs/hazdev-base-images:latest-php as build

ENV NODE_VERSION 4.5.0

# Install NVM
RUN export NVM_DIR="/nvm" && \
  curl -o- \
    https://raw.githubusercontent.com/creationix/nvm/v0.33.1/install.sh \
       | /bin/bash && \
    echo 'export NVM_DIR=/nvm' >> /etc/profile.d/nvm.sh && \
    echo '. ${NVM_DIR}/nvm.sh' >> /etc/profile.d/nvm.sh && \
    /bin/bash --login -c "nvm install ${NODE_VERSION}"

# add project files
RUN mkdir /tmp/hazdev-template
WORKDIR /tmp/hazdev-template
ADD ./ /tmp/hazdev-template

# build
WORKDIR /tmp/hazdev-template
RUN /bin/bash --login -c " \
    npm install --cafile=${SSL_CERT_FILE} -g grunt-cli && \
    npm install --cafile=${SSL_CERT_FILE} --production"
RUN /bin/bash --login -c "grunt builddist"


# generate image with only build output
FROM usgs/hazdev-base-images:latest-php

# install
RUN mkdir -p \
    /data/www/html \
    /data/www/apps/hazdev-template
WORKDIR /data/www/html
COPY --from=build /tmp/hazdev-template/dist/ /data/www/apps/hazdev-template/
COPY --from=build /tmp/hazdev-template/src/htdocs/_config.inc.php /data/www/html/_config.inc.php

# apache configuration
COPY src/lib/docker/httpd.conf /etc/httpd/conf/httpd.conf
# docker entrypoint that runs non-interactive pre-install
COPY src/lib/docker/docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
# generate config
RUN /data/www/apps/hazdev-template/lib/pre-install
# symlink into apache
RUN ln -s /data/www/apps/hazdev-template/conf/httpd.conf /etc/httpd/conf.d/hazdev-template.conf
