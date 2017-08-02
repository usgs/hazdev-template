#! /bin/bash

# environment variables and defaults
: ${EXPOSE_HOST:="127.0.0.1"}
: ${EXPOSE_PORT:=80}
: ${MOUNT_PATH:=/theme}


# configure hostname
SERVER_NAME_FILE=/etc/httpd/conf.d/servername.conf
if [ ! -f "${SERVER_NAME_FILE}" ]; then
	echo "ServerName `hostname`" > "${SERVER_NAME_FILE}"
fi


# clean up if container is being restarted
rm -rf /var/run/httpd/*

# run apache
echo "Starting httpd on http://${EXPOSE_HOST}:${EXPOSE_PORT}${MOUNT_PATH}"
exec httpd -DFOREGROUND
