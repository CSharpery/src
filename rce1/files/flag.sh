#!/bin/sh

sed -i "s/GUETCTF/$GZCTF_FLAG/" /var/www/html/flag

export GZCTF_FLAG=""
